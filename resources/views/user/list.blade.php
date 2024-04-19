@extends('layouts.app')

@section('content')
    <div class="m-6 p-4">
        <h1 class="text-orange-600 text-3xl">Llistat d'usuaris</h1>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Nom</th>
                    <th class="border border-gray-300 p-2">Email</th>
                    <th class="border border-gray-300 p-2">Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $user->name }}</td>
                        <td class="border border-gray-300 p-2">{{ $user->email }}</td>
                        <td class="border border-gray-300 p-2">
                            <a href="/user/edit/{{ $user->id }}" class="bg-blue-500 text-white p-2 rounded-md">Editar</a>
                            <a href="/user/delete/{{ $user->id }}" class="bg-red-500 text-white p-2 rounded-md">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection