<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Faker\Generator as Faker;

class Employee extends Model
{

    protected $table='employees';
    protected $dataFormat='u';

const CREATED_AT = 'employess_date';
const UPDATED_AT = 'employess_lastdate';




protected $fillable =[
    'lastName',
    'firstName',
    'extension',
    'email',
    'office_code',
   'reports_to',
   'job_title',


];
protected $hidden =[
   

];

}

