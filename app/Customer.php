<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'street', 'city', 'state', 'zipcode', 'home_phone', 'work_phone', 'email'];
}
