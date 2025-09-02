@extends('layouts.app')

@section('content')
<h2 style="font-family: Arial, sans-serif; color: #333; margin-bottom: 20px;">Add Facility</h2>

<form method="POST" action="{{ route('facilities.store') }}" style="max-width: 600px; margin: auto; display: flex; flex-direction: column; gap: 15px; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
    @csrf
    <label style="font-weight: bold; color: #555;">Name</label>
    <input type="text" name="name" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

    <label style="font-weight: bold; color: #555;">Location</label>
    <input type="text" name="location" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

    <label style="font-weight: bold; color: #555;">Facility Type</label>
    <input type="text" name="facility_type" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

    <label style="font-weight: bold; color: #555;">Partner Organization</label>
    <input type="text" name="partner_organization" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

    <label style="font-weight: bold; color: #555;">Capabilities</label>
    <textarea name="capabilities" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;"></textarea>

    <label style="font-weight: bold; color: #555;">Description</label>
    <textarea name="description" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;"></textarea>

    <button type="submit" style="padding: 12px; background-color: #4CAF50; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Save Facility</button>
</form>
@endsection
