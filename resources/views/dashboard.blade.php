@extends('layout.app')
@section('content')
    <h2>Dashboard</h2>
    <p>Welcome {{ auth()->user()->name }}</p>
    <form method="POST" action="/logout">@csrf<button>Logout</button></form>
@endsection
