<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    // public $table = "role";

    public function permission(){
        return $this->belongsTo('App\Models\permission');
    }

    public function Users(){
        return $this->belongsToMany('App\Models\users');
    }
}
