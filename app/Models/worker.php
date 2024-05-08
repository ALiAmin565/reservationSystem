<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    use HasFactory;

    protected $fillable = ['persons_number_morning','persons_number_evening'];
    
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
            'persons_number_morning' => $request->persons_number_morning,
            'persons_number_evening' => $request->persons_number_evening,
        ];
    }
}
