@extends('Layouts.app')
@section('title', 'Passger n°' . $passager->id)
@section('content')
    <div class="w-1/2 mx-auto border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-100 my-10">
        <h1 class="mb-2 text-2xl text-gray-800 font-semibold">passager n°{{ $passager->id }}</h1>
        <p class="text-gray-700 font-bold mb-0.5">Le nom de passager : {{ $passager->nom }} {{ $passager->prenom }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Email : {{ $passager->email }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Telephone : {{ $passager->telephone }}</p>
        <p class="text-gray-700 font-bold mb-0.5">Passport : {{ $passager->passport }}</p>
        <div class="my-4">
            <a href="{{ route('passagers.index') }}"
                class=" text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                retour </a>
        </div>
    </div>
@endsection
