<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class Registrant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code',
        'email',
        'name',
        'origin',
        'phone_number',
        'payment_status',
        'payment_at',
        'payment_confirm_by',
        'arrival_confirmation',
        'arrival_status',
    ];
    public function waOtp(){
        return $this->hasOne(WaOtp::class, 'phone_number', 'phone_number');
    }
    public function waMessage(){
        return $this->hasMany(WaMessage::class, 'registrant_id');
    }
    public static function boot()
    {
        parent::boot();

        $data_count = Registrant::count() + (1000+rand(999, 9999));
        $code = "SM-$data_count";

        static::creating(function ($model) use ($code) {
            /** Number started with +62 */
            if (substr($model->phone_number, 0, 2) != 62) {
                $phone_number = substr($model->phone_number, 1);
                $model->phone_number = "62{$phone_number}";
            }

            $model->code = "#$code";
        });

        static::saving(function ($model) use ($code) {
            /** Number started with +62 */
            if (substr($model->phone_number, 0, 2) != 62) {
                $phone_number = substr($model->phone_number, 1);
                $model->phone_number = "62{$phone_number}";
            }

            if($model->isDirty('code')) {
                $model->code = "#$code";
            }
        });

        static::updating(function ($model) use ($code) {
            /** Number started with +62 */
            if (substr($model->phone_number, 0, 2) != 62) {
                $phone_number = substr($model->phone_number, 1);
                $model->phone_number = "62{$phone_number}";
            }
        });
    }
}
