@extends('Layouts.app')
@section('title', 'Ajouter un vol')
@section('content')

    <div class="w-2/3 mx-auto">

        <h1 class="text-2xl font-semibold text-gray-800 my-6">Ajouter un vol</h1>
        <form action="{{ route('vols.store') }}" method="POST"
            class="w-1/2 mx-auto border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-100">
            @csrf
            <div class="mb-4">
                <label for="numero_vol" class="block text-gray-700 font-bold mb-2">Numéro de vol</label>
                <input type="text" name="numero_vol" id="numero_vol"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300"
                    required>
            </div>
            <div class="mb-4">
                <label for="aeroport_depart_id" class="block text-gray-700 font-bold mb-2">Aéroport de départ</label>
                <select name="aeroport_depart_id" id="aeroport_depart_id"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300"
                    required>
                    @foreach ($aeroports as $aeroport)
                        <option value="{{ $aeroport->id }}">{{ $aeroport->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="aeroport_arrivee_id" class="block text-gray-700 font-bold mb-2">Aéroport d'arrivée</label>
                <select name="aeroport_arrivee_id" id="aeroport_arrivee_id"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300"
                    required>
                    @foreach ($aeroports as $aeroport)
                        <option value="{{ $aeroport->id }}">{{ $aeroport->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="statut" class="block text-gray-700 font-bold mb-2">Status</label>
                <select name="statut" id="statut"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300"
                    required>
                    @foreach ($status as $statut)
                        <option value="{{ $statut }}">{{ $statut }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="date_heure_depart" class="block text-gray-700 font-bold mb-2">Date et heure de départ</label>
                <input type="datetime-local" name="date_heure_depart" id="date_heure_depart"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300"
                    required>
            </div>
            <div class="mb-4">
                <label for="date_heure_arrivee" class="block text-gray-700 font-bold mb-2">Date et heure de départ</label>
                <input type="datetime-local" name="date_heure_arrivee" id="date_heure_arrivee"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300"
                    required>
            </div>
            <div class="mb-4">
                <label for="prix" class="block text-gray-700 font-bold mb-2">Prix</label>
                <input type="number" name="prix" id="prix"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300"
                    min="0" step="0.01" placeholder="0.00" required>
            </div>
            <div class="w-full mb-4">
                <a href="{{ route('vols.store') }}"
                    class="bg-blue-900 w-full text-gray-100 px-10 py-2 rounded-2xl">Ajouter</a>
                    <a href="{{ route('vols.index') }}"
                    class="bg-red-900 w-full text-gray-100 px-10 py-2 rounded-2xl">Annuler</a>

            </div>
    </div>
@endsection
