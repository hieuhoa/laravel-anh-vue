<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class oderdetail extends Model
{
    protected $table ='oderdetails';

    protected $fillabe =[
        'orderNumber',
        'quantilyOdered',
        'priceEach',
        'orderLineNumber',
    ];
}
