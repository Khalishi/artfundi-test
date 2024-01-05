<?php

namespace App\Livewire\Client;

use App\Livewire\Actions\Client\UpdateClient;
use App\Models\Client;
use Livewire\Component;

class ClientEdit extends Component
{

    public Client $client;
    public array $form = [];

    public function mount()
    {
        $this->form = [
            'id_number' => $this->client->id_number,
            'date_of_birth' => $this->client->date_of_birth,
            'first_name' => $this->client->first_name,
            'last_name' => $this->client->last_name,
            'email_address' => $this->client->email_address,
            'telephone' => $this->client->telephone,
            'status' => $this->client->status,
        ];
    }

    public function updateClient(UpdateClient $updater)
    {
        $updater->update($this->client, $this->form);

        session()->flash('success', 'Client updated successfully!');

        $this->redirectRoute('dashboard');
    }

    public function render()
    {
        return view('livewire.client.client-edit');
    }
}
