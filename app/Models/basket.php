<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class basket extends Model
{
    public $table = "basket";
    
   public function users(){
       return $this->belongsTo('App\Models\users','userid' ,'id');
   }

   public function kala(){
    return $this->belongsTo('App\Models\kala','kalaid','id');
}
}
