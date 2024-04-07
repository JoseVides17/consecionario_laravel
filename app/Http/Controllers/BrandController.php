<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveBrandRequest $request)
    {
        Brand::created($request->validated());
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('brands.show', [
            'brand' => Brand::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveBrandRequest $request, Brand $brand)
    {
        $brand->update($request->validated());
        return redirect()->route('brands.show', $brand);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Brand::findOrFail($id)->delete();
        return redirect()->route('brands.index');
    }

}
