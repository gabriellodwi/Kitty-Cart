@extends('layouts.app')

@section('content')
    <h1>Profile</h1>
    <p>Name: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <p>Date of Birth: {{ Auth::user()->date_of_birth }}</p>
@endsection
