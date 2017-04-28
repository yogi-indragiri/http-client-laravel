<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends ClientController
{
    public function getAllTeachers(){

        $teachers = $this->obtainAllTeachers();

        return view('teachers.all-teachers', compact('teachers'));

    }

    public function getInputTeacher(){
        return view('teachers.input-teacher');
    }

    public function postOneTeacher(Request $request){

        $this->validate($request, ['teacherId' => 'required|numeric']);

        $teacherId = $request->get('teacherId');

        $teacher = $this->obtainOneTeacher($teacherId);

        return view('teachers.one-teacher', compact('teacher'));

    }

    public function getCreateTeacher(){
        return view('teachers.create-teacher');
    }

    public function postCreateTeacher(Request $request){

        $message = $this->createOneTeacher($request->all());

        return redirect('/teachers')->with('success', $message);

    }

    public function getUpdateTeacher(){

        $teachers = $this->obtainAllTeachers();

        return view('teachers.select-teacher', compact('teachers'));
    }

    public function postUpdateTeacher(Request $request){

        $studentId = $request->get('studentId');

        $teacher = $this->obtainOneteacher($studentId);

        return view('teachers.update-teacher', compact('teacher'));

    }

    public function putUpdateTeacher(Request $request){

        $message = $this->updateOneTeacher($request->all());

        return redirect('/teachers')->with('success', $message);

    }

    public function getRemoveTeacher(){

        $teachers = $this->obtainAllTeachers();

        return view('teachers.select-remove-teacher', compact('teachers'));
    }

    public function postRemoveTeacher(Request $request){

        $studentId = $request->get('studentId');

        $teacher = $this->obtainOneteacher($studentId);

        return view('teachers.confirm-remove-teacher', compact('teacher'));

    }

    public function deleteRemoveTeacher(Request $request){

        $message = $this->removeOneTeacher($request->all());

        return redirect('/teachers')->with('success', $message);

    }
}
