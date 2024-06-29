<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSettingsModel extends Model
{
    use HasFactory;

    protected $table = 'payment_setting';
    public $timestamps = false;
    protected $guarded = [];  
}
