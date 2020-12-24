<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    protected $fillable = ['title', 'place', 'event_day', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
