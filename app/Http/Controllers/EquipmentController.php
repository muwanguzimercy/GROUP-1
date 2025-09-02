<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Facility;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::with('facility')->get();
        return view('equipment.index', compact('equipment'));
    }

    public function create()
    {
        $facilities = Facility::all();
        return view('equipment.create', compact('facilities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'facility_id' => 'required|exists:facilities,id',
            'name' => 'required|string',
        ]);

        Equipment::create($request->all());
        return redirect()->route('equipment.index')->with('success','Equipment created successfully');
    }

    public function show(Equipment $equipment)
    {
        return view('equipment.show', compact('equipment'));
    }

    public function edit(Equipment $equipment)
    {
        $facilities = Facility::all();
        return view('equipment.edit', compact('equipment','facilities'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $equipment->update($request->all());
        return redirect()->route('equipment.index')->with('success','Equipment updated successfully');
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipment.index')->with('success','Equipment deleted successfully');
    }
}
