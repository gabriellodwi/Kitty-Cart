@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    @if (Auth::check())
        <p>Welcome, {{ Auth::user()->name }}</p>
    @else
        <p>Please <a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a>.</p>
    @endif
@endsection
