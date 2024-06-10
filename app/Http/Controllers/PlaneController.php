<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $planes = Plane::all();
        return view('planes.index', compact('planes'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('planes.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama_pesawat' => 'required',
            'kapasitas' => 'required|integer',
            'jenis_pesawat' => 'required',
            'tanggal_pembuatan' => 'required|date',
            'nomor_registrasi' => 'required|unique:planes',
        ]);

        Plane::create($request->all());

        return redirect()->route('planes.index')->with('success', 'Plane created successfully.');
    }

    // Display the specified resource.
    public function show(Plane $plane)
    {
        return view('planes.show', compact('plane'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $plane = Plane::findOrFail($id);
        return view('planes.edit', compact('plane'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pesawat' => 'required',
            'kapasitas' => 'required|integer',
            'jenis_pesawat' => 'required',
            'tanggal_pembuatan' => 'required|date',
            'nomor_registrasi' => 'required',
        ]);
        $plane = Plane::findOrFail($id);
        $plane->update($request->all());

        return redirect()->route('planes.index')->with('success', 'Plane updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Plane $plane)
    {
        $plane->delete();

        return redirect()->route('planes.index')->with('success', 'Plane deleted successfully.');
    }
}
