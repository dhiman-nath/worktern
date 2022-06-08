<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicPackage extends Model
{
    //
    public function gig()
    {
        return $this->belongsTo('App\Gig');
    }
}
