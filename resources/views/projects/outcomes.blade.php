@extends('layouts.app')

@section('content')
<h2>Project Outcomes</h2>
<h3>Project Fields Reference</h3>
<table class="table-auto w-full border-collapse border mb-6">
    <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2">Field</th>
            <th class="border px-4 py-2">Description</th>
        </tr>
    </thead>
    <tbody>
        <tr><td class="border px-4 py-2">ProjectId</td><td class="border px-4 py-2">Unique identifier for the project</td></tr>
        <tr><td class="border px-4 py-2">ProgramId</td><td class="border px-4 py-2">Identifier of the program</td></tr>
        <tr><td class="border px-4 py-2">FacilityId</td><td class="border px-4 py-2">Identifier of the facility hosting the project</td></tr>
        <tr><td class="border px-4 py-2">Title</td><td class="border px-4 py-2">Project title</td></tr>
        <tr><td class="border px-4 py-2">NatureOfProject</td><td class="border px-4 py-2">Research, prototype, or applied work</td></tr>
        <tr><td class="border px-4 py-2">Description</td><td class="border px-4 py-2">Project overview</td></tr>
        <tr><td class="border px-4 py-2">InnovationFocus</td><td class="border px-4 py-2">IoT devices, smart home, renewable energy, etc.</td></tr>
        <tr><td class="border px-4 py-2">PrototypeStage</td><td class="border px-4 py-2">Concept, Prototype, MVP, Market Launch</td></tr>
        <tr><td class="border px-4 py-2">TestingRequirements</td><td class="border px-4 py-2">Compliance and performance checks</td></tr>
        <tr><td class="border px-4 py-2">CommercializationPlan</td><td class="border px-4 py-2">Path to market adoption</td></tr>
    </tbody>
</table>

<ul>
    @foreach($project->outcomes as $outcome)
        <li>{{ $outcome->title }} - <a href="{{ $outcome->artifact_link }}" target="_blank">View</a></li>
    @endforeach
</ul>

<h4>Add Outcome</h4>
<form action="{{ route('projects.addOutcome', $project->id) }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Outcome title" required>
    <input type="url" name="artifact_link" placeholder="Link to artifact" required>
    <button type="submit">Add Outcome</button>
</form>
@endsection
