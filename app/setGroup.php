<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setGroup extends Model
{
    protected $table = 'ofGroupUser';
    protected $fillable = ['groupName','username','administrator',];

}
