<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoSettingsModel extends Model
{
    use HasFactory;
    protected $table = 'seo_setting';
    public $timestamps = false;
    protected $guarded = [];  
}
