<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index()
    {
   $students = Student::all();

	return view('admin.index', compact('students'));

    }

    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {
    	//add validation
    	$data = request()->validate([
         'name' => 'required|min:3',
         'email' => 'required|email',
         'school' => 'required',
         'dob' => 'required|date_format:Y-m-d',
         
    	]);


      Student::create($data);

    	return redirect('students');
    }

    public function show(Student $student)
    {
       
       return view('admin.show', compact('student')); 
    }


}
