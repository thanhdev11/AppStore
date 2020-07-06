<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ruler', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function contact() {
        return $this->hasOne('App\Models\Contact', 'idUser', 'id');
    }
    
    public function customer() {
        return $this->hasOne('App\Models\Customer', 'idUser', 'id');
    }
    public function orders() {
        return $this->hasMany('App\Models\Order', 'idUser', 'id');
    }

}
