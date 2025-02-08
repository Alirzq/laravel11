<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\Student;

class GradeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search'); // Ambil input pencarian
        
        $grades = Grade::with(['departement', 'students'])
            ->when($search, function ($query) use ($search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc') // Urutkan data terbaru di atas
            ->paginate(10); // Menggunakan pagination

        return view('admin.grade_admin', compact('grades', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = \App\Models\Departement::all();

        return view('admin.grade.create', compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'departement_id' => 'required|exists:departements,id',
        ]);

        Grade::create($request->all());

        return redirect()->route('admin.grade.index')->with('success', 'Grade added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade = Grade::with(['departement', 'students'])->findOrFail($id);

        return view('grade.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        $students = \App\Models\Student::all();
        $departements = \App\Models\Departement::all();

        return view('admin.grade.edit', compact('grade', 'students', 'departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required',
            'departement_id' => 'required',
        ]);
        
        $grade->update($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.grade.index')
        ->with('success', 'Grade updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete(); // Hapus data grade

        return redirect()->route('admin.grade.index')->with('success', 'Grade deleted successfully');
    }
}
