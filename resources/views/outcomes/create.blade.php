@extends('layouts.app')

@section('content')
<div style="max-width: 700px; margin: 30px auto; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
    <h2 style="text-align: center; margin-bottom: 20px;">Add Outcome for Project: {{ $project->title }}</h2>

    <form action="{{ route('outcomes.store', $project->id) }}" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="title" style="display:block; font-weight:bold;">Title</label>
            <input type="text" name="title" id="title" class="form-control" required style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="description" style="display:block; font-weight:bold;">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control" style="width:100%; padding:8px;"></textarea>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="artifact_link" style="display:block; font-weight:bold;">Artifact Link</label>
            <input type="url" name="artifact_link" id="artifact_link" class="form-control" style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="outcome_type" style="display:block; font-weight:bold;">Outcome Type</label>
            <input type="text" name="outcome_type" id="outcome_type" class="form-control" style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="quality_certification" style="display:block; font-weight:bold;">Quality Certification</label>
            <input type="text" name="quality_certification" id="quality_certification" class="form-control" style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="commercialization_status" style="display:block; font-weight:bold;">Commercialization Status</label>
            <input type="text" name="commercialization_status" id="commercialization_status" class="form-control" style="width:100%; padding:8px;">
        </div>

        <button type="submit" style="padding:10px 20px; background:#28a745; color:white; border:none; border-radius:6px; cursor:pointer;">
            Save Outcome
        </button>
    </form>
</div>
@endsection
