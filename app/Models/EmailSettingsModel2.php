<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSettingsModel2 extends Model
{
    use HasFactory;

    protected $table = 'email_setting2';
    public $timestamps = false;
    protected $guarded = [];  
}
