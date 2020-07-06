<?php

// Order n-n Product: nen can trung gian la OrderDetai

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    protected $fillable = [
        'name', 'slug', 'description', 'quantity', 'price', 'promotional', 'idCategory', 'idProductType', 'status', 
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category', 'idCategory', 'id');
    }

    public function productType() {
        return $this->belongsTo('App\Models\ProductType', 'idProductType', 'id');
    }
}
