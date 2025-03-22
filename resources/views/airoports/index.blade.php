@extends('layouts.app')
@section('title', 'Aeroports')
@section('content')
    <div class="relative overflow-x-auto">
        <div class="mb-6 mt-2">
            <a href="{{ route('aeroports.create') }}" class="bg-blue-900 text-gray-100 px-10 py-2 rounded-2xl">Ajouter un
                Aeroport</a>

        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nom Aeroprot
                    </th>
                    <th scope="col" class="px-6 py-3">
                        code_iata
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ville
                    </th>
                    <th scope="col" class="px-6 py-3">
                        pays
                    </th>


                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($aeroports as $aeroport)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $aeroport->id }}
                        </th>

                        <td class="px-6 py-4">
                            {{ $aeroport->nom }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $aeroport->code_iata }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $aeroport->ville }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $aeroport->pays }}
                        </td>


                        <td class="px-6 py-4 flex justify-center items-center">
                            <a href="{{ route('aeroports.show', $aeroport->id) }}" type="button"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">View</a>
                            <a href="{{ route('aeroports.edit', $aeroport->id) }}" type="button"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
                            <form action="{{ route('aeroports.destroy', $aeroport->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <div class="mt-4">
            {{ $aeroports->links() }}
        </div>
    </div>


@endsection
