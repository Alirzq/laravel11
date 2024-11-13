<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
   //
   public function grade(){
    $grade = Grade::with('students','departement')->latest()->get();

    return view('grade', [
        'title' => "Grade",
       'grades' => $grade//rout model binding
    //    'students' => $students query builder (object only)
    ]);
}
}

