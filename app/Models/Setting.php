<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'software_name',
        'software_description',
        'software_logo',
        'software_desktop_banners_1',
        'software_desktop_banners_2',
        'software_desktop_banners_3',
        'software_mobile_banners_1',
        'software_mobile_banners_2',
        'software_mobile_banners_3',
        'panel_color_1',
        'panel_color_2',
        'panel_color_3',
        'logintype',
    ];
}
