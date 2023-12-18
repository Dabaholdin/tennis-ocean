<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CortImage extends Model
{
    use HasFactory;

    protected $fillable = [    
        'id',
        'cort_id',
        'path',
];
}
