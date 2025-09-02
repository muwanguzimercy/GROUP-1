@extends('layouts.app')

<style>
    body {
        font-family: 'Segoe UI', 'Roboto', 'Arial', sans-serif;
        background: #f4f6fa;
    }
    .project-actions a, .project-actions button {
        margin-right: 6px;
        text-decoration: none;
        font-size: 13px;
        color: #333;
    }
    .project-actions a:hover, .project-actions button:hover {
        text-decoration: underline;
        color: #111;
    }
    table.projects-table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 1rem;
        background: #fff;
        border-radius: 6px;
        font-size: 13px;
    }
    table.projects-table th, table.projects-table td {
        border: 1px solid #e5e7eb;
        padding: 7px 10px;
        text-align: left;
    }
    table.projects-table th {
        background: #f3f4f6;
        color: #222;
        font-weight: 600;
        font-size: 13px;
    }
    table.projects-table tr:hover {
        background: #f9fafb;
    }
    .filter-form {
        background: #fff;
        padding: 12px 10px;
        border-radius: 6px;
        margin-bottom: 18px;
        box-shadow: 0 1px 4px rgba(0,0,0,0.03);
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: flex-end;
    }
    .filter-form label {
        font-weight: 500;
        margin-right: 6px;
        font-size: 13px;
    }
    .filter-form select {
        margin-right: 10px;
        padding: 4px 8px;
        border-radius: 3px;
        border: 1px solid #d1d5db;
        font-size: 13px;
        background: #f9fafb;
    }
    .filter-form button, .filter-form a {
        padding: 5px 14px;
        border-radius: 3px;
        border: none;
        background: #e5e7eb;
        color: #222;
        font-weight: 500;
        cursor: pointer;
        margin-right: 6px;
        text-decoration: none;
        font-size: 13px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.02);
        transition: background 0.2s;
    }
    .filter-form button:hover, .filter-form a:hover {
        background: #d1d5db;
    }
</style>

@section('content')
<h2>Projects</h2>
<div class="mb-4 flex gap-4">
    <a href="{{ route('projects.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Add Project</a>
    <a href="{{ route('projects.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Show All Projects</a>
</div>


{{-- Filter Form --}}
<form action="{{ route('projects.index') }}" method="GET" class="mb-4">
    <div class="flex flex-wrap gap-4">


        <div>
            <label for="filter_by">Filter By:</label>
            <select name="filter_by" id="filter_by" class="border rounded p-1" onchange="toggleFilterDropdown()">
                <option value="">-- Select --</option>
                <option value="program" {{ request('filter_by') == 'program' ? 'selected' : '' }}>Program</option>
                <option value="facility" {{ request('filter_by') == 'facility' ? 'selected' : '' }}>Facility</option>
            </select>
        </div>

        <div id="program_dropdown" style="display: {{ request('filter_by') == 'program' ? 'block' : 'none' }};">
            <label for="program_id">Program:</label>
            <select name="program_id" id="program_id" class="border rounded p-1">
                <option value="">-- All Programs --</option>
                @foreach($programs as $program)
                    <option value="{{ $program->id }}" {{ request('program_id') == $program->id ? 'selected' : '' }}>
                        {{ $program->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div id="facility_dropdown" style="display: {{ request('filter_by') == 'facility' ? 'block' : 'none' }};">
            <label for="facility_id">Facility:</label>
            <select name="facility_id" id="facility_id" class="border rounded p-1">
                <option value="">-- All Facilities --</option>
                @foreach($facilities as $facility)
                    <option value="{{ $facility->id }}" {{ request('facility_id') == $facility->id ? 'selected' : '' }}>
                        {{ $facility->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <script>
        function toggleFilterDropdown() {
            var filterBy = document.getElementById('filter_by').value;
            document.getElementById('program_dropdown').style.display = filterBy === 'program' ? 'block' : 'none';
            document.getElementById('facility_dropdown').style.display = filterBy === 'facility' ? 'block' : 'none';
        }
        window.onload = toggleFilterDropdown;
        </script>


        {{-- Submit --}}
        <div class="flex items-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Filter</button>
            <a href="{{ route('projects.index') }}" class="ml-2 px-4 py-2 border rounded hover:bg-gray-100">Reset</a>
        </div>
    </div>
</form>

{{-- Projects Table --}}
<table class="projects-table">
    <thead>
        <tr class="bg-gray-200">
            <th class="border px-2 py-1">Title</th>
            <th class="border px-2 py-1">Program</th>
            <th class="border px-2 py-1">Facility</th>
            <th class="border px-2 py-1">Nature</th>
            <th class="border px-2 py-1">Prototype Stage</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($projects as $project)
            <tr>
                <td class="border px-2 py-1">{{ $project->title }}</td>
                <td class="border px-2 py-1">{{ $project->program->name ?? '-' }}</td>
                <td class="border px-2 py-1">{{ $project->facility->name ?? '-' }}</td>
                <td class="border px-2 py-1">{{ $project->nature_of_project }}</td>
                <td class="border px-2 py-1">{{ $project->prototype_stage }}</td>
                <td class="border px-2 py-1">
                    <a href="{{ route('projects.show', $project->id) }}" class="text-blue-500">View</a>
                    <a href="{{ route('projects.edit', $project->id) }}" class="ml-2 text-green-500">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-2 text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="border px-2 py-1 text-center">No projects found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
