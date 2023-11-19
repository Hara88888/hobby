<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HobbyController;

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

Route::get('/',[HobbyController::class,'home']);
Route::get('/user/new',[HobbyController::class,'user_new']);
Route::get('/hobby_questionnaire',[HobbyController::class,'hob']);
Route::get('/plan',[HobbyController::class,'plan']);
Route::get('/plan/hobby',[HobbyController::class,'plan_hobby']);
Route::get('/plan/hobby/success',[HobbyController::class,'plan_hobby_success']);
Route::get('/plan/feeling',[HobbyController::class,'plan_feeling']);
Route::post('/user/new',[HobbyController::class,'store']);
