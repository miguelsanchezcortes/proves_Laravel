@extends('layouts.app')

@section('title', 'Títol de la pagina')
@section('content')
    <h1 class="text-orange-600 text-3xl">Hello World!</h1>

    <p>Hola {{ $name }}</p>

    @if($name == 'David')
        <p>El teu nom és David</p>
    @elseif($name == 'Miguel')
        <p>El teu nom és Miguel</p>
    @endif

    @isset($name)
        <p>El teu nom és {{ $name }} i està setejat</p>
    @endisset

    @empty($name)
        <p>El teu nom és buit</p>
    @endempty

    @php
        $message = 'Hello World!';
    @endphp
    <x-button_success :mesasge="$message"/>

@endsection