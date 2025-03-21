<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use App\Http\Requests\StoreVolRequest;
use App\Http\Requests\UpdateVolRequest;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $vols = Vol::all();
        // $vols = Vol::paginate(5);
        // return view('Vols.index' , compact('vols'));
        $vols = Vol::with('aeroportDepart', 'aeroportArrivee')->paginate(7);
        return view('Vols.index', compact('vols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Vols.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vol $vol)
    {
        return view('Vols.show', compact('vol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vol $vol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVolRequest $request, Vol $vol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vol $vol)
    {
        //
    }
}
