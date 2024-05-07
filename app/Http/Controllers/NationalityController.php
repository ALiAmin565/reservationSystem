<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use App\Http\Requests\NationalityRequest;


class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nationalities = Nationality::get();
        $exists =  Nationality::count();
        return view('dashboard.nationality.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nationality = new Nationality();

        return view('dashboard.nationality.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NationalityRequest $request)
    {
        Nationality::createModel($request);
        return to_route('nationality.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nationality $nationality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nationality = Nationality::find($id);
        abort_if(!$nationality, 404);
        return view('dashboard.nationality.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NationalityRequest $request, string $id)
    {
        $nationality = Nationality::find($id);
        Nationality::updateModel($request, $nationality);
        return to_route('nationality.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nationality = Nationality::find($id);
        if (!$nationality) {
            return back();
        }
        $nationality->delete();
        return to_route('nationality.index');
    }
}
