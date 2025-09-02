@extends('layouts.app')

@section('content')
<h2 style="text-align:center; color:#2c3e50; margin-bottom:20px;">Edit Program</h2>
<form method="POST" action="{{ route('programs.update',$program->id) }}"
      style="max-width:600px; margin:0 auto; background:#f9f9f9; padding:20px; border-radius:12px; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
    @csrf @method('PUT')
    <input type="text" name="name" value="{{ $program->name }}" required
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px;">
    <textarea name="description"
              style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px; min-height:100px;">{{ $program->description }}</textarea>
    <input type="text" name="national_alignment" value="{{ $program->national_alignment }}"
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px;">
    <input type="text" name="focus_areas" value="{{ $program->focus_areas }}"
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px;">
    <button type="submit" 
            style="width:100%; background:#27ae60; color:white; padding:12px; border:none; border-radius:8px; cursor:pointer; font-size:16px;">
        Update
    </button>
</form>
@endsection
