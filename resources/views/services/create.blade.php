@extends('layouts.app')

@section('content')
<style>
    .service-form {
        max-width: 600px;
        margin: 30px auto;
        padding: 25px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .service-form h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .service-form label {
        display: block;
        margin: 12px 0 6px;
        font-weight: bold;
        color: #444;
    }

    .service-form input,
    .service-form select,
    .service-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: border 0.3s ease;
    }

    .service-form input:focus,
    .service-form select:focus,
    .service-form textarea:focus {
        border-color: #007BFF;
        outline: none;
    }

    .service-form textarea {
        min-height: 100px;
        resize: vertical;
    }

    .service-form button {
        margin-top: 18px;
        width: 100%;
        padding: 12px;
        background: #007BFF;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .service-form button:hover {
        background: #0056b3;
    }
</style>

<div class="service-form">
    <h2>Add Service</h2>

    <form method="POST" action="{{ route('services.store') }}">
        @csrf
        <label>Facility</label>
        <select name="facility_id" required>
            @foreach($facilities as $facility)
                <option value="{{ $facility->id }}">{{ $facility->name }}</option>
            @endforeach
        </select>

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Category</label>
        <input type="text" name="category">

        <label>Description</label>
        <textarea name="description"></textarea>

        <button type="submit">Save Service</button>
    </form>
</div>
@endsection
