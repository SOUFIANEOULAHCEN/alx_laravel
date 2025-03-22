@extends('Layouts.app')
@section('title', 'Modifier un Aéroport')
@section('content')

    <form action="{{ route('aeroports.store') }}" method="POST"
        class="w-2/3 mx-auto border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-100 my-10">
        @csrf

        <div class="mb-6 mt-2">
            <a href="{{ route('aeroports.index') }}" class="bg-blue-900 text-gray-100 px-10 py-2 rounded-2xl">Retour</a>
        </div>

        <div class="w-1/2 mx-auto border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-100 my-10">
            <h1 class="mb-2 text-2xl text-gray-800 font-semibold">Modifier un Aéroport</h1>

            <div class="mb-4">
                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom</label>
                <input type="text" name="nom" id="nom"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" required>
            </div>

            <div class="mb-4">
                <label for="code_iata" class="block text-gray-700 font-bold mb-2">Code IATA</label>
                <input type="text" name="code_iata" id="code_iata"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" required>
            </div>

            <div class="mb-4">
                <label for="ville" class="block text-gray-700 font-bold mb-2">Ville</label>
                <input type="text" name="ville" id="ville"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" required>
            </div>

            <div class="mb-4">
                <label for="pays" class="block text-gray-700 font-bold mb-2">Pays</label>
                <input type="text" name="pays" id="pays"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" required>
            </div>

            <div class="my-4">
                <button type="submit"
                    class="bg-blue-900 text-gray-100 px-10 py-2 rounded-2xl focus:outline-none focus:ring-4 focus:ring-gray-300">
                    Ajoiter
                </button>
            </div>
        </div>
    </form>

@endsection
