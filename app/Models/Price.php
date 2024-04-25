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
            'person_price' => $request->person_price,
            'visit_price' => $request->visit_price,
            'hour_price' => $request->hour_price,
        ];
    }
}
