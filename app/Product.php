<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'id_product';
    protected $fillable = [

        'name',
        'description',
        'image',
        'price',
        'typeproduct_id'

    ];
}
