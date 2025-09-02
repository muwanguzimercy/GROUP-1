@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 700px;
        margin: 30px auto;
        font-family: Arial, sans-serif;
    }

    .card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .card-header {
        background: #007BFF;
        padding: 20px;
        color: white;
        text-align: center;
    }

    .card-header h2 {
        margin: 0;
        font-size: 24px;
    }

    .card-body {
        padding: 20px;
        color: #333;
    }

    .card-body p {
        margin: 10px 0;
        font-size: 15px;
    }

    .card-body strong {
        color: #222;
    }

    .card-footer {
        padding: 15px 20px;
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        background: #f9f9f9;
        border-top: 1px solid #ddd;
    }

    .btn {
        padding: 8px 14px;
        background: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .btn:hover {
        background: #0056b3;
    }

    .btn-danger {
        background: #dc3545;
    }

    .btn-danger:hover {
        background: #b02a37;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>{{ $service->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Category:</strong> {{ $service->category }}</p>
            <p><strong>Description:</strong> {{ $service->description }}</p>
            <p><strong>Facility:</strong> {{ $service->facility->name }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('services.index') }}" class="btn">Back to Services</a>
            <a href="{{ route('services.edit', $service->id) }}" class="btn">Edit</a>
            <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
