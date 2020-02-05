<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    // public $table = "Roles";

    public function permission(){
        return $this->belongsTo('App\Models\permission');
    }

    public function Users(){
        return $this->belongsToMany('App\Models\Users','roles_users');
    }
}
