<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
