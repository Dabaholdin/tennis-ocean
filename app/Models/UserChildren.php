<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChildren extends Model
{
    use HasFactory;

    protected $fillable = [    
        'user_id',
        'firstname',
        'lastname',
        'middlename',
        'gender',
        'birthdate',
    ];
    protected $casts=[
        'birthdate' => 'date',
    ];

    protected $dates=[
        'birthdate',
    ];
    
}
