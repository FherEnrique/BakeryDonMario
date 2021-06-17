@extends('..layouts.homeLayout')
@section('container')
    <h1 class="text-3xl text-center my-8">Modificar Cliente - {{$client->name}}</h1>
    <br>
    <div class="container w-full mx-auto rounded-xl shadow-lg p-6 text-gray-800 relative overflow-hidden max-w-2x1">
        <form class="w-full" action="/api/clients/{{$client->id}}" method="POST" autocomplete="off">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre del Cliente
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           type="text" placeholder="Ej: Juan" name="name" id="name" value="{{$client->name}}">
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="">
                    @csrf
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded" type="submit">
                        Modificar Cliente
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection