@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1>Welcome to {{ config('app.name', 'Laravel') }}</h1>
    <p class="lead">A simple Laravel app with Bootstrap styling and Auth</p>
    @guest
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-success">Register</a>
    @else
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
    @endguest
</div>
@endsection
