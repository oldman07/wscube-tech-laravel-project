<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeginnerController;
use App\Http\Controllers\BeginnerSimpleController;
use App\Http\Controllers\IntermediateController;
use App\Http\Controllers\ExpertController;
use App\Models\Beginner;
use App\Models\Intermediate;



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





Route::get('/beginner-data', function () {
    $beginner  = Beginner::all();
    echo '<pre>';
    print_r($beginner);
 });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beginner', function () {

    return view('beginner');
});

Route::get('/beginner/{name}/{id?}', function ($name,$id = null) {

   $data = compact('name','id');
    return view('beginner')->with($data);
});



Route::get('/intermediate/{firstname}/{lastname?}', function ($firstname,$lastname = 'glow') {
    $lastname = 89;
    $data = compact('firstname','lastname');
    return view('intermediate')->with($data);
});





Route::resource('beginner',BeginnerController::class);
Route::get('/simple_index',[BeginnerSimpleController::class,'index'])->name('custom.route');
Route::get('/simple_data',[BeginnerSimpleController::class,'index']);
Route::post('/show_us',[BeginnerSimpleController::class,'show_us']);
Route::resource('intermediate',IntermediateController::class);
Route::resource('expert',ExpertController::class);


Route::post('/intermediate/show_data',[IntermediateController::class,'show_data']);
Route::post('/expert/expert_data',[ExpertController::class,'show_data']);


Route::get('/beginner_data', function(){
    echo 'me';

  });



   Route::get('/intermediate-data', function(){
      $intermediate = Intermediate::all();
      echo '<pre>';
      print_r($intermediate);
   });

   route::get('/expert/{product_name}/{image}/{price}',function ($product_name , $image , $price){
      $product_data = compact('product_name','image','price');
      return view('expert')->with($product_data);
  });


