@extends('..layouts.layout')
@section('content')
    <section class="flex flex-col md:flex-row h-screen items-center">
        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="https://www.bakingbusiness.com/ext/resources/2019/8/08192019/GlobalTrends.jpg?1566494557" alt="" class="w-full h-full object-cover">
        </div>
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-3 lg:px-12 xl:px-10
        flex items-center justify-center">
            <div class="w-full h-100">
                <img src="https://image.freepik.com/vector-gratis/diseno-logotipo-pan_10250-793.jpg" width="450" height="450" class="content-center">
                <h1 class="text-xl md:text-2xl font-bold leading-tight">Ingresa con tu cuenta.</h1>
                <form class="mt-6" action="#" method="POST">
                    <div>
                        <input
                                type="email"
                                name="" id=""
                                placeholder="Correo electrónico"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                autofocus autocomplete required>
                    </div>
                    <div class="mt-4">
                        <input
                                type="password"
                                name=""
                                id=""
                                placeholder="Contraseña"
                                minlength="6"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                required>
                    </div>
                    <button
                            type="submit"
                            class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                            Ingresar
                    </button>
                </form>
            </div>
        </div>
    </section>
    @php
        Alert::alert('Title', 'Message', 'success');
    @endphp
    @include('sweetalert::alert')
@endsection
