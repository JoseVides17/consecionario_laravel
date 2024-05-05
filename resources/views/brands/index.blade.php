@extends('layouts.layout')

@section('title', 'Marcas')

@section('content')
   @include('partials.nav')
   <div class="container mx-auto py-8">
       <h1 class="text-3xl font-semibold text-gray-800 mb-6">Lista de Marcas</h1>

       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
           @foreach ($brands as $brand)
               <div class="bg-white rounded-lg shadow-md p-6 hover:bg-gray-200 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                   <img src="{{ $brand->image }}" alt="{{ $brand->name }}" class="w-full h-auto">
                   <h2 class="text-xl font-semibold text-gray-800">{{ $brand->name }}</h2>
                   <p class="text-gray-600 mt-2">{{ $brand->created_at->format('d M Y') }}</p>
                   <a href="{{ route('brands.show', ['id' => $brand->id]) }}" class="text-blue-600 mt-4 block">Ver Detalles</a>
               </div>
           @endforeach
       </div>
       <div class="mt-8">
           {{ $brands->links() }}
       </div>
   </div>
@endsection

@section('footer')
   @include('partials.footer')
@endsection
