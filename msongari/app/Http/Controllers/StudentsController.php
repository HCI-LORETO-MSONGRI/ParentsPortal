<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function list()
    {
    $boardingStudents = Student::where('school', 1)->get();
     $dayStudents = Student::where('school', 0)->get();

	return view('admin.students', compact('boardingStudents', 'dayStudents'));

    }

    public function store()
    {
    	//add validation
    	$data = request()->validate([
         'name' => 'required|min:3',
         'email' => 'required|email',
         'school' => 'required',
    	]);

    	$student = new Student();
    	$student->name =(request('name'));
    	$student->email =(request('email'));
    	$student->school =(request('school'));
    	$student->save();

    	return back();
    }
}
