
@extends('layouts.app')

@section('content')
<h2 style="text-align:center; color:#2c3e50; margin-bottom:20px;">Add Program</h2>
<form method="POST" action="{{ route('programs.store') }}" 
      style="max-width:600px; margin:0 auto; background:#f9f9f9; padding:20px; border-radius:12px; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
    @csrf
    <input type="text" name="name" placeholder="Program Name" required
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px;">
    <textarea name="description" placeholder="Description"
              style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px; min-height:100px;"></textarea>
    <input type="text" name="national_alignment" placeholder="National Alignment"
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px;">
    <input type="text" name="focus_areas" placeholder="Focus Areas"
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px;">
    <button type="submit" 
            style="width:100%; background:#3498db; color:white; padding:12px; border:none; border-radius:8px; cursor:pointer; font-size:16px;">
        Save
    </button>
</form>
@endsection
