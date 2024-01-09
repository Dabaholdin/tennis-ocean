<?php

namespace App\Models;

use App\Models\Cort;
use App\Models\User;
use App\Models\Trening;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TreningActiviti extends Model
{
    use HasFactory;
   
    protected $fillable = [    
            'id',
            'trening_id',
            'trening_title',
            'trening_type',
            'user_id',
            'cort_id',
            'cort_name',
            'price',
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

    protected $with = ['GetUser','TreningInfo','GetCort'];

    public function TreningInfo(){
        return $this->belongsTo(Trening::class,'trening_id');
    }

    public function GetUser(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function GetCort(){
        return $this->belongsTo(Cort::class,'cort_id');
    }
}
