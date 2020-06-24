<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oderdetail extends Model
{
    protected $table ='oderdetails';

    protected $fillabe =[
        'order_number',
        'product_code',
        'quantily_odered',
        'price_each',
        'orderLine_number',
    ];
    
    protected function productlines()
{
    return $this->hasOne(Productline::class);
}
    protected function oders()
{
    return $this->hasOne(Oder::class);
}
    
//     protected function products()
// {
//     return $this->hasMany(Product::class);
// }
//     protected function oders()
// {
//     return $this->hasMany(oders::class);
// }   
}
