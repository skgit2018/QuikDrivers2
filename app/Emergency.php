<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    public $timestamps = false;
    protected $table = 'driver_emergency';
}
