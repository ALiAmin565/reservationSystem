<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'city', 'street_name', 'building_number', 'floor_number',
        'house_number', 'full_address', 'phone_number', 'reservation_id',
        'transaction_id','payment_method','first_time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reservation()
    {
        return $this->belongsTo(ServiceManReservation::class, 'reservation_id');
    }
}
