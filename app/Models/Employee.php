<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employess';
    protected $dataFormat='';


const CREATED_AT = 'employess_date';
const UPDATED_AT = 'employess_lastdate';




protected $fillable =[
    'lastName',
    'firstName',
    'extension',
    'email',



];
protected $hidden =[
    'password',
    'officeCode',
    'remember_token',
    'reportsTo',


];

}

