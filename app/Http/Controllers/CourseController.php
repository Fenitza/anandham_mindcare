<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Course;
use App\Models\Module;
use App\Models\Topic;
use App\Models\Bonus;
use App\Models\Mentor;
use App\Models\Tag;
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
        $course = Course::with(['modules.topics', 'bonuses', 'mentors'])
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
                'organised_by' => $request->organised_by,
                'mode' => $request->mode,
                'registration_contact' => $request->registration_contact,
                'venue' => $request->venue,
                'duration' => $request->duration,
                'fee' => $request->price,
                'early_bird_fee' => $request->early_bird_fee,
                'international_pricing' => $request->international_fees
                    ? json_encode($request->international_fees)
                    : null,
                // 'international_currency' => $request->international_currency,
                // 'international_fee' => $request->international_fee,
                // 'international_early_bird_fee' => $request->international_early_bird_fee,
                'capacity' => $request->capacity, 
                'marquee_text' => $request->marquee_text,
                'status' => $request->enrollment_status,
                'course_time' => $request->course_time,
                'schedule_type' => $request->schedule_type,
                'course_dates' => $request->course_dates
                    ? json_encode($request->course_dates)
                    : null,

                'month_start' => $request->month_start,
                'month_end' => $request->month_end,

                'weekend_start' => $request->weekend_start,
                'weekend_end' => $request->weekend_end,

                'weekend_days' => $request->weekend_days
                    ? json_encode($request->weekend_days)
                    : null,

                'description' => $request->description,
                'zoom_link' => $request->zoom_link,
                'enable_qr' => $request->enable_qr ? true : false,
            ]);

            // ✅ Handle Tags (many-to-many)
            if ($request->tags) {

                // If tags come as comma string → convert to array
                $tagNames = is_array($request->tags)
                    ? $request->tags
                    : explode(',', $request->tags);

                $tagIds = [];

                foreach ($tagNames as $tagName) {

                    $tagName = trim($tagName);

                    if (!$tagName) continue;

                    // 🔥 Create or get existing tag
                    $tag = Tag::firstOrCreate([
                        'name' => $tagName
                    ]);

                    $tagIds[] = $tag->id;
                }

                // 🔥 Attach to pivot table
                $course->tags()->sync($tagIds);
            }
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

           /*
|--------------------------------------------------------------------------
| SAVE MULTIPLE MENTORS
|--------------------------------------------------------------------------
*/

