@extends('layouts.app')

@section('content')
    <h1 class="text-orange-600 text-3xl">Crear usuari</h1>

    <form action="/user/store" method="POST">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="border border-gray-300 p-2 rounded-md w-full"
                value="{{ old('name') }}">
        </div>
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
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
        <div>
            <label for="password_confirmation">Repeteix la contrasenya</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="border border-gray-300 p-2 rounded-md w-full">
        </div>

        @error('password_confirmation')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md mt-2">Crear usuari</button>
    </form>
    {{-- @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
@endsection
