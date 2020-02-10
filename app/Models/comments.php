<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public function users(){
        return $this->belongsTo('App\Models\users');
    }

    public function kala(){
        return $this->belongsTo('App\Models\kala');
    }
}
