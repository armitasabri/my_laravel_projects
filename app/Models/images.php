<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    public $table = "images";
    
    public function kala(){
        return $this->belongsTo('App\Models\kala','kalaid','id');
    }
}
