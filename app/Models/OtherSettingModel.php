<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherSettingModel extends Model
{
    use HasFactory;

    protected $table="others_setting";
    public $timestamps = false;
    protected $guarded = [];  
}
