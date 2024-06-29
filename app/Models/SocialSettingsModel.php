<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialSettingsModel extends Model
{
    use HasFactory;

    protected $table = 'social_setting';
    public $timestamps = false;
    protected $guarded = [];  
}
