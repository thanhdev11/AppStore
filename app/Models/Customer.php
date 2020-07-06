<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    
    protected $fillable = [
        'idUser', 'address', 'email', 'phone'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User', 'idUser', 'id');
    }
}
