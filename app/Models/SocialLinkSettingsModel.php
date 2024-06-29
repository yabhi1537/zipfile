<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLinkSettingsModel extends Model
{
    use HasFactory;

    protected $table = 'social_link_setting';
    public $timestamps = false;
    protected $guarded = [];  
}
