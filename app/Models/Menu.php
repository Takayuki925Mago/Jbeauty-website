<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'main_image',
        'path',
      ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

