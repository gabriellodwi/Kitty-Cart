@extends('layouts.app')

@section('content')
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Login</button>
    </form>
@endsection
