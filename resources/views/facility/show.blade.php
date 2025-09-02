@extends('layouts.app')

@section('content')
<h2 style="font-family: Arial, sans-serif; color: #333; margin-bottom: 10px;">{{ $facility->name }}</h2>
<p style="color: #555;"><strong>Location:</strong> {{ $facility->location }}</p>
<p style="color: #555;"><strong>Type:</strong> {{ $facility->facility_type }}</p>
<p style="color: #555;"><strong>Partner Organization:</strong> {{ $facility->partner_organization }}</p>
<p style="color: #555;"><strong>Capabilities:</strong> {{ $facility->capabilities }}</p>
<p style="color: #555;"><strong>Description:</strong> {{ $facility->description }}</p>

<h3 style="margin-top: 20px; color: #333;">Services Offered</h3>
<ul style="list-style-type: disc; margin-left: 20px;">
    @foreach($facility->services as $service)
        <li style="color: #555;">{{ $service->name }} ({{ $service->category }})</li>
    @endforeach
</ul>

<h3 style="margin-top: 20px; color: #333;">Equipment Available</h3>
<ul style="list-style-type: disc; margin-left: 20px;">
    @foreach($facility->equipment as $eq)
        <li style="color: #555;">{{ $eq->name }} - {{ $eq->capabilities }}</li>
    @endforeach
</ul>

<h3 style="margin-top: 20px; color: #333;">Projects Hosted</h3>
<ul style="list-style-type: disc; margin-left: 20px;">
    @foreach($facility->projects as $proj)
        <li style="color: #555;">{{ $proj->title }}</li>
    @endforeach
</ul>
@endsection
