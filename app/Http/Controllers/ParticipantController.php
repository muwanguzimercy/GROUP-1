<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::with('projects')->get();
        return view('participants.index', compact('participants'));
    }

    public function create()
    {
        return view('participants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:participants',
        ]);

        Participant::create($request->all());
        return redirect()->route('participants.index')->with('success','Participant created successfully');
    }

    public function show(Participant $participant)
    {
        $participant->load('projects');
        return view('participants.show', compact('participant'));
    }

    public function edit(Participant $participant)
    {
        return view('participants.edit', compact('participant'));
    }

    public function update(Request $request, Participant $participant)
    {
        $participant->update($request->all());
        return redirect()->route('participants.index')->with('success','Participant updated successfully');
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();
        return redirect()->route('participants.index')->with('success','Participant deleted successfully');
    }
}
