@extends('..layouts.homeLayout')
@section('container')
    <h1 class="text-3xl text-center my-8">Registrar Producto</h1>
<br>
    <div class="w-full mx-auto rounded-xl shadow-lg p-6 text-gray-800 relative overflow-hidden max-w-2xl">
        <form class="w-full max-w-lg" action="{{route('products.store')}}" method="POST">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre del Producto
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           type="text" placeholder="Pegadito" name="name">

                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Precio
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name"
                           type="number" min="0" max="100" step='0.01' value='0.00' placeholder="$ 0.50" name="amount">
                </div>
            </div>

            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    @csrf
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded" type="submit">
                        Registrar
                    </button>
                </div>
            </div>
        </form>
    </div>

    </div>
@endsection
