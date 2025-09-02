@extends('layouts.app')

@section('content')
<h2>Project Details</h2>

<table class="projects-table" style="max-width:600px;margin:auto;margin-bottom:2rem;">
    <tr><th>Field</th><th>Value</th></tr>
    <tr><td>ProjectId</td><td>{{ $project->id }}</td></tr>
    <tr><td>ProgramId</td><td>{{ $project->program_id }}</td></tr>
    <tr><td>FacilityId</td><td>{{ $project->facility_id }}</td></tr>
    <tr><td>Title</td><td>{{ $project->title }}</td></tr>
    <tr><td>NatureOfProject</td><td>{{ $project->nature_of_project }}</td></tr>
    <tr><td>Description</td><td>{{ $project->description ?? '-' }}</td></tr>
    <tr><td>InnovationFocus</td><td>{{ $project->innovation_focus ?? '-' }}</td></tr>
    <tr><td>PrototypeStage</td><td>{{ $project->prototype_stage ?? '-' }}</td></tr>
    <tr><td>TestingRequirements</td><td>{{ $project->testing_requirements ?? '-' }}</td></tr>
    <tr><td>CommercializationPlan</td><td>{{ $project->commercialization_plan ?? '-' }}</td></tr>
</table>

<h3>Participants</h3>
<ul>
    @forelse($project->participants as $participant)
        <li>{{ $participant->name }} - Role: {{ $participant->pivot->role_on_project }}, Skill: {{ $participant->pivot->skill_role }}</li>
    @empty
        <li>No participants assigned.</li>
    @endforelse
</ul>

<h3>Outcomes</h3>
<ul>
    @forelse($project->outcomes as $outcome)
        <li>{{ $outcome->description }}</li>
    @empty
        <li>No outcomes recorded.</li>
    @endforelse
</ul>

<a href="{{ route('projects.index') }}" class="mt-4 inline-block px-4 py-2 border rounded hover:bg-gray-100">Back to Projects</a>
@endsection
