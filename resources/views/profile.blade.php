@extends('layouts.app')

@section('content')
    <h1>Profile</h1>

    <div class="card">
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </div>
@endsection