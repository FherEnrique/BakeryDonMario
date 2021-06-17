<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function selectClient()
    {
        if (session('id_client')!= ""){
            return redirect()->to('/viewProduct/')->send();
        }else{
            $listClients = Client::select('id','name')->get();
            return view('/sales/selectedClient', compact('listClients'));
        }
    }

    public function selectedClient($id)
    {
        session(['id_client'=>$id]);
        return redirect()->to('/viewProduct/')->send();
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
