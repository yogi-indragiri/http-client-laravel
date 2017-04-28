<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseStudentController extends ClientController
{
    public function getShowAllCourses()
    {
        $courses = $this->obtainAllCourses();

        return view('course-student.select-course', compact('courses'));
    }

    public function postShowCourseStudents(Request $request)
    {
        $courseId = $request->get('courseId');

        $students = $this->obtainCourseStudents($courseId);

        return view('course-student.show-course-students', compact('students'));
    }

    public function getAddStudent()
    {
        $students = $this->obtainAllStudents();
        $courses = $this->obtainAllCourses();

        return view('course-student.add-student-course', compact('students','courses'));
    }

    public function postAddStudent(Request $request)
    {
        $courseId = $request->get('courseId');
        $studentId = $request->get('studentId');

        $message = $this->addStudentToCourse($courseId, $studentId);

        return redirect('/courses/students')->with('success', $message);
    }

    public function getRemoveStudent()
    {
        $courses = $this->obtainAllCourses();
        return view('course-student.select-course-remove', compact('courses'));
    }

    public function postRemoveStudent(Request $request)
    {
        $courseId = $request->get('courseId');
        $students = $this->obtainCourseStudents($courseId);

        return view('course-student.remove-student', ['students' => $students, 'courseId' => $courseId]);
    }

    public function deleteRemoveStudent(Request $request)
    {
        $message = $this->removeCourseStudent($request->all());

        return redirect('/courses/students')->with('success', $message);
    }
}
