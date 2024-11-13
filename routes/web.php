<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);
Route::get('/contact', [ContactController::class,'contact']);
Route::get('/profile',[ContactController::class,'biodata']);

Route::get('/grade',[GradeController::class,'grade']);

Route::get('/departement',[DepartementController::class,'departement']);

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

// Route::get('/profile',function(){
//     return view('/profile',[
//         'title' => "Biodata",
//         'nama' => "Radithia",
//         'alamat' => "Kudus",
//         'linkedin'=>"https://www.linkedin.com/in/raditya-saputra-24938a298/",
//         'github' =>"https://github.com/dith08?tab=repositories"
//     ]);
// });