if ($request->has('mentors')) {

    foreach ($request->mentors as $index => $mentorData) {

        // skip completely empty mentor blocks
        if (
            empty($mentorData['name']) &&
            empty($mentorData['qualification']) &&
            empty($mentorData['bio']) &&
            !$request->hasFile("mentors.$index.image")
        ) {
            continue;
        }

        $mentorImagePath = null;

        // image upload
        if ($request->hasFile("mentors.$index.image")) {

            $mentorImagePath = $request
                ->file("mentors.$index.image")
                ->store('mentors', 'public');
        }

        Mentor::create([

            'course_id' => $course->id,

            'name' => $mentorData['name'] ?? null,

            'qualification' => $mentorData['qualification'] ?? null,

            'bio' => $mentorData['bio'] ?? null,

            'image' => $mentorImagePath,

        ]);
    }
}

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
        | VALIDATION
        |--------------------------------------------------------------------------
        */
        $request->validate([

            'title' => 'required|string|max:255',

            'schedule_type' => 'required|in:dates,month_range,weekend_range',

            'course_dates.*' => 'nullable|date',

            'month_start' => 'nullable|required_if:schedule_type,month_range',
            'month_end' => 'nullable|required_if:schedule_type,month_range',

            'weekend_start' => 'nullable|required_if:schedule_type,weekend_range',
            'weekend_end' => 'nullable|required_if:schedule_type,weekend_range',
            'weekend_days' => 'nullable|array',
        ]);

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
        | SCHEDULE HANDLING
        |--------------------------------------------------------------------------
        */
        $scheduleType = $request->schedule_type;

        $courseDates = null;
        $monthStart = null;
        $monthEnd = null;
        $weekendStart = null;
        $weekendEnd = null;
        $weekendDays = null;

        if ($scheduleType === 'dates') {

            $courseDates = $request->course_dates
                ? json_encode(array_filter($request->course_dates))
                : null;
        }

        if ($scheduleType === 'month_range') {

            $monthStart = $request->month_start;
            $monthEnd = $request->month_end;
        }

        if ($scheduleType === 'weekend_range') {

            $weekendStart = $request->weekend_start;
            $weekendEnd = $request->weekend_end;
            $weekendDays = $request->weekend_days ? json_encode($request->weekend_days) : null;
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
            'organised_by' => $request->organised_by,
            'venue' => $request->venue,
            'mode' => $request->mode,
            'registration_contact' => $request->registration_contact,
            'duration' => $request->duration,
            'fee' => $request->price,
            'early_bird_fee' => $request->early_bird_fee,
            'international_pricing' => $request->international_fees
                ? json_encode($request->international_fees)
                : null,
            'capacity' => $request->capacity,
            'marquee_text' => $request->marquee_text,
            'status' => $request->enrollment_status,
            'description' => $request->description,
            'course_time' => $request->course_time,
            'schedule_type' => $scheduleType,
            'course_dates' => $courseDates,

            'month_start' => $monthStart,
            'month_end' => $monthEnd,

            'weekend_start' => $weekendStart,
            'weekend_end' => $weekendEnd,
            'weekend_days' => $weekendDays,
            'zoom_link' => $request->zoom_link,
            'venue' => $request->venue,
            'mode' => $request->mode,
            'enable_qr' => $request->enable_qr ? true : false,
            'registration_contact' => $request->registration_contact,
        ]);

        /*
        |--------------------------------------------------------------------------
        | 2.1 SYNC TAGS (IMPORTANT)
        |--------------------------------------------------------------------------
        */
        if ($request->tags !== null) {

            $tagNames = is_array($request->tags)
                ? $request->tags
                : explode(',', $request->tags);

            $tagIds = [];

            foreach ($tagNames as $tagName) {

                $tagName = trim($tagName);
                if (!$tagName) continue;

                // normalize (optional but recommended)
                $tagName = strtolower($tagName);

                $tag = Tag::firstOrCreate([
                    'name' => $tagName
                ]);

                $tagIds[] = $tag->id;
            }

            // 🔥 sync replaces old + adds new
            $course->tags()->sync($tagIds);

        } else {
            // if no tags sent → remove all
            $course->tags()->detach();
        }
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
| 7. UPDATE MULTIPLE MENTORS
|--------------------------------------------------------------------------
*/

// delete old mentor images
// foreach ($course->mentors as $oldMentor) {

//     if ($oldMentor->image) {
//         \Storage::disk('public')->delete($oldMentor->image);
//     }
// }

// delete old mentors
$course->mentors()->delete();

/*
|--------------------------------------------------------------------------
| SAVE NEW MENTORS
|--------------------------------------------------------------------------
*/

