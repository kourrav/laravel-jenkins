@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Dashboard</h2>
    <p>Welcome back, {{ auth()->user()->name }}!</p>
</div>
@endsection
