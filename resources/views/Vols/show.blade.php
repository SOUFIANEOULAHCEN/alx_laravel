@extends('Layouts.app')
@section('title', 'Vol n°' . $vol->id)
@section('content')
    <div class="w-1/2 mx-auto border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-100 my-10">
        <h1 class="mb-2 text-2xl text-gray-800 font-semibold">Vol n°{{ $vol->id }}</h1>
        <p class="text-gray-700 font-bold mb-0.5">Numéro de vol : {{ $vol->numero_vol }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Heure de départ : {{ $vol->aeroportDepart->nom }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Heure d'arrivée : {{ $vol->aeroportArrivee->nom }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Nombre de places : {{ $vol->date_heure_depart }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Nombre de places restantes : {{ $vol->date_heure_arrivee }}</p>
        <p class="text-gray-700 font-bold my-2">status : <span
                class="@switch($vol->statut)
           @case('ouvert')
        bg-green-500
        @break
    @case('fermé')
        bg-gray-500
        @break
    @case('annule')
        bg-red-500
        @break
    @case('retarde')
        bg-amber-500
        @break
    @default
        bg-blue-500
        @endswitch text-gray-100 px-6 py-1.5 rounded-2xl">{{ $vol->statut }}</span>
        </p>
        <p class="text-gray-700 font-bold mb-0.5">prix : {{ $vol->prix }}</p>
        <div class="my-4">
            <a href="{{ route('vols.index') }}"
                class=" text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                retour </a>
        </div>
    </div>
@endsection
