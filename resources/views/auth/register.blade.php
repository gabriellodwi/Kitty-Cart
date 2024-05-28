@extends('layouts.app')

@section('content')
    <h1>Register</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
        @error('date_of_birth')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required>
        <br>
        <button type="submit">Register</button>
    </form>
@endsection
