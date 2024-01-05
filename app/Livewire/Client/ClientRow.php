<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class ClientRow extends Component
{
    public Client $client;

    public function deleteClient()
    {
        $this->client->delete();

        session()->flash('deleted', 'Client deleted successfully!');

        $this->redirectRoute('dashboard');
    }

    public function render()
    {
        return view('livewire.client.client-row');
    }
}
