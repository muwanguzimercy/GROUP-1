<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use App\Models\Project;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    public function index(Project $project)
    {
        $outcomes = $project->outcomes;
        return view('outcomes.index', compact('project','outcomes'));
    }

    public function create(Project $project)
    {
        return view('outcomes.create', compact('project'));
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $project->outcomes()->create($request->all());
        return redirect()->route('projects.show', $project->id)->with('success','Outcome added successfully');
    }

    public function edit(Project $project, Outcome $outcome)
    {
        return view('outcomes.edit', compact('project','outcome'));
    }

    public function update(Request $request, Project $project, Outcome $outcome)
    {
        $outcome->update($request->all());
        return redirect()->route('projects.show',$project->id)->with('success','Outcome updated successfully');
    }

    public function destroy(Project $project, Outcome $outcome)
    {
        $outcome->delete();
        return back()->with('success','Outcome deleted successfully');
    }
}
