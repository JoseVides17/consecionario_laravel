<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveQuotationRequest;
use App\Models\Car;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function viewForm()
    {
        $cars = Car::all();
        return view('quotations.form', compact('cars'));
    }
    public function index()
    {
        $quotations = Quotation::paginate(5);
        return view('quotations.index', compact('quotations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveQuotationRequest $request)
    {
        Quotation::created($request->validated());
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $quotation = Quotation::findOrFail($id);
        return view('quotations.show', ['quotation' => $quotation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveQuotationRequest $request, Quotation $quotation)
    {
        $quotation->update($request->validated());
        return redirect()->route('quotation.show', $quotation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Quotation::findOrFail($id)->delete();
        return redirect()->route('Quotation.index');
    }
}
