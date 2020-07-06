<?php

// Order n-n Product: nen can trung gian la OrderDetai
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetail';
    
    protected $fillalble = [
        'idOrder', 'idProduct', 'quantity', 'price',
    ];

    public function products() {
        return $this->belongsTo('App\Models\Product', 'idProduct', 'id');
    }

    public function order() {
        return $this->belongsTo('App\Models\Order', 'idOrder', 'id');
    }
}
