<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement; // Pastikan model Departement sudah diimport

class DepartementController extends Controller
{
    public function departement()
    {
        // Mengambil semua data departemen
        $departments = Departement::all();

        return view('departement', [
            'title' => "Departement",
            'departments' => $departments, // Mengirim data ke view
        ]);
    }
}
