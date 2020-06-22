<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable = [
        'products_codes',
        'product_name',
        'product_line',
        'product_scale',
        'product_vendor',
        'product_description',
        'quanitily_inStock',
        'buy_price',
        'MSRP',
    ];
}
