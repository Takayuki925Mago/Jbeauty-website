<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuData extends Model
{
    protected $table = 'menu_data';

    protected $fillable = ['menu_info'];

     //クエリースコープ
     public function scopeOfUser_Name($query, $menu_info){
        return $query->where('menu_info',$menu_info);
    }
}
