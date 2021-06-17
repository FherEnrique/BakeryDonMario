@extends('..layouts.homeLayout')
@section('container')
    <h1 class="text-6x1 text-center my-12">Listado de Clientes</h1>
    <div class="py-8">
        <div class="container mx-auto overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wide">
                                Nombre
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wide">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $client->name }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    <div class="inline-block mr-2 mt-2">
                                        <a href="/clients/{{$client->id}}" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection