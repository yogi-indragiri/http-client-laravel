<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends ClientController
{
    public function getAllCourses(){

        $courses = $this->obtainAllCourses();

        return view('courses.all-courses', compact('courses'));

    }

    public function getInputCourse(){
        return view('courses.input-course');
    }

    public function postOneCourse(Request $request){

        $this->validate($request, ['courseId' => 'required|numeric']);

        $courseId = $request->get('courseId');

        $course = $this->obtainOneCourse($courseId);

        return view('courses.one-course', compact('course'));

    }

}
