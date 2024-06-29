<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalizationSettingModel extends Model
{
    use HasFactory;
    protected $table = 'localization_details_setting';
    public $timestamps = false;
    protected $guarded = [];  

}
