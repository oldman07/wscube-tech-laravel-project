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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beginner/{name}/{id?}', function ($name,$id = null) {
    // echo $name;
   $data = compact('name','id');
    return view('beginner')->with($data);
});
Route::get('/intermediate/{firstname}/{lastname?}', function ($firstname,$lastname = 'glow') {
    $lastname = 89;
    $data = compact('firstname','lastname');
    return view('intermediate')->with($data);
});
route::get('/expert/{product_name}/{image}/{price}',function ($product_name , $image , $price){
    $product_data = compact('product_name','image','price');
    return view('expert')->with($product_data);
});