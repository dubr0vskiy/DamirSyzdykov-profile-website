<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\SendingController;	
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
/*pRoute::get('post/add',function(){
	DB::table('post')->insert([
		'title'=>'My lab4',
		'body' =>'It is my lab4 from laravel, I use migration and model'
	]);
});
Route::get('post', [BlogController::class, 'index']);
Route::get('post/create', function(){
	return view('blog.create');
});
Route::post('post/create', [BlogController::class,'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);*/
Route::get('post', [SendingController::class, 'index']);
Route::get('post/create', function(){
	return view('sending.create');
});
Route::post('post/create', [SendingController::class,'store'])->name('add-post');

Route::get('/uploadfile', 'SendingController@index');
Route::post('/uploadfile', 'SendingController@showUploadFile');

Route::get('/multiuploads', 'UploadController@uploadForm');
Route::post('/multiuploads', 'UploadController@uploadSubmit');

Route::get('mail/send', 'MailController@send');
