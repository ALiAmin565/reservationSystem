<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'user_id', 'city', 'street_name', 'building_number', 'floor_number',
        'house_number', 'full_address', 'phone_number', 'service_count',
        'weekly_visits', 'contract_duration', 'first_visit', 'hours_count', 'payment_method', 'active', 'transaction_id', 'period', 'total_price','nationality'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // update at format 
    public function getUpdatedAtAttribute($value)
    {
        return date('d-m-Y H:i:s', strtotime($value));
    }
}
