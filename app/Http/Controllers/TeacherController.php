<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    { 
        $data['teachers'] = Teacher::all();
        return view('teachers.index',$data);
    }

    public function create(Request $request)
    { 
        $data = request()->validate([
			'name' =>'required|string|max:50',
			'age' => 'required',
			'sex' => 'required',
		  ],
		  [
			'name.required' => 'Name is a required field.',
			'age.required' => 'Age is a required field.',
			'sex.required' => 'Sex is a required field.',
		  ]
		);

        (new Teacher())->createTeacher($request);
        return ['code' => 200, 'message' => 'Student Created successfully'];
    }
}
