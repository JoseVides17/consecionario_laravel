<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveBrandRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(5);
        return view('cars.index', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveCarRequest $request)
    {
        Car::created($request->validated());
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        $brand = $car->brand;
        return view('cars.show', ['car' => $car, 'brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveCarRequest $request, Car $car)
    {
        $car->update($request->validated());
        return redirect()->route('cars.show', $car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Car::findOrFail($id)->delete();
        return redirect()->route('cars.index');
    }

}
