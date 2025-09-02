@extends('layouts.app')

@section('content')
<style>
    .participant-form {
        max-width: 500px;
        margin: 10px auto;
        padding: 25px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .participant-form h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .participant-form label {
        display: block;
        margin: 12px 0 6px;
        font-weight: bold;
        color: #444;
    }

    .participant-form input {
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: border 0.3s ease;
    }

    .participant-form input:focus {
        border-color: #007BFF;
        outline: none;
    }

    .participant-form button {
        margin-top: 18px;
        width:100px;
        padding: 12px;
        background: #28a745;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        display: block;        /* makes margin auto work */
        margin-left: auto;     /* centers horizontally */
        margin-right: auto;
        transition: background 0.3s ease;
    }

    .participant-form button:hover {
        background: #28a745;
    }
</style>

<div class="participant-form">
    <h2>Add Participant</h2>

    <form method="POST" action="{{ route('participants.store') }}">
        @csrf
        <label>Full Name</label>
        <input type="text" name="full_name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Affiliation</label>
        <input type="text" name="affiliation">

        <button type="submit">Save</button>
    </form>
</div>
@endsection

