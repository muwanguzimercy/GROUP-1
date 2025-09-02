@extends('layouts.app')

@section('content')
<h2 style="text-align:center; font-size:24px; color:#2c3e50; margin-bottom:25px;">Add Equipment</h2>

<form method="POST" action="{{ route('equipment.store') }}" 
      style="max-width:700px; margin:20px auto; padding:25px 30px; background:#fff; border-radius:12px; 
             box-shadow:0px 4px 12px rgba(0,0,0,0.1); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    @csrf

    <div style="margin-bottom:18px;">
        <label style="display:inline-block; width:180px; font-weight:600; color:#34495e; vertical-align:top; margin-top:8px;">
            Facility
        </label>
        <select name="facility_id" required
            style="display:inline-block; width:calc(200px); padding:10px 12px; border:1px solid #ccc; border-radius:8px; font-size:15px;">
            @foreach($facilities as $facility)
                <option value="{{ $facility->id }}">{{ $facility->name }}</option>
            @endforeach
        </select>
    </div>

    <div style="margin-bottom:20px;">
        <label style="display:inline-block; width:300px; font-weight:600; color:#34495e; margin-top:8px;">Name</label>
        <input type="text" name="name" required
            style="display:inline-block; width:calc(100% - 200px); padding:10px 12px; border:1px solid #ccc; border-radius:8px; font-size:15px;">
    </div>

    <div style="margin-bottom:18px;">
        <label style="display:inline-block; width:180px; font-weight:600; color:#34495e; margin-top:8px;">Capabilities</label>
        <textarea name="capabilities"
            style="display:inline-block; width:calc(100% - 200px); min-height:80px; padding:10px 12px; border:1px solid #ccc; border-radius:8px; font-size:15px; resize:vertical;"></textarea>
    </div>

    <div style="margin-bottom:18px;">
        <label style="display:inline-block; width:180px; font-weight:600; color:#34495e; margin-top:8px;">Description</label>
        <textarea name="description"
            style="display:inline-block; width:calc(100% - 200px); min-height:80px; padding:10px 12px; border:1px solid #ccc; border-radius:8px; font-size:15px; resize:vertical;"></textarea>
    </div>

    <div style="margin-bottom:18px;">
        <label style="display:inline-block; width:180px; font-weight:600; color:#34495e; margin-top:8px;">Inventory code</label>
        <input type="text" name="inventory_code"
            style="display:inline-block; width:calc(100% - 200px); padding:10px 12px; border:1px solid #ccc; border-radius:8px; font-size:15px;">
    </div>

    <div style="margin-bottom:18px;">
        <label style="display:inline-block; width:180px; font-weight:600; color:#34495e; margin-top:8px;">Usage domain</label>
        <input type="text" name="usage_domain"
            style="display:inline-block; width:calc(100% - 200px); padding:10px 12px; border:1px solid #ccc; border-radius:8px; font-size:15px;">
    </div>

    <div style="margin-bottom:18px;">
        <label style="display:inline-block; width:180px; font-weight:600; color:#34495e; margin-top:8px;">Support phase</label>
        <input type="text" name="support_phase"
            style="display:inline-block; width:calc(100% - 200px); padding:10px 12px; border:1px solid #ccc; border-radius:8px; font-size:15px;">
    </div>

    <button type="submit" 
        style="margin-top:25px; width:100%; padding:12px; background:#007bff; color:#fff; border:none; border-radius:8px; 
               font-size:16px; font-weight:600; cursor:pointer;">
        Save Equipment
    </button>
</form>
@endsection
