<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    public function Interviews()
    {
        return $this->hasMany('App\Interview');
    }

    public function Recruits()
    {
        return $this->hasMany('App\Recruit');
    }

    public function Entrys()
    {
        return $this->hasMany('App\Entry');
    }
}
