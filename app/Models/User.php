<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [    
            'role_id',
            'firstname',
            'lastname',
            'middlename',
            'email',
            'password',
            'login',
            'phone',
            'birthdate',
            'gender',
            'avatar',
            'email_verified_at',
            'verivi_code',
            'verivied',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'birthdate'=>'date',
        
    ];

    protected $dates=[
        'birthdate',
    ];

    protected $attributes =[
      
    ];

    public function Role()
    {
        return $this->belongsTo(Role::class);
    }
    public function childrens() {
        return $this->hasMany(UserChildren::class);
    }
}
