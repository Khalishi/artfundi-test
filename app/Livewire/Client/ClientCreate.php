<?php

namespace App\Livewire\Client;

use App\Livewire\Actions\Client\ClientNewCreate;
use Livewire\Component;

class ClientCreate extends Component
{
    public array $form = [
        'id_number' => '',
        'date_of_birth' => '',
        'first_name' => '',
        'last_name' => '',
        'email_address' => '',
        'telephone' => '',
        'status' => 0,
    ];

    public function CreateClient(ClientNewCreate $creator)
    {
        $creator->create($this->form);
        session()->flash('success', 'Client created successfully!');
        $this->redirectRoute('dashboard');
    }

    public function render()
    {
        return view('livewire.client.client-create');
    }
}
