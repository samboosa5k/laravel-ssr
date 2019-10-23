<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class app extends Model
{
    public $timestamps = false;
    public function categories()
    {
        return $this->belongsTo('App\Category')->withDefault();
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre', 'app_genre');
    }
}
