<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    public function createStudent($request){ 
        $student = new Student;
        $student->name = $request->name;
        $student->age = $request->age;
        $student->class = $request->class;
        $student->roll_no = $request->rollNo;
        $student->image = null;
        $student->save();
    
        return $student ;
    }
}
