<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relic extends Model
{
    public function parts()
    {
        return $this->hasMany('App\Part');
    }
}
