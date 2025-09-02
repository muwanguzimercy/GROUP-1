@extends('layouts.app')

@section('content')
<h2>Edit Project</h2>

@if ($errors->any())
    <div class="bg-red-100 p-3 mb-4 rounded">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('projects.update', $project->id) }}" method="POST" class="filter-form" style="max-width: 600px; margin:auto;">
    @csrf
    @method('PUT')
    @include('projects._form')
    <button type="submit" class="mt-4">Update Project</button>
</form>
@endsection
