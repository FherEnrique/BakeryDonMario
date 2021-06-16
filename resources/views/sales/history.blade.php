@extends('..layouts.homeLayout')
@section('container')
    <h1 class="text-6xl text-center my-12">Historial de Ventas</h1>
    <form method="POST">
        <div class="w-full mx-auto rounded-xl shadow-lg p-6 text-gray-800 relative overflow-hidden max-w-3xl">
            <div class="relative mt-1">
                <input type="text" id="textSearch" name="textSearch" class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-300 transition-colors" placeholder="Buscar...">
                <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>

    <!-- repetir1 -->
    @forelse($listInvoicesNameClient as $detailsListInvoices)
        <div class="w-full mx-auto rounded-xl shadow-lg p-6 text-gray-800 relative overflow-hidden max-w-7xl">
            <div class="flex flex-row">
                <div class="p-4">
                    <h1 class="text-2xl">ID Factura: {{ $detailsListInvoices->id }}</h1>
                </div>
                <div class="p-4 pl-28 ">
                    <h1 class="text-2xl">Cliente: {{ $detailsListInvoices->name }}</h1>
                </div>
            </div>
            <div class="py-8">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Nombre del producto
                                </th>
                                <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Cantidad
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- repetir2-->
                                @forelse($detailsListInvoices->listDetailsInvoices as $detailsInvoices)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$detailsInvoices->name}}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$detailsInvoices->stock}}
                                            </p>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="2">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                No hay detalles que mostrar
                                            </p>
                                        </td>
                                    </tr>
                                @endforelse
                            <!-- terminar2-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="w-full mx-auto rounded-xl shadow-lg p-6 text-gray-800 relative overflow-hidden max-w-7xl">
            <div class="flex flex-row">
                <h1>No hay facturas</h1>
            </div>
        </div>
    @endforelse
    <!-- terminar1 -->


@endsection