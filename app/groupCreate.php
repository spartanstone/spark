<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupCreate extends Model
{
    protected $table = 'ofGroupProp';
    protected $fillable = ['groupName','name','propValue'];
}

