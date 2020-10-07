<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->morphedByMany('App\Model\User','phoneable');
    }

    public function ads()
    {
        return $this->morphedByMany('App\Model\Ad','phoneable');
    }
}
