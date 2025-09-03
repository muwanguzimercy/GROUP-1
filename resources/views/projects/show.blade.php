@extends('layouts.app')

@section('content')
<h2>{{ $project->title }}</h2>
<p>{{ $project->description }}</p>
<p><strong>Facility:</strong> {{ $project->facility->name }}</p>
<p><strong>Program:</strong> {{ $project->program->name }}</p>

<h3>Participants</h3>
@include('projects.participants', ['project' => $project])

<h3>Outcomes</h3>
@include('projects.outcomes', ['project' => $project])
@endsection
