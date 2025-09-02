@extends('layouts.app')

@section('content')
<style>
    .programs-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .programs-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
    }

    .add-btn {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 16px;
        background: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .add-btn:hover {
        background: #2980b9;
    }

    .programs-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .programs-list li {
        background: #fdfdfd;
        margin-bottom: 12px;
        padding: 15px 18px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .program-info {
        flex-grow: 1;
    }

    .program-info a {
        font-weight: bold;
        color: #2c3e50;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .program-info a:hover {
        color: #1a252f;
    }

    .program-actions {
        display: flex;
        gap: 10px;
    }

    .edit-btn {
        padding: 6px 12px;
        background: #1228F3FF;
        color: #f1f1ff;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .edit-btn:hover {
        background: #1228F3FF;
    }

    .delete-btn {
        padding: 6px 12px;
        background: #dc3545;
        color: white;
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

<div class="programs-container">
    <h2>Programs</h2>
    <a href="{{ route('programs.create') }}" class="add-btn">+ Add Program</a>

    <ul class="programs-list">
        @foreach($programs as $program)
            <li>
                <div class="program-info">
                    <a href="{{ route('programs.show', $program->id) }}">{{ $program->name }}</a>
                </div>
                <div class="program-actions">
                    <a href="{{ route('programs.edit', $program->id) }}" class="edit-btn">Edit</a>
                    <form action="{{ route('programs.destroy', $program->id) }}" method="POST" style="display:inline;">
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this program?')">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
