<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oderdetail extends Model
{
    protected $table ='oderdetails';

    protected $fillabe =[
        'orderNumber',
        'quantilyOdered',
        'priceEach',
        'orderLineNumber',
    ];
}
