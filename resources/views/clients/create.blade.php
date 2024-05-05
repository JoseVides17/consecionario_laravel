@extends('layouts.layout')

@section('title', 'Clientes | Crear')

@section('content')
    @include('partials.nav')
    <form action="{{ route('clients.store') }}" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" style="margin-top: 20px">
        @csrf
        <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
            <input type="text" id="name" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="lastName" class="block text-gray-700 text-sm font-bold mb-2">Apellido:</label>
            <input type="text" id="lastName" name="lastName" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
            <input type="text" id="phone" name="phone" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico:</label>
            <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
            <input type="text" id="address" name="address" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="city" class="block text-gray-700 text-sm font-bold mb-2">Ciudad:</label>
            <input type="text" id="city" name="city" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="state" class="block text-gray-700 text-sm font-bold mb-2">Departamento:</label>
            <input type="text" id="state" name="state" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="country" class="block text-gray-700 text-sm font-bold mb-2">País:</label>
            <input type="text" id="country" name="country" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="documentType" class="block text-gray-700 text-sm font-bold mb-2">Tipo de documento:</label>
            <input type="text" id="documentType" name="documentType" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-6">
            <label for="documentNumber" class="block text-gray-700 text-sm font-bold mb-2">Número de documento:</label>
            <input type="text" id="documentNumber" name="documentNumber" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="flex items-center justify-between">
            <input type="submit" value="Guardar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </div>
        </div>
    </form>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
