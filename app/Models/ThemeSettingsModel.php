<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeSettingsModel extends Model
{
    use HasFactory;

    protected $table = 'theme_setting';
    public $timestamps = false;
    protected $guarded = [];  
}
