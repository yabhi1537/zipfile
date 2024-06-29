<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSettingsModel2 extends Model
{
    use HasFactory;

    protected $table = 'payment_setting2';
    public $timestamps = false;
    protected $guarded = [];  
}
