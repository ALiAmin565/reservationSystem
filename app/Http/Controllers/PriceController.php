<?php

namespace App\Http\Controllers;

use App\Http\Requests\PriceRequest;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Price::get();
        $exists =  Price::count();
        return view('dashboard.prices.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $price = new Price();
      
        return view('dashboard.prices.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PriceRequest $request)
    {
        Price::createModel($request);
        return to_route('prices.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $price = Price::find($id);
        abort_if(!$price , 404);
        return view('dashboard.prices.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PriceRequest $request, string $id)
    {
        $price = Price::find($id);
        Price::updateModel($request , $price);
        return to_route('prices.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
