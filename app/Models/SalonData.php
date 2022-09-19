<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonData extends Model
{
    protected $table = 'salon_data';

    protected $casts = ['salon_category' => 'integer',];

    protected $fillable = ['salon_name', 'salon_info', 'salon_category', 'menu_id'];

     //クエリースコープ
    public function scopeOfSalon_Name($query, $salon_name){
        return $query->where('salon_name',$salon_name);
    }

}
