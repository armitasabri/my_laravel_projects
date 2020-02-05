<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Users extends Model

{


    use Notifiable;
    use SoftDeletes;
    protected $date=['deleted_at'];


    public $timestamps=false; //be in ravesh migan overwrite ke ba public moteghayere Model base ro seda zade va onja true inja ma falsesh kardim, ba in kar create_at va update_at hazf mishe
    
    public function Gender(){
        return $this->belongsTo('App\Models\gender','gender','id'); //gender to jadvale users vasl shode be jadvale gender ba column id
    }

    public function faktor(){
        return $this->hasMany('App\Models\faktor');
    }

    public function basket(){
        return $this->hasMany('App\Models\basket' ,'id','userid');
    }

    public function Address(){
        return $this->hasMany('App\Models\Address');
    }

    public function Roles(){
        return $this->belongsToMany('App\Models\Roles','roles_users');
    }

    public function takhfif(){
        return $this->hasMany('App\Models\takhfif');
    }

    protected $fillable=[
        'name','email','password'
    ];

      


}
