@extends('layouts.app')

@section('content')
<h2>Outcomes for Project: {{ $project->title }}</h2>
<a href="{{ route('outcomes.create', $project->id) }}">+ Add Outcome</a>

<ul>
@foreach($outcomes as $outcome)
    <li>
        <strong>{{ $outcome->title }}</strong> ({{ $outcome->outcome_type }})
        <br>{{ $outcome->description }}
        | <a href="{{ route('outcomes.edit', [$project->id, $outcome->id]) }}">Edit</a>
        | <form action="{{ route('outcomes.destroy', [$project->id, $outcome->id]) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE') <button type="submit">Delete</button>
          </form>
    </li>
@endforeach
</ul>
@endsection
