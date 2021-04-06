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
    Route::get('/listpostoffice', $controllerName . '@get_post_office')->name("listPostOffice");
    Route::get('/login', function(){
        return view('User.Login.index');
    })->name('login');
    Route::get('/register', function(){
        return view('User.Register.index');
    })->name('register');
    Route::get('/fastshipping', function () {
        return view('User.Other.Fastshipping');
    })->name('fastshipping');
    Route::get('/contact', function () {
        return view('User.Other.Contact');
    })->name('contact');
    Route::get('/expressdelivery', function () {
        return view('User.Other.ExpressDelivery');
    })->name('expressDelivery');
    Route::get('/thriftydelivery', function () {
        return view('User.Other.ThriftyDelivery');
    })->name('thriftyDelivery');
    Route::get('/roaddelivery', function () {
        return view('User.Other.RoadDelivery');
    })->name('roadDelivery');
    Route::get('/coddelivery', function () {
        return view('User.Other.CODDelivery');
    })->name('CODDelivery');
    Route::get('/carrental', function () {
        return view('User.Other.CarRental');
    })->name('carRental');
    Route::get('/introduce', function () {
        return view('User.Other.Introduce');
    })->name('introduce');
    Route::get('/fighting', function () {
        return view('User.Other.Fighting');
    })->name('fighting');
    Route::get('/onus', function () {
        return view('User.Other.Onus');
    })->name('onus');
    Route::get('/honest', function () {
        return view('User.Other.Honest');
    })->name('honest');
    Route::get('/billoflading', function () {
        return view('User.Other.BillOfLading');
    })->name('billOfLading');
    Route::get('/checkcharges', function () {
        return view('User.Other.CheckCharges');
    })->name('checkCharges');
    Route::get('/pricelist', function () {
        return view('User.Other.PriceList');
    })->name('priceList');
    Route::get('/news', function () {
        return view('User.Other.News');
    })->name('news');
});

$prefixUrl = 'admin';
$controller = 'admin';
Route::prefix($prefixUrl)->name($prefixUrl . ".")->group(function() use($controller){
    $controllerName = ucfirst($controller) . '\\' . ucfirst($controller) . 'Controller';
    Route::get('/home', $controllerName . '@get_list_user')->name("listUser");
    Route::get('/form', $controllerName . '@add_user')->name("addUser");
});

$prefixUrl = 'customer';
$controller = 'customer';
Route::prefix($prefixUrl)->name($prefixUrl . ".")->group(function() use($controller){
    $controllerName = ucfirst($controller) . '\\' . ucfirst($controller) . 'Controller';
    Route::get('/home', $controllerName . '@statistical')->name("statistical");
    Route::get('/logout', $controllerName . '@logout')->name("logout");
});