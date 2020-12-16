<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
}
