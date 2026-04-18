<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Course;
use App\Models\Module;
use App\Models\Topic;
use App\Models\Bonus;
use App\Models\Mentor;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get(); // or with relations if needed
        return view('pages.dasboard.admin.courses', compact('courses'));
    }

    public function edit($id)
    {
        $course = Course::with(['modules.topics', 'bonuses', 'mentor'])
                        ->findOrFail($id);

        return view('pages.dasboard.admin.add_course', compact('course'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            // dd($request->all());

            // ✅ 1. Save Course
            $course = Course::create([
                'title' => $request->title,
                'course_type' => $request->course_type,
                'course_image' => $request->hasFile('course_image') ? $request->file('course_image')->store('courses', 'public') : null,
                'specialisation' => $request->specialisation,
                'duration' => $request->duration,
                'fee' => $request->price,
                'capacity' => $request->capacity, 
                'marquee_text' => $request->marquee_text,
                'status' => $request->enrollment_status,
                'course_time' => $request->course_time,
                'course_date' => $request->course_date,
                'description' => $request->description,
                'zoom_link' => $request->zoom_link,
                'enable_qr' => $request->enable_qr ? true : false,
            ]);
            // dd($request->all());
            // ✅ 2. Save Modules + Topics
            if ($request->modules) {
                foreach ($request->modules as $index => $moduleData) {

                    $module = Module::create([
                        'course_id' => $course->id,
                        'title' => $moduleData['title'] ?? null,
                        'description' => $moduleData['description'] ?? null,
                        'module_order' => $index + 1, // ✅ FIX
                    ]);


                    // Topics
                    if (isset($moduleData['topics'])) {
                        foreach ($moduleData['topics'] as $topic) {
                            if ($topic) {
                                Topic::create([
                                    'module_id' => $module->id,
                                    'name' => $topic,
                                ]);
                            }
                        }
                    }
                }
            }

            // ✅ 3. Save Bonuses
            if ($request->bonuses) {
                foreach ($request->bonuses as $bonusData) {
                    Bonus::create([
                        'course_id' => $course->id,
                        'title' => $bonusData['title'] ?? null,
                        'value' => $bonusData['value'] ?? 0,
                        'description' => $bonusData['description'] ?? null,
                    ]);
                }
            }

            // ✅ 4. Save Mentor
            $mentorImagePath = null;

            if ($request->hasFile('mentor_image')) {
                $mentorImagePath = $request->file('mentor_image')->store('mentors', 'public');
            }

            Mentor::create([
                'course_id' => $course->id,
                'name' => $request->mentor_name,
                'qualification' => $request->mentor_qualification,
                'bio' => $request->mentor_bio,
                'image' => $mentorImagePath,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Course Created Successfully ✅');

         } catch (\Exception $e) {
                DB::rollback();
                dd($e->getMessage());
            }
    }

    public function update(Request $request, $id)
{
    DB::beginTransaction();

    try {
// dd($request->modules);
        $course = Course::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | 1. COURSE IMAGE UPDATE
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('course_image')) {

            // delete old
            if ($course->course_image) {
                \Storage::disk('public')->delete($course->course_image);
            }

            $course->course_image = $request->file('course_image')
                ->store('courses', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | 2. UPDATE COURSE
        |--------------------------------------------------------------------------
        */
        $course->update([
            'title' => $request->title,
            'course_type' => $request->course_type,
            'specialisation' => $request->specialisation,
            'duration' => $request->duration,
            'fee' => $request->price,
            'capacity' => $request->capacity,
            'marquee_text' => $request->marquee_text,
            'status' => $request->enrollment_status,
            'description' => $request->description,
            'course_time' => $request->course_time,
            'course_date' => $request->course_date,
            'zoom_link' => $request->zoom_link,
            'enable_qr' => $request->enable_qr ? true : false,
        ]);
        // dd($request->all());

        /*
        |--------------------------------------------------------------------------
        | 3. DELETE OLD MODULES + TOPICS
        |--------------------------------------------------------------------------
        */
        foreach ($course->modules as $module) {
            $module->topics()->delete();
        }
        $course->modules()->delete();

        /*
        |--------------------------------------------------------------------------
        | 4. INSERT NEW MODULES + TOPICS
        |--------------------------------------------------------------------------
        */
        if ($request->modules) {
            foreach ($request->modules as $index => $moduleData) {

                $module = Module::create([
                    'course_id' => $course->id,
                    'title' => $moduleData['title'] ?? null,
                    'description' => $moduleData['description'] ?? null,
                    'module_order' => $index + 1,
                ]);

                if (!empty($moduleData['topics'])) {
                    foreach ($moduleData['topics'] as $topic) {
                        if ($topic) {
                            Topic::create([
                                'module_id' => $module->id,
                                'name' => $topic,
                            ]);
                        }
                    }
                }
            }
        }

        /*
        |--------------------------------------------------------------------------
        | 5. DELETE OLD BONUSES
        |--------------------------------------------------------------------------
        */
        $course->bonuses()->delete();

        /*
        |--------------------------------------------------------------------------
        | 6. INSERT NEW BONUSES
        |--------------------------------------------------------------------------
        */
        if ($request->bonuses) {
            foreach ($request->bonuses as $bonusData) {
                Bonus::create([
                    'course_id' => $course->id,
                    'title' => $bonusData['title'] ?? null,
                    'value' => $bonusData['value'] ?? 0,
                    'description' => $bonusData['description'] ?? null,
                ]);
            }
        }

        /*
        |--------------------------------------------------------------------------
        | 7. UPDATE MENTOR
        |--------------------------------------------------------------------------
        */
        $mentor = $course->mentor;

        if ($mentor) {

            // image update
            if ($request->hasFile('mentor_image')) {

                if ($mentor->image) {
                    \Storage::disk('public')->delete($mentor->image);
                }

                $mentor->image = $request->file('mentor_image')
                    ->store('mentors', 'public');
            }

            $mentor->update([
                'name' => $request->mentor_name,
                'qualification' => $request->mentor_qualification,
                'bio' => $request->mentor_bio,
                'image' => $mentor->image,
            ]);

        } else {

            // create if not exists
            $mentorImage = null;

            if ($request->hasFile('mentor_image')) {
                $mentorImage = $request->file('mentor_image')
                    ->store('mentors', 'public');
            }

            Mentor::create([
                'course_id' => $course->id,
                'name' => $request->mentor_name,
                'qualification' => $request->mentor_qualification,
                'bio' => $request->mentor_bio,
                'image' => $mentorImage,
            ]);
        }

        DB::commit();

        return redirect()->route('admin.courses')
            ->with('success', 'Course Updated Successfully ✅');

    } catch (\Exception $e) {
        DB::rollback();
        dd($e->getMessage());
    }
}

    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        // Delete course image
        if ($course->course_image) {
            \Storage::disk('public')->delete($course->course_image);
        }

        // Delete mentor image
        if ($course->mentor && $course->mentor->image) {
            \Storage::disk('public')->delete($course->mentor->image);
        }

        $course->delete();

        return redirect()->route('admin.courses')
            ->with('success', 'Course Deleted Successfully ✅');
    }

    public function home()
    {
        
    $courses = Course::latest()->take(6)->get(); // featured
    $upcoming = Course::whereDate('course_date', '>=', now())
                      ->orderBy('course_date')
                      ->take(2)
                      ->get();

    return view('pages.courses.home', compact('courses', 'upcoming'));  
    }

        public function list(Request $request)
    {   // 🔹 Filters
     
        $selectedType = $request->type ?? 'All Courses';
        $selectedSpecialization = $request->specialization;

        // 🔹 Base Query
        $query = Course::query()->where('status', 'active');

        // 🔹 Course Type Filter
        if ($selectedType !== 'All Courses') {

            match ($selectedType) {
                'Free Modules' => $query->where('course_type', 'free'),
                'Premium Tracks' => $query->where('course_type', 'premium'),
                'Specialised Fellowships' => $query->where('course_type', 'specialised'),
                default => null
            };
        }

        // 🔹 Specialization Filter
        if ($selectedSpecialization) {
            $query->where('specialisation', $selectedSpecialization);
        }

        // 🔹 Get Courses
        $courses = $query->orderBy('course_date', 'desc')->get();

        // 🔹 Specializations
        $specializations = Course::select('specialisation')
            ->distinct()
            ->get()
            ->map(function ($item) {
                return (object)[
                    'id' => $item->specialisation,
                    'name' => ucfirst($item->specialisation),
                    'icon' => $this->getIcon($item->specialisation)
                ];
            });

        // 🔹 Timeline Grouping
        $timelineGroups = $courses->groupBy(function ($course) {
            return Carbon::parse($course->course_date)->format('M Y');
        })->map(function ($group, $key) {

            return [
                'label' => Carbon::parse($key)->format('M y'),
                'title' => $this->getPhaseTitle($key),
                'courses' => $group->map(function ($course) {

                    return (object)[
                        'id' => $course->id,
                        'title' => $course->title,
                        'price' => $course->fee > 0 ? '₹' . number_format($course->fee) : 'Free',
                        'description' => $course->description,
                        'image' => $course->course_image,
                        'duration' => $course->duration ?? $course->course_time,
                        'category' => ucfirst($course->specialisation),
                        'type' => match ($course->course_type) {
                            'free' => 'Free Module',
                            'premium' => 'Premium Track',
                            'specialised' => 'Fellowship',
                            default => 'Unknown'
                        }
                    ];
                })->values()
            ];
        })->values();

        return view('pages.courses.course_list', compact(
            'specializations',
            'selectedType',
            'selectedSpecialization',
            'timelineGroups'
        ));
    }
    private function getIcon($specialisation)
{
    return match (strtolower($specialisation)) {
        'psychiatry' => 'psychology',
        'neurology' => 'neurology',
        'holistic care' => 'self_care',
        'pediatrics' => 'child_care',
        'research' => 'biotech',
        default => 'category'
    };
}
private function getPhaseTitle($date)
{
    $month = \Carbon\Carbon::parse($date)->month;

    if ($month <= 4) {
        return 'Foundation & Integrative Basics';
    } elseif ($month <= 8) {
        return 'Clinical Specializations';
    } else {
        return 'Global Research Practicum';
    }
}

public function detail($id)
{
    $course = Course::with(['modules.topics', 'bonuses', 'mentor'])
                    ->findOrFail($id);

    return view('pages.courses.course_detail', compact('course'));

}
public function reserve($id)
{
    $course = Course::findOrFail($id);
    return view('pages.courses.course_enroll', compact('course'));
}

    
}