<?php

// Order n-n Product: nen can trung gian la OrderDetai

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    
    protected $fillable = [
        'code_order', 'idUser', 'name', 'addresss', 'email', 'phone', 'monney', 'message', 'status'
    ];

    public function orderDetails() {
        return $this->hasMany('App\Models\OrderDetail', 'idOrder', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'idUser', 'id');
    }

}
