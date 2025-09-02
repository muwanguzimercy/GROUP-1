
@extends('layouts.app')

@section('content')
<style>
    .participants-container {
        max-width: 700px;
        margin: 30px auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: 'Inter', sans-serif;
    }

    .participants-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .add-btn {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 16px;
        background: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .add-btn:hover {
        background: #28a745;
    }

    table.participants-table {
        width: 100%;
        border-collapse: collapse;
    }

    table.participants-table th, 
    table.participants-table td {
        border: 1px solid #ddd;
        padding: 12px 15px;
        text-align: left;
        font-size: 14px;
        font-family: 'Roboto', sans-serif;
        text-transform: capitalize;
    }

    table.participants-table th {
        background: #007BFF;
        font-family: 'Roboto', sans-serif;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    table.participants-table tr:nth-child(even) {
        background: #f9f9f9;
    }

    table.participants-table a {
        color: #007BFF;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    table.participants-table a:hover {
        color: #0056b3;
    }

    .edit-btn {
        padding: 6px 12px;
        background: #66b3ff;
        color: #fff !important;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .edit-btn:hover {
        background: #66b3ff;
        color: #fff;
    }

    .delete-btn {
        padding: 6px 12px;
        background: #dc3545;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .delete-btn:hover {
        background: #b02a37;
    }
</style>

<div class="participants-container">
    <h2>Participants</h2>
    <a href="{{ route('participants.create') }}" class="add-btn">+ Add Participant</a>

    <table class="participants-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($participants as $p)
                <tr>
                    <td>
                        <a href="{{ route('participants.show', $p->id) }}">
                            {{ $p->full_name }}
                        </a>
                    </td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="{{ route('participants.edit', $p->id) }}" class="edit-btn">Edit</a>
                        <form action="{{ route('participants.destroy', $p->id) }}" method="POST" style="display:inline;">
                            @csrf 
                            @method('DELETE') 
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
