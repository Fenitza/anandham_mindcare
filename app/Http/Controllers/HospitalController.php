<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HospitalController extends Controller
{

public function home()
{
    $courses = Course::with('tags')
        ->where('course_type', 'free')
        ->get();

    return view('pages.hospital.home', compact('courses'));
}   

}