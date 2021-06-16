<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function selectClient()
    {
        return view('/sales/selectedClient');
    }

    public function selectedClient($id)
    {
        return "SOY UN METODO GET";
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show(Client $client)
    {
        //
    }
    public function edit(Client $client)
    {
        //
    }

    public function update(Request $request, Client $client)
    {
        //
    }
}
