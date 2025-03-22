@extends('Layouts.app')
@section('title', 'Modfier un passager')
@section('content')
    <form action="{{ route('passagers.update', $passager->id) }}" method="POST"
        class="w-2/3 mx-auto border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-100 my-10">
        @csrf
        @method('PUT')
        <div class="mb-6 mt-2">
            <a href="{{ route('passagers.index') }}" class="bg-blue-900 text-gray-100 px-10 py-2 rounded-2xl">Retour</a>
        </div>
        <div class="w-1/2 mx-auto border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-100 my-10">
            <h1 class="mb-2 text-2xl text-gray-800 font-semibold">Ajouter un passager</h1>
            <div class="mb-4">
                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom</label>
                <input value="{{ $passager->nom }}" type="text" name="nom" id="nom"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" placeholder="Nom">
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-gray-700 font-bold mb-2">Prenom</label>
                <input value="{{ $passager->prenom }}" type="text" name="prenom" id="prenom"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" placeholder="Prenom">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input value="{{ $passager->email }}" type="email" name="email" id="email"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" placeholder="Email">
            </div>
            <div class="mb-4">
                <label for="telephone" class="block text-gray-700 font-bold mb-2">Telephone</label>
                <input value="{{ $passager->telephone }}" type="text" name="telephone" id="telephone"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" placeholder="Telephone">
            </div>
            <div class="mb-4">
                <label for="passport" class="block text-gray-700 font-bold mb-2">Passport</label>
                <input value="{{ $passager->passport }}" type="text" name="passport" id="passport"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none
                    "
                    placeholder="Passport">
            </div>
            <div class="my-4">
                <button type="submit"
                    class="bg-blue-900 text-gray-100 px-10 py-2 rounded-2xl focus:outline-none focus:ring-4 focus:ring-gray-300">Modifier</button>
            </div>
    </form>
@endsection
