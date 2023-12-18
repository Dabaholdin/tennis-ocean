<?php

namespace App\Models;

use App\Models\CortImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cort extends Model
{
    use HasFactory;
    protected $with = ['images'];

    public function images(){
        return $this->hasMany(CortImage::class);
    }
    
}

