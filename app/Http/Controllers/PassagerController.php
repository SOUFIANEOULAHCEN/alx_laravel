<?php

namespace App\Http\Controllers;

use App\Models\Passager;
use App\Http\Requests\StorePassagerRequest;
use App\Http\Requests\UpdatePassagerRequest;
use Illuminate\Http\Request;

class PassagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $passengers = Passager::all();
        $passagers = Passager::paginate(6);
        return view('Passagers.index' , compact('passagers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Passagers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Passager::create($request->all());
        return redirect()->route('passagers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Passager $passager)
    {
        return view('Passagers.show', compact('passager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passager $passager)
    {
        return view('Passagers.update', compact('passager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Passager $passager)
    {
        $passager->update($request->all());
        return redirect()->route('passagers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passager $passager)
    {
        $passager->delete();
        return redirect()->route('passagers.index');
    }
}
