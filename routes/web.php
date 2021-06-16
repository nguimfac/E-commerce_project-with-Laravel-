<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/newProduct', function () {
    return view('newProduct');
});


Route::get('/test', function () {
    return view('flash_message');
});

Route::get('/message', function () {
    return view('message');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/logout', function () {
   session()->forget('user');
    return redirect('login');
});

Route::post('/newProduct',[ProductController::class,'create']);
Route::post('/submitdata',[ProductController::class,'testfunction']);
Route::view('/addUser', 'addUser');
Route::view('/index', 'index');
Route::view('/newProduct', 'newProduct')->middleware('protectedPage');
Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);
Route::get('/admin',[ProductController::class,'index2']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('search',[ProductController::class,'search']);
Route::post('/add_to_card',[ProductController::class,'AddToCard']);
Route::post('/add_comment',[ProductController::class,'AddComm']);
Route::get('/cartlist',[ProductController::class,'cartlist']);
Route::get('/fetchComment',[ProductController::class,'fetchComment']);
Route::get('/ordernow',[ProductController::class,'ordernow']);
Route::get('removecart/{id}',[ProductController::class,'removecart']);
Route::post('orderplace',[ProductController::class,'orderplace']);
Route::get('myorders',[ProductController::class,'myorders']);
Route::post('/addUser',[UserController::class,'addUser']);
Route::post('/index',[UserController::class,'create']);
Route::get('remove_to_list/{id}',[ProductController::class,'remove_to_list']);



