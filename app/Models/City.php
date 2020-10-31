<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function ads()
    {
        return $this->morphedByMany('App\Models\Ad','cityable');
    }

    public function users()
    {
        return $this->morphedByMany('App\Models\User','cityable');
    }

}
