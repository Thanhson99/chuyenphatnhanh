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
    return view('User.Home.index');
})->name('home');

//login google
Route::get('callback/{driver}', 'User\LoginController@callback_social')->name('callback.social');
Route::get('redirect/{driver}', 'User\LoginController@redirect_social')->name('login.provider');

//login facebook
Route::get('redirect/facebook', 'User\LoginFBController@redirectToProvider')->name('loginfb.provider');
Route::get('callback/facebook', 'User\LoginFBController@handleProviderCallback')->name('callbackfb.social');

$prefixUrl = 'user';
$controller = 'user';
Route::prefix($prefixUrl)->name($prefixUrl . '.')->group(function() use($controller){
    $controllerName = ucfirst($controller) . '\\' . ucfirst($controller) . 'Controller';
    Route::post('/login', $controllerName . '@login')->name('postLogin');
    Route::post('/register', $controllerName . '@register')->name('postRegister');
    Route::get('/login', function(){
        return view('User.Login.index');
    })->name('login');
    Route::get('/register', function(){
        return view('User.Register.index');
    })->name('register');
});

Route::prefix('admin')->group(function(){
    Route::get('/index', 'Admin\AdminController@index');
});

