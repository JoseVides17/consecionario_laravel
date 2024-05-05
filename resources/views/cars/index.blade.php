@extends('layouts.layout')

@section('title', 'Carros')

@section('content')
    @include('partials.nav')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Lista de Carros</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($cars as $car)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:bg-gray-200 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <img src="{{ $car->image }}" alt="{{ $car->name }}" class="w-full h-auto">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $car->name }}</h2>
                        <p class="text-gray-600 mt-2">{{ $car->created_at->format('d M Y') }}</p>
                        <a href="{{ route('cars.show', ['id' => $car->id]) }}" class="text-blue-600 mt-4 block">Ver Detalles</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $cars->links() }}
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
