@extends('layouts.layoutInicio')

@section('title', 'Inicio')

@section('content')
    @include('partials.nav')
    <!-- Contenido de la Página -->
    <div class="container mx-auto p-4 content">
        <h1 class="text-3xl font-bold mb-4">Panel Principal</h1>

        <div class="flex justify-center">
            <a href="{{ route('cars.index') }}" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-4 px-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 mx-4">
                Ver Carros
            </a>
            <a href="{{ route('brands.index') }}" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-4 px-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 mx-4">
                Ver Marcas
            </a>
            <a href="{{ route('quotations.form') }}" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-4 px-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 mx-4">
                Hacer cotizacion
            </a>
            <a href="{{ route('clients.create') }}" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-4 px-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 mx-4">
                Subir cliente
            </a>
        </div>
    </div>

    </div>
    <style>
        .button-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Cambia el número para ajustar el número de columnas */
            gap: 10px; /* Espacio entre botones */
        }

        .button-grid a {
            text-decoration: none; /* Quita la subrayado predeterminado de los enlaces */
        }

        .button-grid button {
            width: 100%; /* Los botones ocuparán todo el ancho de la celda de la grilla */
            padding: 10px;
            border: none;
            background-color: #4CAF50; /* Color de fondo */
            color: white; /* Color del texto */
            cursor: pointer;
            transition: background-color 0.3s; /* Transición suave del color de fondo al pasar el ratón */
        }

        .button-grid button:hover {
            background-color: #45a049; /* Cambia el color de fondo al pasar el ratón */
        }
    </style>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
