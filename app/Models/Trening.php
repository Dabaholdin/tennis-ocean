<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trening extends Model
{
    use HasFactory;
    
    protected $fillable = [  
        'category_id',
        'title',
        'title_description',
        'description',
        'trening_method',
        'trening_type',
        'trening_img',
        'price',
        'price_prefix',
        'free_type',
        'free_description',
        'free_video_url',
    ];


}
