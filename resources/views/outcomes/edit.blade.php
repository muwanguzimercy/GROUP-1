@extends('layouts.app')

@section('content')
<h2>Edit Outcome</h2>

<form method="POST" action="{{ route('outcomes.update', [$project->id, $outcome->id]) }}">
    @csrf @method('PUT')

    <label>Title</label>
    <input type="text" name="title" value="{{ $outcome->title }}" required>

    <label>Description</label>
    <textarea name="description">{{ $outcome->description }}</textarea>

    <label>Artifact Link</label>
    <input type="text" name="artifact_link" value="{{ $outcome->artifact_link }}">

    <label>Outcome Type</label>
    <input type="text" name="outcome_type" value="{{ $outcome->outcome_type }}">

    <label>Quality Certification</label>
    <input type="text" name="quality_certification" value="{{ $outcome->quality_certification }}">

    <label>Commercialization Status</label>
    <input type="text" name="commercialization_status" value="{{ $outcome->commercialization_status }}">

    <button type="submit">Update Outcome</button>
</form>
@endsection
