<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classes;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectController extends Controller
{
   
    public function index()
    { 
        $data['subjects'] = (new Subject())->getSubjects();
		$data['teachers'] = Teacher::all();
        $data['classes'] = classes::all();
        return view('subjects.index',$data);
    }

    public function create(Request $request)
    {
        $data = request()->validate([
			'subject_name' =>'required|string|max:50',
			'class' => 'required',
		  ],
		  [
			'subject_name.required' => 'Name is a required field.',
			'class.required' => 'Class is a required field.'
		  ]
		);

        (new Subject())->createSubject($request);
        return ['code' => 200, 'message' => 'Student Created successfully'];
    }

}
