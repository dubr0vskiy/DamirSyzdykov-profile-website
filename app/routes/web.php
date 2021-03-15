<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
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
Route::get('/Portfolio', function () {
    return view('Portfolio');
});

Route::get('/user', function () {
    return view('user');
});
});
Route::get('post/create',function(){
	DB::table('post')->insert([
		'title'=>'My lab4',
		'body' =>'It is my lab4 from laravel, I use migration and model'
	]);
});
Route::get('post', [BlogController::class, 'index']);