@extends('layouts.studentside')

@section('content')
<style>
    .profile-container {
        padding: 30px;
        max-width: 700px;
        margin: auto;
        background-color: #fff8f0;
        border: 1px solid #d2b48c;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        color: #5c4033;
    }

    .profile-container h1 {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #8b4513;
        text-align: center;
    }

    .profile-container p {
        font-size: 18px;
        margin-bottom: 10px;
        line-height: 1.5;
    }

    .profile-container strong {
        color: #a0522d;
    }
</style>

<div class="profile-container">
    <h1>User Profile</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    {{-- Add profile edit form here if needed --}}
</div>
@endsection
