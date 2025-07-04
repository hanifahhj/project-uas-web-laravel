<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // app/Models/Booking.php
public function menu()
{
    return $this->belongsTo(Menu::class);
}
}
