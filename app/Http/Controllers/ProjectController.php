<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Program;
use App\Models\Facility;
use App\Models\Participant;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // List all projects with filters
    public function index(Request $request)
    {
        $query = Project::with(['program', 'facility', 'participants', 'outcomes']);

        // Apply filters if selected
        if ($request->facility_id) {
            $query->where('facility_id', $request->facility_id);
        }

        if ($request->program_id) {
            $query->where('program_id', $request->program_id);
        }


        $projects = $query->get();

        // Pass programs and facilities to the view for dropdown filters
        $facilities = Facility::all();
        $programs = Program::all();

        return view('projects.index', compact('projects', 'facilities', 'programs'));
    }

    // Show create form
    public function create()
    {
        $programs = Program::all();
        $facilities = Facility::all();
        return view('projects.create', compact('programs', 'facilities'));
    }

    // Store project
    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_id' => 'required|exists:programs,id',
            'facility_id' => 'required|exists:facilities,id',
            'title' => 'required|string|max:255',
            'nature_of_project' => 'required|in:Research,Prototype,Applied Work',
            'description' => 'nullable|string',
            'innovation_focus' => 'nullable|string',
            'prototype_stage' => 'required|in:Concept,Prototype,MVP,Market Launch',
            'testing_requirements' => 'nullable|string',
            'commercialization_plan' => 'nullable|string',
        ]);

        Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    // Show single project
    public function show(Project $project)
    {
        $project->load(['program', 'facility', 'participants', 'outcomes']);
        return view('projects.show', compact('project'));
    }

    // Show edit form
    public function edit(Project $project)
    {
        $programs = Program::all();
        $facilities = Facility::all();
        return view('projects.edit', compact('project', 'programs', 'facilities'));
    }

    // Update project
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'nature_of_project' => 'sometimes|required|in:Research,Prototype,Applied Work',
            'description' => 'nullable|string',
            'innovation_focus' => 'nullable|string',
            'prototype_stage' => 'sometimes|required|in:Concept,Prototype,MVP,Market Launch',
            'testing_requirements' => 'nullable|string',
            'commercialization_plan' => 'nullable|string',
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    // Delete project
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }

    // Assign participant to project
    public function assignParticipant(Request $request, Project $project)
    {
        $validated = $request->validate([
            'participant_id' => 'required|exists:participants,id',
            'role_on_project' => 'required|string|max:255',
            'skill_role' => 'required|string|max:255',
        ]);

        $project->participants()->syncWithoutDetaching([
            $validated['participant_id'] => [
                'role_on_project' => $validated['role_on_project'],
                'skill_role' => $validated['skill_role']
            ]
        ]);

        return back()->with('success', 'Participant assigned successfully');
    }

    // Remove participant
    public function removeParticipant(Project $project, Participant $participant)
    {
        $project->participants()->detach($participant->id);
        return back()->with('success', 'Participant removed successfully');
    }
}
