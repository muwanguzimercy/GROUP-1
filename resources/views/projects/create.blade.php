@extends('layouts.app')

@section('content')
<h2>Add Project</h2>

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <label>Program</label>
    <select name="program_id" required>
        @foreach($programs as $prog)
            <option value="{{ $prog->id }}">{{ $prog->name }}</option>
        @endforeach
    </select>

    <label>Facility</label>
    <select name="facility_id" required>
        @foreach($facilities as $fac)
            <option value="{{ $fac->id }}">{{ $fac->name }}</option>
        @endforeach
    </select>

    <label>Title</label>
    <input type="text" name="title" required>

    <label>Description</label>
    <textarea name="description"></textarea>

    <button type="submit">Save Project</button>
</form>
@endsection
