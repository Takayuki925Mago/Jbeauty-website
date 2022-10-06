<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'professional_name',
    ];
 
    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
