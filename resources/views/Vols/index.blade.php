@extends('layouts.app')
@section('title', 'Vols')
@section('content')




    <div class="relative overflow-x-auto">
        <div class="my-6">
            <a href="{{ route('vols.create') }}" class="bg-blue-900 text-gray-100 px-10 py-2 rounded-2xl">Ajouter un vols</a>

        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        numero_vol
                    </th>
                    <th scope="col" class="px-6 py-3">
                        aeroport_depart_id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        aeroport_arrivee_id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        date_heure_depart
                    </th>
                    <th scope="col" class="px-6 py-3">
                        date_heure_arrivee
                    </th>
                    <th scope="col" class="px-6 py-3">
                        statut
                    </th>
                    <th scope="col" class="px-6 py-3">
                        prix
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($vols as $vol)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $vol->numero_vol }}
                        </th>

                        <td class="px-6 py-4">
                            {{ $vol->aeroportDepart->nom ?? 'Inconnu' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vol->aeroportArrivee->nom ?? 'Inconnu' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vol->date_heure_depart }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vol->date_heure_arrivee }}
                        </td>
                        <td class="px-6 py-4">
                            <span
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
        @endswitch text-gray-200 px-6 py-1 rounded-2xl">{{ $vol->statut }}</span>

                        </td>
                        <td class="px-6 py-4">
                            {{ $vol->prix }} Dh
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('vols.show', $vol->id) }}" type="button"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">View</a>
                            <a href="" type="button"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
                            <a href="" type="button"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Supprimer</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <div class="mt-4">
            {{ $vols->links() }}
        </div>
    </div>


@endsection
