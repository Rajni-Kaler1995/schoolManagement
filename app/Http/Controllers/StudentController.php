<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\classes;

class StudentController extends Controller
{
    public function index()
    { 
        $data['students'] = Student::all();
        $data['classes'] = classes::all();
        return view('students.index',$data);
    }

    public function create(Request $request)
    { 
        $data = request()->validate([
			'name' =>'required|string|max:50',
			'age' => 'required',
			'class' => 'required',
			'rollNo' => 'required',
		  ],
		  [
			'name.required' => 'Name is a required field.',
			'age.required' => 'Age is a required field.',
			'class.required' => 'Class is a required field.',
            'rollNo.required' => 'Roll No. is a required field.',
		  ]
		);

        (new Student())->createStudent($request);
        return ['code' => 200, 'message' => 'Student Created successfully'];
    }
    

}
