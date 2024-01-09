<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;
    protected $with =['GetImages'];

    public function GetImages(){
        return $this->hasMany(Image::class,'album_id');
    }
}
