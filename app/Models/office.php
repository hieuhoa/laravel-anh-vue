<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class office extends Model
{
protected $table ='offices';


protected $fillabe = [
    'city',
    'phone',
    'addressLine1',
    'addressLine2',
    'state',
    'country',
    'postalCode',
    'territory',

 ];



}
