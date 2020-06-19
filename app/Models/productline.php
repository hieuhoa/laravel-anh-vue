<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productline extends Model
{
    protected $table ='productlines';
    



protected $fillable =[
    'textDescription',
    'htmlDescription'

];
protected $hidden =[
    
];


}