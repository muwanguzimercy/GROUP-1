<form method="POST" action="{{ route('projects.assignParticipant', $project->id) }}">
    @csrf
    <select name="participant_id">
        @foreach(App\Models\Participant::all() as $p)
            <option value="{{ $p->id }}">{{ $p->full_name }}</option>
        @endforeach
    </select>
    <input type="text" name="role_on_project" placeholder="Role">
    <input type="text" name="skill_role" placeholder="Skill">
    <button type="submit">Assign</button>
</form>

<ul>
@foreach($project->participants as $p)
    <li>
        {{ $p->full_name }} ({{ $p->pivot->role_on_project }})
        <form method="POST" action="{{ route('projects.removeParticipant', [$project->id, $p->id]) }}" style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit">Remove</button>
        </form>
    </li>
@endforeach
</ul>
