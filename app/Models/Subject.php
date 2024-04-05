<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';

    public function createSubject($request){ 
        $student = new Subject;
        $student->subject_name = $request->subject_name;
        $student->class_id = $request->class;
        $student->teacher_id = $request->teacher_id;
        $student->save();
    
        return $student ;
    }

    public function getSubjects(){ 
       $getSubjects =  Subject::selectRaw('subjects.*, class.class as class_name, teachers.name as teacher_name')
        ->join('class', 'class.id', '=', 'subjects.class_id')
		->join('teachers', 'teachers.id', '=', 'subjects.teacher_id')
        ->get();
    
        return $getSubjects ;
    }
}
