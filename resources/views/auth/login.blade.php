@extends('layout.app')
@section('content')
    <h2>Login</h2>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
    <a href="/register">Register</a>
@endsection
