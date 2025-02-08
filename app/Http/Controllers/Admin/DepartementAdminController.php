<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departement;

class DepartementAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = trim($request->input('search'));
        
        $departments = Departement::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('desc', 'like', "%{$search}%");
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('admin.departement_admin', [
            'departments' => $departments,
            'search' => $search,
            'title' => 'Departement Management',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departement.create', ['title' => 'Departement Management']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string|max:1000'
        ]);

        Departement::create($request->only(['name', 'desc']));

        return redirect()->route('admin.departement.index')
            ->with('success', 'Departement added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departement = Departement::findOrFail($id);
        return view('admin.departement.show', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departement = Departement::findOrFail($id);
        return view('admin.departement.edit', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string|max:1000',
        ]);

        $departement->update($validatedData);

        return redirect()->route('admin.departement.index')
            ->with('success', 'Departement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        $departement->delete();
        return redirect()->route('admin.departement.index')
            ->with('success', 'Departement deleted successfully');
    }
}
