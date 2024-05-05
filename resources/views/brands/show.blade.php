@extends('layouts.layout')

@section('title', 'Marcas')

@section('content')
    @include('partials.nav')
    <div class="container mx-auto py-8 content">
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300 ease-in-out">
            <img src="{{ $brand->image }}" alt="{{ $brand->name }}" class="w-full h-80">
            <h1 class="text-3xl font-semibold text-gray-800 mb-4">{{ $brand->name }}</h1>
            <p class="text-gray-700">{{ $brand->description }}</p>
            <p class="text-gray-600 mb-2"><strong>Owner:</strong> {{ $brand->owner }}</p>
            <p class="text-gray-600 mb-2"><strong>Country:</strong> {{ $brand->country }}</p>
            <p class="text-gray-600 mb-2">{{ $brand->created_at->format('d M Y') }}</p>
            <a href="{{ route('brands.index') }}" class="text-blue-600 mt-4 inline-block">Volver a la Lista de Posts</a>
        </div>
    </div>

@endsection

@section('footer')
    @include('partials.footer')
@endsection
