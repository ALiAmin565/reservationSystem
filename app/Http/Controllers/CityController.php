<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = city::get();
        $exists =  city::count();
        return view('dashboard.city.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $city = new city();

        return view('dashboard.city.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        city::createModel($request);
        return to_route('city.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(city $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = city::find($id);
        abort_if(!$city, 404);
        return view('dashboard.city.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city = city::find($id);
        city::updateModel($request, $city);
        return to_route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = city::find($id);
        if (!$city) {
            return back();
        }
        $city->delete();
        return to_route('city.index');
    }
}