if ($request->mentors) {

    foreach ($request->mentors as $index => $mentorData) {

        // preserve old image
        $mentorImagePath = $mentorData['existing_image'] ?? null;

        // upload new image if selected
        if ($request->hasFile("mentors.$index.image")) {

            // delete old image
            if (!empty($mentorData['existing_image'])) {

                \Storage::disk('public')
                    ->delete($mentorData['existing_image']);
            }

            $mentorImagePath = $request
                ->file("mentors.$index.image")
                ->store('mentors', 'public');
        }

        Mentor::create([

            'course_id' => $course->id,

            'name' => $mentorData['name'] ?? null,

            'qualification' => $mentorData['qualification'] ?? null,

            'bio' => $mentorData['bio'] ?? null,

            'image' => $mentorImagePath,

        ]);
    }
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
{
    $selectedType = $request->type ?? 'All Courses';

    $selectedSpecialization = $request->specialization;

    $selectedTags = $request->tags ?? [];

    $selectedStatus = $request->status ?? 'upcoming';

    $today = now()->startOfDay();

    $query = Course::with('tags');

    /*
|--------------------------------------------------------------------------
| STATUS FILTER
|--------------------------------------------------------------------------
*/

if (!empty($selectedStatus)) {

    $query->where('status', $selectedStatus);
}

    /*
    |--------------------------------------------------------------------------
    | TYPE FILTER
    |--------------------------------------------------------------------------
    */

    if ($selectedType !== 'All Courses') {

        match ($selectedType) {

            'Free' => $query->where('course_type', 'free'),

            'Premium' => $query->where('course_type', 'premium'),

            'Specialised' => $query->where('course_type', 'specialised'),

            default => null
        };
    }

    /*
    |--------------------------------------------------------------------------
    | SPECIALIZATION FILTER
    |--------------------------------------------------------------------------
    */

    if (!empty($selectedSpecialization)) {

        $query->where('specialisation', $selectedSpecialization);
    }

    /*
    |--------------------------------------------------------------------------
    | TAG FILTER
    |--------------------------------------------------------------------------
    */

    if (!empty($selectedTags)) {

        $query->whereHas('tags', function ($q) use ($selectedTags) {

            $q->whereIn('tags.id', $selectedTags);

        });
    }

    $courses = $query
        ->orderBy('course_date', 'asc')
        ->get();

    /*
    |--------------------------------------------------------------------------
    | SPECIALIZATIONS
    |--------------------------------------------------------------------------
    */

    $specializations = Course::select('specialisation')
        ->whereNotNull('specialisation')
        ->distinct()
        ->get();

    /*
    |--------------------------------------------------------------------------
    | TAGS
    |--------------------------------------------------------------------------
    */

    $tagsBySpecialization = Tag::with([
        'courses' => function ($q) {
            $q->select('courses.id', 'specialisation');
        }
    ])->get()->groupBy(function ($tag) {

        return optional($tag->courses->first())->specialisation;

    });

    /*
    |--------------------------------------------------------------------------
    | TIMELINE GROUPS
    |--------------------------------------------------------------------------
    */

    $timelineGroups = $courses
    ->groupBy(function ($course) {

        switch ($course->schedule_type) {

            case 'dates':

            $dates = $course->course_dates;

            // decode if json string
            if (is_string($dates)) {
                $dates = json_decode($dates, true);
            }

            // ensure array
            if (!is_array($dates) || empty($dates)) {
                return 'Schedule';
            }

            $firstDate = collect($dates)
                ->filter(fn($date) => !empty($date))
                ->first();

            return $firstDate
                ? Carbon::parse($firstDate)->format('M Y')
                : 'Schedule';

            case 'month_range':

                return Carbon::parse($course->month_start)
                    ->format('M Y');

            case 'weekend_range':

            $start = Carbon::parse($course->weekend_start ?? null);
            $end   = Carbon::parse($course->weekend_end ?? null);

            $startMonth = $start->format('M, Y');
            $endMonth   = $end->format('M, Y');

            return $startMonth . ' - ' . $endMonth;

            default:

                return 'Other';
        }
    })
        ->map(function ($group, $key) {

            return [

                'label' => $key,

                'title' => $key,

                'courses' => $group->map(fn ($course) => (object)[

                    'id' => $course->id,

                    'title' => $course->title,

                    'price' => $course->fee > 0
                        ? '₹' . number_format($course->fee)
                        : 'Free',

                    'international_fees' => $course->international_pricing ?? [],

                    'description' => $course->description,

                    'image' => $course->course_image,

                    'duration' => $course->duration ?? $course->course_time,

                    'category' => ucfirst($course->specialisation),

                    'type' => match ($course->course_type) {

                        'free' => 'Free',

                        'premium' => 'Premium',

                        'specialised' => 'Specialised',

                        default => 'Unknown'
                    },

                    'tags' => $course->tags->pluck('name')->toArray()

                ])->values()

            ];
        })
        ->values();

    return view('pages.courses.course_list', compact(

        'specializations',

        'tagsBySpecialization',

        'selectedType',

        'selectedSpecialization',

        'selectedTags',

        'selectedStatus',

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
private function getTagIcon($tagName)
{
    return match (strtolower($tagName)) {
        'mental health' => 'psychology',
        'child care' => 'child_care',
        'adolescent care' => 'groups',
        'therapy' => 'healing',
        'neuro' => 'neurology',
        'wellness' => 'spa',
        'counselling' => 'support_agent',
        default => 'label' // fallback icon
    };
}
public function detail($id)
{
    $course = Course::with(['modules.topics', 'bonuses', 'mentors'])
                    ->findOrFail($id);

    return view('pages.courses.course_detail', compact('course'));

}
public function reserve($id)
{
    $course = Course::findOrFail($id);
    return view('pages.courses.course_enroll', compact('course'));
}

    
}