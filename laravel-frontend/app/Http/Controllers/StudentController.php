<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends ClientController
{
    public function getAllStudents(){

        $students = $this->obtainAllStudents();

        return view('students.all-students', compact('students'));

    }

    public function getInputStudent(){
        return view('students.input-student');
    }

    public function postOneStudent(Request $request){

        $this->validate($request, ['studentId' => 'required|numeric']);

        $studentId = $request->get('studentId');

        $student = $this->obtainOneStudent($studentId);

        return view('students.one-student', compact('student'));

    }


    public function getCreateStudent(){
        return view('students.create-student');
    }

    public function postCreateStudent(Request $request){

        $message = $this->createOneStudent($request->all());

        return redirect('/students')->with('success', $message);

    }

    public function getUpdateStudent(){

        $students = $this->obtainAllStudents();

        return view('students.select-student', compact('students'));
    }

    public function postUpdateStudent(Request $request){

        $studentId = $request->get('studentId');

        $student = $this->obtainOneStudent($studentId);

        return view('students.update-student', compact('student'));

    }

    public function putUpdateStudent(Request $request){

        $message = $this->updateOneStudent($request->all());

        return redirect('/students')->with('success', $message);

    }

    public function getRemoveStudent(){

        $students = $this->obtainAllStudents();

        return view('students.select-remove-student', compact('students'));
    }

    public function postRemoveStudent(Request $request){

        $studentId = $request->get('studentId');

        $student = $this->obtainOneStudent($studentId);

        return view('students.confirm-remove-student', compact('student'));

    }

    public function deleteRemoveStudent(Request $request){

        $message = $this->removeOneStudent($request->all());

        return redirect('/students')->with('success', $message);

    }
}
