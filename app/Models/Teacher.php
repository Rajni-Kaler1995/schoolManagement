<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';

    public function createTeacher($request){ 
        $teacher = new Teacher;
        $teacher->name = $request->name;
        $teacher->age = $request->age;
        $teacher->sex = $request->sex;
        $teacher->image = null;
        $teacher->save();
    
        return $teacher ;
    }
}
