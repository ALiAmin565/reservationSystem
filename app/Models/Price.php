<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $guarded = [];


    public static function createModel($request)
    {
        return self::create(self::data($request));
    }
    public static function updateModel($request, $row)
    {
        return $row->update(self::data($request));
    }
    public static function data($request)
    {
        return [
            'person_price' => 1,
            'visit_price' =>1,
            'hour_price' => $request->hour_price,
        ];
    }
}
