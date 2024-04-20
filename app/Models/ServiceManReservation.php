<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceManReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'price',
        'discount',
        'number_of_visits',
        'number_of_man_services',
        'period_id',
        'time_id',
        'active'
    ];

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }

    public function time()
    {
        return $this->belongsTo(DeterminedTime::class, 'time_id');
    }
}
