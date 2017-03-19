<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected $fillable = ['name', 'type'];

   public function parts()
   {
      return $this->hasMany('App\Part');   
   }
}
