<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = "address";

    public function Users(){
        return $this->belongsTo('App\Models\Users');
    }

    public function faktor(){
        return $this->hasMany('App\Models\faktor');
    }

}
