<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $course = Course::findOrFail($id);
        return view('admin.courses.edit', compact('course'));
    }
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            // ✅ 1. Save Course
            $course = Course::create([
                'title' => $request->title,
                'course_type' => $request->course_type,
                'duration' => $request->duration,
                'fee' => $request->price,
                'capacity' => $request->capacity,
                'marquee_text' => $request->marquee_text,
                'enrollment_status' => $request->enrollment_status,
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
}