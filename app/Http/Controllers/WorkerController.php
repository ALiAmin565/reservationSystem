<?php

namespace App\Http\Controllers;

use App\Models\worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers = Worker::get();
        $exists =  Worker::count();
        return view('dashboard.worker.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $worker = new Worker();

        return view('dashboard.worker.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Worker::createModel($request);
        return to_route('worker.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $worker = Worker::find($id);
        abort_if(!$worker, 404);
        return view('dashboard.worker.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $worker = Worker::find($id);
        Worker::updateModel($request, $worker);
        return to_route('worker.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(worker $worker)
    {
        //
    }
}
