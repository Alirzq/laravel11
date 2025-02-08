<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\Admin\StudentAdminController;
use App\Http\Controllers\Admin\GradeAdminController;
use App\Http\Controllers\Admin\DepartementAdminController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/home',[HomeController::class,'index']);
Route::get('/contact', [ContactController::class,'contact']);
Route::get('/profile',[ContactController::class,'biodata']);


Route::get('/student',[StudentController::class,'grade']);
Route::get('/grade',[GradeController::class,'grade']);

Route::get('/departement',[DepartementController::class,'departement']);



// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    
    // Admin Student Routes
    Route::prefix('student')->group(function () {
        Route::get('/', [StudentAdminController::class, 'index'])->name('admin.student.index');
        Route::get('/create', [StudentAdminController::class, 'create'])->name('admin.student.create');
        Route::post('/store', [StudentAdminController::class, 'store'])->name('admin.student.store');
        Route::get('/edit/{student}', [StudentAdminController::class, 'edit'])->name('admin.student.edit');
        Route::put('/update/{student}', [StudentAdminController::class, 'update'])->name('admin.student.update');
        Route::delete('/admins/student/destroy/{student}', [StudentAdminController::class, 'destroy'])->name('students.destroy');
    });

    // Admin Grade Routes

    Route::prefix('grade')->group(function () {
        Route::get('/', [GradeAdminController::class, 'index'])->name('admin.grade.index');
        Route::get('/create', [GradeAdminController::class, 'create'])->name('admin.grade.create');
        Route::post('/store', [GradeAdminController::class, 'store'])->name('admin.grade.store');
        Route::get('/edit/{grade}', [GradeAdminController::class, 'edit'])->name('admin.grade.edit');
        Route::put('/update/{grade}', [GradeAdminController::class, 'update'])->name('admin.grade.update');
        Route::delete('/admins/student/destroy/{student}', [GradeAdminController::class, 'destroy'])->name('admin.grade.destroy');
    });

    // Admin Department Routes

    Route::prefix('departement')->group(function () {
        Route::get('/', [DepartementAdminController::class, 'index'])->name('admin.departement.index');
        Route::get('/create', [DepartementAdminController::class, 'create'])->name('admin.departement.create');
        Route::post('/store', [DepartementAdminController::class, 'store'])->name('admin.departement.store');
        Route::get('/edit/{departement}', [DepartementAdminController::class, 'edit'])->name('admin.departement.edit');
        Route::put('/update/{departement}', [DepartementAdminController::class, 'update'])->name('admin.departement.update');
        Route::delete('/destroy/{departement}', [DepartementAdminController::class, 'destroy'])->name('admin.departement.destroy');
    });
});

