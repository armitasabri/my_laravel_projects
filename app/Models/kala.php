<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kala extends Model
{
    public $table = "kala";

    public function category(){
        return $this->belongsTo('App\Models\category');
    }

    public function Images(){
        return $this->hasMany('App\Models\images','id','kalaid');
    }

    public function faktor_kala(){
        return $this->hasMany('App\Models\faktor_kala');
    }

    public function basket(){
        return $this->hasMany('App\Models\basket','id','kalaid');
    }

}
