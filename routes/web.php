<?php
use Illuminate\Support\Facades\Route;
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
// Route::get('/hello', function () {
//     return view('hello');
// });
// Route::get('/user',function(){
//     return "chao user";
// });
// Route::get('/data',function(){
//     $productlines= App\Models\Productline::all();

//     foreach ($productlines as $productline ) {
//         echo "<pre>";
//         echo $productline->products;
//         echo "</pre>";
        
//         // foreach ($productline as) {
//         //     # code...
//         // }
//     }
// });

//Route::view('/test','welcome')

// Route::get('/user','UserController@UserView');
// Route::group(['namespace'=>'User'],function(){
    
//     Route::get('/profile','UserController@UserView')->name('a');
//     Route::get('/register','UserController@UserRegister');
// });

// Route::get('/contact','UserController@form');
// Route::post('users','UserController@store')
// ->name('confim');


// Route::get('/update','UserController@wupdate');
// Route::put('users','UserController@update');








// Route::get('register','RegisterController@register');

Route::resources([
    'user' => 'UserController',
    // 'posts' => 'PostController'
]);