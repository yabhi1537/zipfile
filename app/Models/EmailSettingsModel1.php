<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSettingsModel1 extends Model
{
    use HasFactory;

    protected $table = 'email_setting1';
    public $timestamps = false;
    protected $guarded = [];  
}
