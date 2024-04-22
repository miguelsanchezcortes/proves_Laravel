@extends('layouts.app')

@section('content')
    <div class="m-6 p-4">
        <h1 class="text-orange-600 text-3xl">Editar usuari</h1>

    <form action="/user/update/{{ $user->id }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="border border-gray-300 p-2 rounded-md w-full"
                value="{{ $user->name }}">
        </div>
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="border border-gray-300 p-2 rounded-md w-full"
                value="{{ $user->email }}">
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

        <input class="hidden" type="text" name="id" id="id" value="{{ $user->id }}">

        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md mt-2">Editar usuari</button>
    </form>
    </div>
    
    
@endsection