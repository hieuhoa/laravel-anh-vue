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
//     protected function productlines()
// {
//     return $this->belongsTo(Productline::class,'product_line');

// }
    protected function productlines()
{
    return $this->hasOne(Productline::class,'product_line');

}
    protected function oderdetails()
{
    return $this->hasMany(Oderdetail::class,'product_line');

}
  
  

//     protected function products()
// {
//     return $this->belongsTo(Productline::class);

// }

//     protected function orders()
// {
//     return $this->belongsToMany(order::class);
// }
//     protected function oderdetails()
// {
//     return $this->hasMany(oderdetail::class);
// }
}
