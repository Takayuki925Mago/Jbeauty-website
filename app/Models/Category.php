<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'name',
    ];
 
    public function salons()
    {
        return $this->belongsToMany(Salon::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}
