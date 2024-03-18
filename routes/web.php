<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
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
Route::resource('product',ProductController::class);    
Route::get('/', function(){
    return view("welcome");
});
// Route::group(['prefix' => 'public'],function (){
//     Route::get('/{name?}', function ($name="welcome") {
//         return view($name);
//     });
// });
// Route::get('/{age?}', function ($age=18) {
//     return "Enough";
// })->middleware('checkAge');


//use controllers
Route::get('/{name?}', [WelcomeController::class,'show']);




// Route::post('/public/login', function ($name="",$pass=""){
//     return view('welcome');
// })->middleware("login");

Route::post('/process_signup', [WelcomeController::class,'process_signup']);


