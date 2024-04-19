<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceManReservation extends Model
{
    use HasFactory;
    
    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }

    public function time()
    {
        return $this->belongsTo(DeterminedTime::class, 'time_id');
    }
}
