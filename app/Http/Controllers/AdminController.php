<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Grade;
use App\Models\Student;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'students' => Student::all(),
            'departments' => Departement::all(),
            'grades' => Grade::all(),
        ];

        return view('components.admin-layout', $data);
    }
}
