<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
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

Route::get('/',[homeController::class,'index']);
Route::POST('/flyer',[homeController::class,'flyer']);

Route::get('/vp',[VideoController::class,'index']);
Route::get('/login',function(){
    return view('login');
});

Route::POST('/login',[LoginController::class,'login']);

// Route::get('/', function () {
//     return view('pages.homes');
// });
