<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;


    protected $fillable = ['name'];
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
            'name' => $request->name
        ];
    }
}
