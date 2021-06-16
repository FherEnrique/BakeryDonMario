@extends('..layouts.homeLayout')
@section('container')
    <h1 class="text-6xl text-center my-12">Registrar Venta</h1>
    <h1 class="text-2xl text-center my-6">Seleccionar Cliente</h1>
    <form method="POST">
        <div class="w-full mx-auto rounded-xl shadow-lg p-6 text-gray-800 relative overflow-hidden max-w-3xl">
            <div class="relative mt-1">
                <input type="text" id="textSearch" name="textSearch" class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-300 transition-colors" placeholder="Buscar...">
                <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    @if(true)
        <div class="max-w-3xl rounded-3xl mx-auto p-6 text-gray-500">
            <div>
                <h3 class="mt-2 text-xl">Gevonden:</h3>
                <ul class="bg-white border border-gray-100 w-full mt-2 ">
                    <!-- repetir-->
                    <a href="">
                        <li class="pl-8 pr-2 py-1 border-b-2 border-gray-100 relative cursor-pointer hover:bg-yellow-50 hover:text-gray-900">
                            <div class="stroke-current absolute w-4 h-4 left-2 top-2">
                                <i class="fas fa-user"></i>
                            </div>
                            Coincidence
                        </li>
                    </a>
                    <!-- terminar -->
                </ul>
            </div>
        </div>
    @else
        <div class="max-w-3xl rounded-3xl mx-auto p-6 text-gray-500">
            <h1 class="text-center text-3xl">No hay resultados esperados...</h1>
        </div>
    @endif
@endsection