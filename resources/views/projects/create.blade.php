@extends('layouts.app')

@section('content')
<h2>Create Project</h2>


<div class="form-container" style="max-width: 650px; margin: 40px auto; background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.07); padding: 32px 28px;">
    <h2 style="text-align:center; font-size:1.7rem; font-weight:600; margin-bottom:24px; color:#2d3748;">Create New Project</h2>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        @include('projects._form')
        <button type="submit" style="width:100%; background:#38a169; color:#fff; font-weight:500; padding:12px 0; border:none; border-radius:6px; font-size:1.1rem; margin-top:24px; box-shadow:0 1px 4px rgba(56,161,105,0.08); transition:background 0.2s;">Create Project</button>
    </form>
</div>
@endsection
