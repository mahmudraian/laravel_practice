<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/{name?}',function($name=null){
//     $data= compact('name');
//     return view('Home')->with($data);
// });

Route::get('/' ,[DemoController::class, 'index']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);

