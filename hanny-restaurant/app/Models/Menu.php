<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // app/Models/Menu.php
public function bookings()
{
    return $this->hasMany(Booking::class);
}
}
