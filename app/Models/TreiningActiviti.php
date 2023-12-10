<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreiningActiviti extends Model
{
    use HasFactory;

    protected $fillable = [    
            'id',
            'training_id',
            'user_id',
            'cort_id',
            'date_start',
            'day_period',
            'status',
    ];
    protected $casts = [
        'date_start' => 'datetime',        
    ];

    protected $dates=[
        'date_start',
    ];
}
