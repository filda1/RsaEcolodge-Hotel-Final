
@extends('layouts/app1')
<script>window.location = "/";</script>
@include('layouts/head7')
@section('head')

@section('main-content')
    <h1>Success!! </h1>
    <p> Bom dia, sou {{ $data['name'] }}</p>
<p>Eu tenho uma consulta: {{ $data['message'] }}.</p>
<p> Obrigado.</p>
<p> <h5>{{ $data['email'] }}.</h5></p>
<br>
@endsection
@section('footer')
@endsection