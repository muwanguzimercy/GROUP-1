@extends('layouts.app')

@section('content')
<div style="max-width:700px; margin:0 auto; background:#ffffff; padding:20px; border-radius:12px; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
    <h2 style="color:#2c3e50; margin-bottom:10px;">{{ $program->name }}</h2>
    <p style="color:#555; margin-bottom:15px;">{{ $program->description }}</p>
    <p><strong style="color:#2c3e50;">National Alignment:</strong> {{ $program->national_alignment }}</p>
    <p><strong style="color:#2c3e50;">Focus Areas:</strong> {{ $program->focus_areas }}</p>

    <h3 style="margin-top:20px; color:#34495e;">Projects under this Program</h3>
    <ul style="list-style:disc; padding-left:20px; color:#555;">
        @foreach($program->projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
</div>
@endsection
