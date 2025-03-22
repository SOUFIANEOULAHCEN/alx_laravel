<?php

namespace App\Http\Controllers;

use App\Models\Aeroport;
use App\Http\Requests\StoreAeroportRequest;
use App\Http\Requests\UpdateAeroportRequest;
use Illuminate\Http\Request;

class AeroportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $aeroports = Aeroport::all();
        $aeroports = Aeroport::paginate(5);
        return view('airoports.index', compact('aeroports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('airoports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1 ere methode

        /*  $aeroport = new Aeroport();
        $aeroport->nom = $request->nom;
        $aeroport->code_iata = $request->code_iata;
        $aeroport->ville = $request->ville;
        $aeroport->pays = $request->pays;
        $aeroport->save(); */
        // 2eme methode

        /*  Aeroport::create([
            'nom' => $request->nom,
            'code_iata' => $request->code_iata,
            'ville' => $request->ville,
            'pays' => $request->pays
        ]); */

        // 3eme methode
        $validatedData = $request->validate([
            'nom' => 'required|min:4',
            'code_iata' => 'required|min:3|max:3',
            'ville' => 'required',
            'pays' => 'required'
        ]);

        Aeroport::create($validatedData);

        return redirect()->route('aeroports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aeroport $aeroport)
    {
        // $aeroport->load('Vols.AeroportDepart', 'Vols.AeroportArrivee');
        // return view('airoports.show', compact('aeroport'));
        $aeroport->load('VolsDepart', 'VolsArrivee');

        return view('airoports.show', compact('aeroport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aeroport $aeroport)
    {
        return view('airoports.edit', compact('aeroport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aeroport $aeroport)
    {
        $validatedData = $request->validate([
            'nom' => 'required|min:4',
            'code_iata' => 'required|min:3|max:3',
            'ville' => 'required',
            'pays' => 'required'
        ]);

        $aeroport->update($validatedData);

        return redirect()->route('aeroports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aeroport $aeroport)
    {
        $aeroport->delete();
        return redirect()->route('aeroports.index');
    }
}
