@extends('layouts.app')

@section('content')
<style>
    .services-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .services-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .add-btn {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 16px;
        background: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .add-btn:hover {
        background: #0056b3;
    }

    .services-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .services-list li {
        background: #f9f9f9;
        margin-bottom: 12px;
        padding: 14px 18px;
        border-radius: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .services-list li a {
        color: #007BFF;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .services-list li a:hover {
        color: #0056b3;
    }

    .service-actions {
        display: flex;
        gap: 10px;
    }

    .edit-btn {
        padding: 6px 12px;
        background: #ffc107;
        color: #333;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .edit-btn:hover {
        background: #e0a800;
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

<div class="services-container">
    <h2>Services</h2>
    <a href="{{ route('services.create') }}" class="add-btn">+ Add Service</a>

    <ul class="services-list">
        @foreach($services as $service)
            <li>
                <div>
                    <a href="{{ route('services.show', $service->id) }}">{{ $service->name }}</a>
                    <span style="color:#666;">(Facility: {{ $service->facility->name }})</span>
                </div>
                <div class="service-actions">
                    <a href="{{ route('services.edit', $service->id) }}" class="edit-btn">Edit</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
