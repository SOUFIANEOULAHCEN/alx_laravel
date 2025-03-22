@extends('Layouts.app')
@section('title', 'Aeroport n°' . $aeroport->id)
@section('content')
    <div class="w-1/2 mx-auto border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-100 my-10">
        <h1 class="mb-2 text-2xl text-gray-800 font-semibold">Aeroport n°{{ $aeroport->id }}</h1>
        <p class="text-gray-700 font-bold mb-0.5">Nom de l'aéroport : {{ $aeroport->nom }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Code IATA : {{ $aeroport->code_iata }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Ville : {{ $aeroport->ville }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Pays : {{ $aeroport->pays }}</p>

        <h2 class="text-xl text-gray-800 font-semibold mt-4">Vols Départ</h2>
        <ul>
            @foreach ($aeroport->VolsDepart as $vol)
                <li>{{ $vol->numero_vol }} - Vers {{ $vol->AeroportArrivee->nom }}</li>
            @endforeach
        </ul>

        <h2 class="text-xl text-gray-800 font-semibold mt-4">Vols Arrivée</h2>
        <ul>
            @foreach ($aeroport->VolsArrivee as $vol)
                <li>{{ $vol->numero_vol }} - De {{ $vol->AeroportDepart->nom }}</li>
            @endforeach
        </ul>

        <div class="my-4">
            <a href="{{ route('aeroports.index') }}"
                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                Retour
            </a>
        </div>
    </div>
@endsection
