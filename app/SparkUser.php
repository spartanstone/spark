<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SparkUser extends Model
{
    protected $table = 'ofUser';
    protected $fillable = ['username','name','plainPassword','email'];

}
