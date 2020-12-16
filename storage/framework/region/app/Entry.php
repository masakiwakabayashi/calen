<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // ユーザ関連処理
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
