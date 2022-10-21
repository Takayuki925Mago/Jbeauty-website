<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'salon_name',
        'salon_info',
        'salon_other',
        'salon_instagram',
        'salon_facebook',
        'salon_twitter',
        'salon_tiktok',
        'salon_youtube',
        'other',
        'salon_logo',
    ];
 
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function professionals() {
        return $this->hasMany(Professional::class);
    }

    public function menus() {
        return $this->hasMany(Menu::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
