<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});


//
//Route::get('/',[listController::class,'viewList'])->name('list');
//

Route::get('/',[HomeController::class,'logInView'])->name('logInPage');
Route::POST('/',[HomeController::class,'logInViewR'])->name('logInPageRequest');

Route::get('/home',[HomeController::class,'loadHomeView'])->name('homePage');
Route::get('/home',[HomeController::class,'loadAdminHomeView'])->name('homePageA');

Route::POST('/home/a',[HomeController::class,'loadAdminHomeViewR'])->name('homeAdminPageRequest');
Route::POST('/home',[HomeController::class,'loadHomeViewR'])->name('homePageRequest');


Route::get('/signUp',[HomeController::class,'signUpView'])->name('signUpPage');
Route::POST('/signUp',[HomeController::class,'signUpViewR'])->name('signUpPageRequest');



