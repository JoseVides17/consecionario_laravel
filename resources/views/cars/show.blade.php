@extends('layouts.layout')

@section('title', 'Carros')

@section('content')
    @include('partials.nav')
    <div class="container mx-auto py-8 content">
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300 ease-in-out">
            <div class="mb-6">
                <img src="{{ $car->image }}" alt="{{ $car->name }}" class="w-full h-80">
            </div>
            <h1 class="text-3xl font-semibold text-gray-800 mb-4">{{ $car->name }}</h1>
            <p class="text-gray-700"><strong>Marca: </strong>{{ $brand->name }}</p>
            <p class="text-gray-600 mb-2"><strong>Modelo:</strong> {{ $car->model }}</p>
            <p class="text-gray-600 mb-2"><strong>Año:</strong> {{ $car->year }}</p>
            <p class="text-gray-600 mb-2"><strong>Color:</strong> {{ $car->color }}</p>
            <p class="text-gray-600 mb-2"><strong>Precio:</strong> {{ $car->price }}</p>
            <p class="text-gray-600 mb-2"><strong>Stock:</strong> {{ $car->stock }}</p>
            <p class="text-gray-600 mb-2">{{ $car->created_at->format('d M Y') }}</p>
            <a href="{{ route('cars.index') }}" class="text-blue-600 mt-4 inline-block">Volver a la Lista de Carros</a>
        </div>
    </div>


@endsection

@section('footer')
    @include('partials.footer')
@endsection
