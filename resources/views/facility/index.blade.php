@extends('layouts.app')

@section('content')
<style>
    .facilities-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .facilities-container h2 {
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
        background: #218838;
    }

    .facilities-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .facilities-list li {
        background: #f9f9f9;
        margin-bottom: 12px;
        padding: 14px 18px;
        border-radius: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .facilities-list li a {
        color: #28a745;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .facilities-list li a:hover {
        color: #1e7e34;
    }

    .facility-actions {
        display: flex;
        gap: 10px;
    }

    .edit-btn {
        padding: 6px 12px;
        background: #1336F8FF;
        color: #333;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .edit-btn:hover {
        background: #1336F8FF;
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

<div class="facilities-container">
    <h2>Facilities</h2>
    <a href="{{ route('facilities.create') }}" class="add-btn">+ Add Facility</a>

    <ul class="facilities-list">
        @foreach($facilities as $facility)
            <li>
                <div>
                    <a href="{{ route('facilities.show', $facility->id) }}">{{ $facility->name }}</a>
                    <span style="color:#666;">({{ $facility->location ?? 'Location N/A' }})</span>
                </div>
                <div class="facility-actions">
                    <a href="{{ route('facilities.edit', $facility->id) }}" class="edit-btn">Edit</a>
                    <form action="{{ route('facilities.destroy', $facility->id) }}" method="POST" style="display:inline;">
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this facility?')">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
