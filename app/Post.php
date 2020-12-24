<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // 検索機能
    public function scopeSearchingPost($query,$keyword) {
        return $query->where('post_title', 'like', "%$keyword%");
    }
}
