<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'idUser', 'message'
    ];

    public function user() {
        return $this->belongsTo('App\Models\Users', 'idUser', 'id');
    }
}
