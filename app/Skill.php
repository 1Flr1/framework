<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function users(Request $request)
    {
        return $this->belongsToMany('App\User')->withPivot('level');
    }
}
