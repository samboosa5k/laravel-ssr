<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppGenre extends Model
{
    protected $table = 'app_genre';

    public function appRelationship()
    {
        return $this->belongsToMany('App\App')->withDefault();
    }
}
