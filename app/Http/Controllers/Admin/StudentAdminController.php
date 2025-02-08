<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Departement;
use App\Http\Controllers\Controller;

class StudentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search'); // Ambil input pencarian
        $students = Student::with(['grade', 'departement'])
            ->when($search, function ($query) use ($search) {
                return $query->where('name', 'like', "%{$search}%")
                             ->orWhere('email', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc') // Urutkan data terbaru di atas
            ->paginate(20); // Menggunakan pagination

        return view('admin.student_admin', compact('students', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        return view('admin.student.create', compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'grade_id' => 'required|exists:grades,id',
        ]);

        // Ambil departement_id dari grade yang dipilih
        $grade = Grade::findOrFail($request->grade_id);
        
        // Buat student baru dengan data dari request
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->grade_id = $request->grade_id;
        $student->departement_id = $grade->departement_id; // Set departement_id dari grade
        $student->save();

        return redirect()->route('admin.student.index')
            ->with('success', 'Student added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $grades = \App\Models\Grade::all();
        $departements = \App\Models\Departement::all();

        return view('admin.student.edit', compact('student', 'grades', 'departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'grade_id' => 'required',
            'email' => 'required',
            'address' => 'required',
            'departement_id' => 'required',
        ]);

        $student->update($validatedData);

        // Mengupdate department_id berdasarkan grade
        $student->departement_id = $student->grade->departement_id;
        $student->save();

        return redirect()->route('admin.student.index')
            ->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('admin.student.index')->with('success', 'Student deleted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    { 
        $student = Student::with(['grade', 'departement'])->findOrFail($id);

        return view('students.show', compact('student'));
    }
}
