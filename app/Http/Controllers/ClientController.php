<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

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

    public function index()
    {
        // Alert::success('Success Title', 'Success Message');
        return view('/clients/index', ['clients' => $this->client->getClients()]);
    }

    public function create()
    {
        return view('/clients/create');
    }

    public function store(ClientRequest $request)
    {
        $formValidated = $request->validated();
        if ($this->client->create($formValidated)) {
            Alert::success('Éxito', 'Cliente creado correctamente');
            return redirect('clients');
        } else {
            return redirect('clients/create')->withErrors('Cliente no ha sido creado');
        }
    }

    public function show($id)
    {
        return view('/clients/show', ['client' => $this->client->findOrFail($id)]);
    }

    public function update(ClientRequest $request, $client)
    {
        $client = $this->client->find($client);
        $formValidated = $request->validated();
        if ($client->update($formValidated)) {
            Alert::success('Éxito', 'Cliente modificado correctamente');
            return redirect('clients');
        } else {
            Alert::success('Error', 'Al modificar el cliente');
        }
    }
}
