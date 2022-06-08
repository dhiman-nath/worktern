<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    //
    public function basic_package()
    {
        return $this->hasOne('App\BasicPackage');
    }
}
