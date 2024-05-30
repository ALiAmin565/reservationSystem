<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserService extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'city', 'street_name', 'building_number', 'floor_number',
        'house_number', 'full_address', 'phone_number', 'reservation_id',
        'transaction_id','payment_method','first_time','active'
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
