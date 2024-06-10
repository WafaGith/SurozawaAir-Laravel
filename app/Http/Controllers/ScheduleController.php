<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Plane;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $schedules = Schedule::all();
        $planes = Plane::all();
        return view('schedules.index', compact('schedules'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $planes = Plane::all();
        return view('schedules.create', compact('planes'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'id_pesawat' => 'required|exists:planes,id_pesawat',
            'tanggal_keberangkatan' => 'required|date',
            'waktu_keberangkatan' => 'required',
            'bandara_asal' => 'required|string|max:255',
            'bandara_tujuan' => 'required|string|max:255',
        ]);

        Schedule::create($request->all());

        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully.');
    }

    // Display the specified resource.
    public function show(Schedule $schedule)
    {
        return view('schedules.show', compact('schedule'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $planes = Plane::all();
        $schedules = Schedule::all();
        $schedules = Schedule::findOrFail($id);
        return view('schedules.edit', compact('schedules','planes'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Schedule $schedules, $id)
    {
        $request->validate([
            'id_pesawat' => 'required|exists:planes,id_pesawat',
            'tanggal_keberangkatan' => 'required|date',
            'waktu_keberangkatan' => 'required',
            'bandara_asal' => 'required|string|max:255',
            'bandara_tujuan' => 'required|string|max:255',
        ]);

        $schedules = Plane::findOrFail($id);
        $schedules->update($request->all());

        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully.');
    }

    public function cetak()
    {
        $schedules = Schedule::all();
        $pdf = Pdf::loadview('schedules.cetak', compact('schedules'));
        return $pdf->download('Laporan-Jadwal.pdf');
    }

}
