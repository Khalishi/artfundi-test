<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{

    public function create()
    {
        return view('clients.create');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

}
