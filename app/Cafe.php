<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    //

    public function reservations()
    {
        return $this->hasMany('App\reservation');
    }


}
