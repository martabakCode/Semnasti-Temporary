<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaOtp extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'number'
    ];

    public static function boot()
    {
        parent::boot();
        
        $number = rand(99999, 999999);

        static::creating(function ($model) use ($number) {
            /** Number started with +62 */
            if (substr($model->phone_number, 0, 2) != 62) {
                $phone_number = substr($model->phone_number, 1);
                $model->phone_number = "62{$phone_number}";
            }

            $model->number = $number;
        });

        static::saving(function ($model) use ($number) {
            /** Number started with +62 */
            if (substr($model->phone_number, 0, 2) != 62) {
                $phone_number = substr($model->phone_number, 1);
                $model->phone_number = "62{$phone_number}";
            }
            
            if($model->isDirty('number')) {
                $model->number = $number;
            }
        });
    }
}
