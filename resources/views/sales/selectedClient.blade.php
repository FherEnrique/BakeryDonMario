@extends('..layouts.homeLayout')
@section('container')
    <h1 class="text-6xl text-center my-12">Registrar Venta</h1>
    <h1 class="text-2xl text-center my-6">Seleccionar Cliente</h1>
        <div class="max-w-3xl rounded-3xl mx-auto p-6 text-gray-500">
            <div>
                <ul class="bg-white border border-gray-100 w-full mt-2 ">
                    <!-- repetir-->
                    @forelse($listClients as $detailsClients)
                        <a href="/selectedClient/{{ $detailsClients->id }}">
                            <li class="pl-8 pr-2 py-1 border-b-2 border-gray-100 relative cursor-pointer hover:bg-yellow-50 hover:text-gray-900">
                                <div class="stroke-current absolute w-4 h-4 left-2 top-2">
                                    <i class="fas fa-user"></i>
                                </div>
                                {{ $detailsClients->name }}
                            </li>
                        </a><!-- terminar -->
                    @empty
                        <div class="max-w-3xl rounded-3xl mx-auto p-6 text-gray-500">
                            <h1 class="text-center text-3xl">No hay resultados esperados...</h1>
                        </div>
                    @endforelse

                </ul>
            </div>
        </div>

@endsection