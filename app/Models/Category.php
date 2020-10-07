<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;
use App\Models\Ad;
class Category extends Model
{
    use HasFactory;

    public function subcategory()
    {
     return $this->hasMany('App\Models\Subcategory');
    }

    public function ad()
    {
        return $this->hasManyThrough('App\Models\Ad','App\Models\Subcategory');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
