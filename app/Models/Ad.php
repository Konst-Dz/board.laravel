<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\Category;

class Ad extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory');
    }

    public function user()
    {
       return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->hasOneThrough('App\Models\Category','App\Models\Subcategory','category_id','');
    }

    public function phones()
    {
        return $this->morphToMany('App\Models\Phone','phoneable');
    }

    public function cities()
    {
        return $this->morphMany('App\Models\City','cityable');
    }

}
