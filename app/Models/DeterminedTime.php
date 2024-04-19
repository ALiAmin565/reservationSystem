<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeterminedTime extends Model
{
    use HasFactory;

    protected $table='determined_time';

    public function reservations()
    {
        return $this->hasMany(ServiceManReservation::class);
    }
}
