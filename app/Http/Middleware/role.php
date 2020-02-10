<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Contracts\Auth\Factory as Auth;
use App\Models\users;
use App\Models\roles;
use Illuminate\Support\Facades\Auth;


class role
{

    // protected $auth;

    // public function __construct(Auth $auth)
    // {
    //     $this->auth = $auth;
    // }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // return $next($request);

       $user1 = Auth::user()->id;
       $user = users::find($user1);
       $Mainadmin=users::find(21);
       $admin2=users::find(22);
       $admin3=users::find(12);

    //    $role = Roles::find(1);

    //    $check= $admin->roles()->where('roles_id',1)->get();
    //    dd($user->id);die;
        if($user->id === $Mainadmin->id){
            return redirect('/home2');
        }elseif($user->id===$admin2->id){
            // echo "hi admin #2";
           return redirect('/home2');
        }elseif($user->id===$admin3->id){
             echo 'hi admin #3';
        }else{
            // echo "you are not an admin!";
            return redirect ('/home');
        }
        
        // $user = Auth::user();
        // if ($user->hasRole('admin')) {
        //     return redirect('admin-view');
        // }

        // if ($user->hasRole('user')) {
        //     return redirect('user-view');
        // } 
    
    
    }
}
