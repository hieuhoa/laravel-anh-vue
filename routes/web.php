<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/user',function(){
    return "chao user";
});
Route::get('/data',function(){
    $productlines= App\Models\Productline::all();

    foreach ($productlines as $productline ) {
        echo "<pre>";
        echo $productline->products;
        echo "</pre>";
        
        // foreach ($productline as) {
        //     # code...
        // }
    }
});

//Route::view('/test','welcome')
