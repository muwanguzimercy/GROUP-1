
@extends('layouts.app')

@section('content')
<style>
    .participant-details {
        max-width: 700px;
        margin: 30px auto;
        padding: 25px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .participant-details h2 {
        text-align: center;
        margin-bottom: 15px;
        color: #333;
    }

    .participant-details p {
        margin: 8px 0;
        font-size: 15px;
        color: #444;
    }

    .participant-details strong {
        color: #222;
    }

    .participant-details h3 {
        margin-top: 25px;
        margin-bottom: 12px;
        color: #007BFF;
        font-size: 18px;
    }

    .projects-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .projects-list li {
        background: #f9f9f9;
        margin-bottom: 10px;
        padding: 12px 16px;
        border-radius: 8px;
        font-size: 14px;
        color: #333;
        border-left: 4px solid #007BFF;
    }
</style>

<div class="participant-details">
    <h2>{{ $participant->full_name }}</h2>
    <p><strong>Email:</strong> {{ $participant->email }}</p>
    <p><strong>Affiliation:</strong> {{ $participant->affiliation }}</p>

    <h3>Projects</h3>
    <ul class="projects-list">
        @foreach($participant->projects as $proj)
            <li>{{ $proj->title }} ({{ $proj->facility->name }})</li>
        @endforeach
    </ul>
</div>
@endsection
