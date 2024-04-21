<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'city', 'street_name', 'building_number', 'floor_number',
        'house_number', 'full_address', 'phone_number', 'service',
        'number_of_visits', 'time_visit', 'time_contract', 'time_first_visit',
        'payment_method'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
