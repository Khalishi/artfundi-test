<?php

namespace App\Livewire\Actions\Client;

use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UpdateClient
{
    public function update(Client $client, array $input)
    {

        Validator::make($input, [
            'id_number' => ['required', 'string', Rule::unique('clients')->ignore($client->id)],
            'date_of_birth' => ['required'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email_address' => ['required', 'email', Rule::unique('clients')->ignore($client->id)],
            'telephone' => ['required', 'string'],
            'status' => ['required', 'boolean'],
        ])->validate();

        return DB::transaction(function () use ($input, $client) {
            return $client->update([
                'id_number' => $input['id_number'],
                'date_of_birth' => $input['date_of_birth'],
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email_address' => $input['email_address'],
                'telephone' => $input['telephone'],
                'status' => (int) $input['status'],
            ]);
        });
    }
}
