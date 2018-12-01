<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpcommingBooking extends Model
{
    public $timestamps = false;
    protected $table = 'driver_upcommingbooking';
}
