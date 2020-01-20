@extends('adminlte::page')

@section('title', 'OLFA')

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    @auth
        <h1>Hello Guys</h1>
    @endauth
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop