<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Ad;

class Subcategory extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function ad()
    {
        return $this->hasMany('App\Models\Ad');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
