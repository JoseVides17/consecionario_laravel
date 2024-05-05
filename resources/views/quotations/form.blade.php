@extends('layouts.layout')

@section('title', 'Cotizacion')

@section('content')
    @include('partials.nav')
    <div class="mx-auto max-w-md mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold mb-4">Formulario de Cotización</h2>
            <form action="{{ route('quotations.store') }}" method="POST" class="quotation-form">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="client_id" class="block text-sm font-medium text-gray-700 ">ID del Cliente:</label>
                        <input type="text" name="client_id" id="client_id" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="client_name" class="block text-sm font-medium text-gray-700">Nombre del Cliente:</label>
                        <input type="text" name="client_name" id="client_name" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="client_phone" class="block text-sm font-medium text-gray-700">Teléfono del Cliente:</label>
                        <input type="text" name="client_phone" id="client_phone" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="client_email" class="block text-sm font-medium text-gray-700">Correo electrónico del Cliente:</label>
                        <input type="email" name="client_email" id="client_email" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="client_address" class="block text-sm font-medium text-gray-700">Dirección del Cliente:</label>
                        <input type="text" name="client_address" id="client_address" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="client_city" class="block text-sm font-medium text-gray-700">Ciudad del Cliente:</label>
                        <input type="text" name="client_city" id="client_city" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="client_state" class="block text-sm font-medium text-gray-700">Estado del Cliente:</label>
                        <input type="text" name="client_state" id="client_state" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="car_id" class="block text-sm font-medium text-gray-700">Selecciona un Carro:</label>
                        <select name="car_id" id="car_id" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                            <option value=""></option>
                            @foreach($cars as $car)
                                <option value="{{ $car->id }}" data-price="{{ $car->price }}">{{ $car->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="total_price" class="block text-sm font-medium text-gray-700">Precio Total:</label>
                        <div class="flex">
                            <span class="px-4 py-2 border border-gray-300 rounded-r-md">$</span>
                            <input type="text" name="total_price" id="total_price" class="px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:border-blue-500" readonly>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#car_id').change(function() {
                var selectedCar = $(this).find(':selected');
                var carPrice = selectedCar.data('price');
                $('#total_price').val(carPrice);
            });
        });
    </script>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
