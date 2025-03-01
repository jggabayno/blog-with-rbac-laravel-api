<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'LoginController@index');
Route::post('/g', 'RegisterController@index');
Route::put('/resetpassword/{user}', 'ResetPasswordController@update');

Route::get('/posts', 'PostController@index');

Route::group(['middleware' => 'auth:api'], function() {

        Route::get('/accesses', 'AccessController@index');
        Route::post('/accesses', 'AccessController@store');
        Route::put('/accesses/{access}', 'AccessController@update');
        Route::delete('accesses/{access}', 'AccessController@destroy');

        Route::get('/users/{users}/posts', 'UserPostController@index');

        Route::put('/users/{user}', 'UserController@update');
        Route::delete('/users/{user}', 'UserController@destroy');
        Route::get('/users/access', 'UserAccessController@index');

        Route::get('/roleAccesses', 'RoleAccessController@index');


        Route::post('/posts', 'PostController@store');
        Route::put('/posts/{post}', 'PostController@update');
        Route::delete('/posts/{post}', 'PostController@destroy');

        Route::post('/posts/{post}/likes', 'PostLikeController@store');
        Route::delete('/posts/{post}/likes', 'PostLikeController@destroy');

        Route::post('/posts/{post}/comments', 'PostCommentController@store');
        Route::delete('/posts/{post}/comments', 'PostCommentController@destroy');

        Route::get('/post/comment/notifications', 'PostNotificationController@commentNotifications');
        Route::get('/post/like/notifications', 'PostNotificationController@likeNotifications');
});
