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

Route::get('user/{id}', function ($id) {
    return 'user ' .$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'post ' .$postId.'<br>'.' comment: '.$commentId;  
});
Route::get('user/{name?}', function ($name= 'hahaha') {
    return $name;
});
Route::prefix('admin')->group(function(){
    Route::get('user/{id}', function ($id){
    return 'user ' .$id;
    });
});
