@extends('layouts.app')

@section('content')
    <h1 class="text-orange-600 text-3xl">Iniciar sessió</h1>

    <form action="/user/login" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="border border-gray-300 p-2 rounded-md w-full"
                value="{{ old('email') }}">
        </div>
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div>
            <label for="password">Contrasenya</label>
            <input type="password" name="password" id="password" class="border border-gray-300 p-2 rounded-md w-full">
        </div>
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md mt-2">Iniciar sessió</button>
        @if(session('status'))
        <div class="bg-green-500 text-white text-sm font-bold p-2 mt-2">
            {{ session('status') }}
        </div>
    @endif
    </form>

    
    