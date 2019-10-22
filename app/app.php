<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class app extends Model
{
    public function appRelationship()
    {
        return $this->belongsTo('App\Category')->withDefault();
    }
}
