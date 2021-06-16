@extends('..layouts.homeLayout')
@section('container')
    <h1 class="text-6xl text-center my-12">Carrito de Compras</h1>

    <div class="p-5 pl-10 pr-10">
                <div class=" rounded-b border-t-0">
                    <div class="shadow-xl mx-auto">
                        <!-- repetir-->
                        <div class="p-2 flex bg-white hover:bg-gray-100 cursor-pointer border-b border-gray-100">
                            <div class="flex-auto text-sm w-32">
                                <div class="font-bold">Producto 1</div><div>
                                    Cantidad:
                                    <input type="number" min="1" max="1000" value="1" id="textSearch" name="textSearch" class="w-20 pl-3 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-300 transition-colors">
                                </div>
                                <div class="font-bold">$12.22</div>
                            </div>
                            <div class="flex flex-row w-18 font-medium items-end">
                                <button class="bg-red-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider border text-red-100 rounded-full hover:shadow-lg hover:bg-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button class="bg-blue-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider border text-blue-100 rounded-full hover:shadow-lg hover:bg-blue-800">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                        <!-- terminar repetir-->
                        <div class="p-4 justify-center flex">
                            <button class="bg-green-700 px-5 py-3 text-xl shadow-sm  tracking-wider border text-white rounded-full hover:shadow-lg hover:bg-green-800">
                                <i class="fas fa-credit-card"></i> Pagar $36.66
                            </button>
                        </div>
                    </div>
                </div>
    </div>
@endsection