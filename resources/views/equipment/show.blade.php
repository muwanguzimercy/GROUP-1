@extends('layouts.app')

@section('content')
    <div style="max-width: 600px; margin: 20px auto; padding: 20px; 
                border: 1px solid #ddd; border-radius: 8px; background: #f9f9f9; 
                font-family: Arial, sans-serif; color: #2c3e50;">
        
        <h2 style="color: #34495e; margin-bottom: 20px; font-size: 24px; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
            {{ $equipment->name }}
        </h2>

        <p style="margin: 10px 0; font-size: 16px;">
            <strong style="color: #0077ff;">Capabilities:</strong> 
            <span style="color: #555;">{{ $equipment->capabilities }}</span>
        </p>

        <p style="margin: 10px 0; font-size: 16px;">
            <strong style="color: #0077ff;">Description:</strong> 
            <span style="color: #555;">{{ $equipment->description }}</span>
        </p>

        <p style="margin: 10px 0; font-size: 16px;">
            <strong style="color: #0077ff;">Inventory Code:</strong> 
            <span style="color: #555;">{{ $equipment->inventory_code }}</span>
        </p>
        <p style="margin: 10px 0; font-size: 16px;">
            <strong style="color: #0077ff;">Usage Domain:</strong> 
            <span style="color: #555;">{{ $equipment->usage_domain }}</span>
        </p>
        <p style="margin: 10px 0; font-size: 16px;">
            <strong style="color: #0077ff;">Support Phase:</strong> 
            <span style="color: #555;">{{ $equipment->support_phase }}</span>
        </p>

        <p style="margin: 10px 0; font-size: 16px;">
            <strong style="color: #0077ff;">Facility:</strong> 
            <span style="color: #555;">{{ $equipment->facility->name }}</span>
        </p>
    </div>
@endsection
