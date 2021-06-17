@extends('..layouts.homeLayout')
@section('container')
    <h1 class="text-6xl text-center my-12">Listado de Productos</h1>
    <h1 class="text-2xl text-center my-6">Agregar los productos al carrito de compras</h1>

        <div class="w-full mx-auto rounded-xl shadow-lg p-6 text-gray-800 relative overflow-hidden max-w-3xl">
            <div class="p-4 mt-5 grid justify-items-center">
                <a href="/shoppingCart/">
                    <button class="bg-green-700 px-5 py-3 text-xl shadow-sm  tracking-wider border text-white rounded-full hover:shadow-lg hover:bg-green-800">
                        <i class="fas fa-shopping-cart"></i> Carrito de Compras
                    </button>
                </a>
            </div>
        </div>
    <div class="py-8">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           Precio
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Cantidad
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Agregar
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--repetir-->
                        @forelse($listAllProduct as $detailsProduct)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$detailsProduct->name}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $detailsProduct->amount}}
                                    </p>
                                </td>
                                <form method="GET" action="/addShoppingCart/{{$detailsProduct->id}}" >
                                    @csrf
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <input type="number" min="1" max="1000" value="1" id="countProduct" name="countProduct" class="w-full pl-3 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-300 transition-colors">
                                        </div>
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <button type="submit" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg" name="negado" value="1">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        </p>
                                    </td>
                                </form>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="4">
                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                        No hay productos para mostrar
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    <!-- terminar -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
