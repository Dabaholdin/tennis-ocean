<?php

namespace App\Models;

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
    public function TreningInfo(){
        return $this->belongsTo(Trening::class);
    }
}
