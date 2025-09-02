@extends('layouts.app')

@section('content')
    <h2 style="font-family: Arial, sans-serif; color: #0f1318ff; margin-bottom: 20px;">Equipment</h2>

    <a href="{{ route('equipment.create') }}" 
       style="display: inline-block; padding: 8px 14px; background-color: #0077ff; 
              color: white; text-decoration: none; border-radius: 4px; margin-bottom: 20px;">
        + Add Equipment
    </a>

    <ul style="list-style: none; padding: 0; margin: 0;">
        @foreach($equipment as $eq)
            <li style="background: #f8f9fa; padding: 12px; margin-bottom: 10px; 
                       border: 1px solid #ddd; border-radius: 5px;">
                
                <a href="{{ route('equipment.show', $eq->id) }}" 
                   style="font-weight: bold; font-size: 16px; color: #2c3e50; text-decoration: none; margin-right: 10px;">
                    {{ $eq->name }}
                </a>

                <span style="color: #7f8c8d; font-size: 14px; margin-right: 10px;">
                    (Facility: {{ $eq->facility->name }})
                </span>

                | 
                <a href="{{ route('equipment.edit', $eq->id) }}" 
                   style="margin-left: 10px; color: #27ae60; text-decoration: none; font-size: 14px;">
                    Edit
                </a>

                | 
                <form action="{{ route('equipment.destroy', $eq->id) }}" method="POST" 
                      style="display:inline; margin-left: 10px;">
                    @csrf 
                    @method('DELETE') 
                    <button type="submit" 
                            style="background: none; border: none; color: #e74c3c; 
                                   cursor: pointer; font-size: 14px;">
                        Delete
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
