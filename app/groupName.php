<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupName extends Model
{
    protected $table = 'ofGroup';
    protected $fillable = ['groupName','description'];
}
