<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Faker\Generator as Faker;

class Employee extends Model
{

    protected $table='employees';
    //protected $dataFormat='u';

const CREATED_AT = 'creation_date';
const UPDATED_AT = 'last_update';




protected $fillable =[
    'last_name',
    'first_name',
    'extension',
    'email',
    'office_code',
   'reports_to',
   'job_title',


];
protected $hidden =[
   

];

}

