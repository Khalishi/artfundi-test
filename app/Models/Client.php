<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'uuid',
        'id_number',
        'date_of_birth',
        'first_name',
        'last_name',
        'email_address',
        'telephone',
        'status',
    ];
}
