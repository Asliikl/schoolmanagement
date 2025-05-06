<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\View\View;
class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses',$courses);
    }


    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message','Courses added!');
    }

    public function show(string $id)
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses',$courses);
    }

    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('courses.edit')->with('courses',$course);
    }

    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return redirect('courses')->with('flash_message', 'Course updated!');
    }

    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message','Course deleted!');
    }
}
