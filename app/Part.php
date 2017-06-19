<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function relic()
    {
        return $this->belongsTo('App\Relic');
    }
}
