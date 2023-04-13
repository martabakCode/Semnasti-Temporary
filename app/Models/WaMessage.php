<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'broadcast_id',
        'registrant_id',
        'phone_number',
        'message',
        'footer',
        'lists',
        'status',
        'failed_reason',
    ];
    protected $appends = [
        'with_button',
        'send_invoice',
    ];
    protected $casts = [
        'lists' => 'json'
    ];

    public function getWithButtonAttribute() {
        if($this->lists) {
            return true;
        }else {
            return false;
        }
    }

    public function getSendInvoiceAttribute() {
        return false;
    }

    public function registrant() {
        return $this->belongsTo(Registrant::class);
    }
}
