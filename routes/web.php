<?php

use App\Models\Roles;
use App\Models\address;
use App\Models\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'frontController@index')->name('home');
Route::get('/category', 'productController@index')->name('category');
Route::get('/singleproduct', 'productController@productview')->name('singleproduct');
Route::get('/product_checkout', 'productController@productcheckout')->name('productcheckout');
Route::get('/shoppingcart', 'ShoppingcartController@index')->name('cart');
Route::get('/addtoshoppingcart/{id}', 'ShoppingcartController@addkala')->name('addcart');
Route::get('/confirmation', 'InvoiceController@index')->name('faktor');
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/order_tracking', 'OrdertrackingController@index')->name('tracking');
Route::get('/contact_with_us', 'frontcontroller@contact')->name('contact');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home1');





Route::get('/user/all', function () {
    return users::all();
});

Route::get('/user/find', function () {
    return users::find(2);
});

Route::get('/user/where', function () {
    return users::where('id', '>', 10)->firstorfail();
    // return users::where('id',6)->orderBy('')->take()->get(); //take hamon limit va mahdod konandas
});

Route::get('/user/insert', function () {
    $user = new users();
    $user->name = 'ali';
    $user->email = 'krbkb@gmail.com';
    $user->password = '123!@##';
    $user->save();
});

Route::get('/user/insert2', function () {
    users::create([
        'name' => 'hasan',
        'email' => 'krvkrv@gmail.com',
        'password' => 'evervjvj!!'
    ]);
    // to model user omadin satre $fillable ro ezaf kardim
});


Route::get('/user/update/{id}', function ($id) {

    $user = users::find($id);
    $user->name = 'akbar';
    $user->email = 'rgjgjg@kvr.com';
    $user->save();
});

Route::get('/user/update2/{id}', function ($id) {

    users::where('id', $id)->update([
        'name' => 'akbar',
        'email' => 'rgjgjg22@kvr.com',
    ]);
});

Route::get('/user/delete/{id}', function ($id) {

    $user = users::find($id);
    $user->delete();
});


Route::get('/user/delete2/{id}/{id2}', function ($id, $id2) {

    users::destroy([$id, $id2]);
    // users::destroy($id); /// mesle khate bala mishe chandin  id dad behesh
});

Route::get('/user/delete3/{id}', function ($id) {

    users::where('id', $id)->delete();
});


Route::get('/user/softdeleted/{id}', function ($id) {

    users::where('id', $id)->delete();
    ///in soft delete mikone yani record hanoz to database hast va field deleted_at por mishe 
});



Route::get('/user/softdelete/all', function () {

    return  users::onlyTrashed()->get();
});



Route::get('/mysoftdelete', 'productcontroller@trashed')->name('trash');



Route::get('/user/forcedelete/{id}', function ($id) {

    $users = users::where('id', $id);
    $users->forcedelete();
});


Route::get('/user/{id}/addresses', function ($id) {

    $addresses = address::find($id);
    //  foreach($addresses as $address){
    //    echo $address->users['name'];
    //  }
    return $addresses->users->name;
});


//  Route::get('/address/{id}/user', function ($id){

//   $useraddress= Users::find($id)->Address;
//    dd($useraddress) ;
//    });


Route::get('/address/{id}/user', function ($id) {

    $useraddress = Users::find($id);
    // $useraddress=address::find($id);
    // return $useraddress=$useraddress->users->name;
    return $useraddress = $useraddress->address[0]->useraddress;

    //  dd($useraddress) ;
});


Route::get('/user/attach', function () {

    $user = Users::find(1);
    $role = Roles::find(2);
    // var_dump($role);die;
    $user->Roles()->attach($role->id, ['created_at' => '2020-02-05T15:54:21+00:00', 'updated_at' => '2020-02-05T15:54:21+00:00']);
});
