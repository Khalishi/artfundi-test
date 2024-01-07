<?php

namespace App\Livewire\Actions\Client;

use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientNewCreate
{
    public function create(array $input)
    {

        Validator::make($input, [
            'id_number' => ['required', 'string', 'unique:clients'],
            'date_of_birth' => ['required'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email_address' => ['required', 'email', 'unique:clients'],
            'telephone' => ['required', 'string'],
            'status' => ['required', 'boolean'],
        ])->validate();

        return DB::transaction(function () use ($input) {
            return Client::create([
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
