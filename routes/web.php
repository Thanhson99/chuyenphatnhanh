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
    Route::get('/news', $controllerName . '@list_news')->name('news');
    Route::get('/showNews', $controllerName . '@show_news')->name('showNews');
    Route::post('/getOrders', $controllerName . '@show_orders')->name("showOrders");
    Route::post('/getRates', $controllerName . '@show_rates')->name("showRates");
});

$prefixUrl = 'admin';
$controller = 'admin';
Route::prefix($prefixUrl)->name($prefixUrl . ".")->group(function() use($controller){
    $controllerName = ucfirst($controller) . '\\' . ucfirst($controller) . 'Controller';
    Route::get('/home', $controllerName . '@get_list_user')->name("listUser");
    Route::get('/formAddUser', $controllerName . '@add_user')->name("addUser");
    Route::post('/saveUser', $controllerName . '@save_user')->name("saveUser");
    Route::post('/deleteUser', $controllerName . '@delete_user')->name('deleteUser');
    Route::get('/listNews', $controllerName . '@get_news')->name("listNews");
    Route::get('/formAddNews', $controllerName . '@add_news')->name("addNews");
    Route::post('/saveNews', $controllerName . '@save_news')->name("saveNews");
    Route::post('/deleteNews', $controllerName . '@delete_news')->name('deleteNews');
    Route::get('/listTransportationType', $controllerName . '@get_transportation_type')->name("listTransportationType");
    Route::get('/formTransportationType', $controllerName . '@add_transportation_type')->name("addTransportationType");
    Route::post('/saveTransportationType', $controllerName . '@save_transportation_type')->name("saveTransportationType");
    Route::post('/deleteTransportationType', $controllerName . '@delete_transportation_type')->name('deleteTransportationType');
    Route::get('/listRates', $controllerName . '@get_rates')->name("listRates");
    Route::get('/formAddRates', $controllerName . '@add_rates')->name("addRates");
    Route::post('/saveRates', $controllerName . '@save_rates')->name("saveRates");
    Route::post('/deleteRates', $controllerName . '@delete_rates')->name('deleteRates');
    Route::get('/listOrders', $controllerName . '@get_orders')->name("listOrders");
    Route::get('/formAddOrders', $controllerName . '@add_orders')->name("addOrders");
    Route::post('/getInfoOrders', $controllerName . '@get_info_orders')->name("getInfoOrders");
    Route::post('/saveOrders', $controllerName . '@save_orders')->name("saveOrders");
    Route::post('/deleteOrders', $controllerName . '@delete_orders')->name('deleteOrders');
    Route::post('/districts', $controllerName . '@show_districts')->name("showDistricts");
    Route::post('/wards', $controllerName . '@show_wards')->name("showWards");
    Route::get('/statistical', $controllerName . '@show_statistical')->name("showStatistical");
    Route::get('/logout', $controllerName . '@logout')->name("logout");
});

$prefixUrl = 'customer';
$controller = 'customer';
Route::prefix($prefixUrl)->name($prefixUrl . ".")->group(function() use($controller){
    $controllerName = ucfirst($controller) . '\\' . ucfirst($controller) . 'Controller';
    Route::get('/home', $controllerName . '@statistical')->name("statistical");
    Route::get('/infomation', $controllerName . '@changeInfo')->name('changeInfo');
    Route::get('/showOrder', $controllerName . '@show_orders')->name('showOrders');
    Route::get('/addOrder', $controllerName . '@add_orders')->name('addOrders');
    Route::post('/saveOrders', $controllerName . '@save_orders')->name("saveOrders");
    Route::post('/getInfoOrders', $controllerName . '@get_info_orders')->name("getInfoOrders");
    Route::post('/searchOrders', $controllerName . '@search_orders')->name('searchOrders');
    Route::get('/delivered', $controllerName . '@delivered')->name('delivered');
    Route::get('/areDelivered', $controllerName . '@are_delivered')->name('areDelivered');
    Route::get('/cancelled', $controllerName . '@cancelled')->name('cancelled');
    Route::get('/statisticalOrder', $controllerName . '@statistical_order')->name('statisticalOrder');
    Route::post('/evaluate', $controllerName . '@evaluate')->name('evaluate');
    Route::get('/showEvaluate', $controllerName . '@show_evaluate')->name('showEvaluate');
    Route::get('/logout', $controllerName . '@logout')->name("logout");
    Route::post('/saveInfo', $controllerName . '@saveInfo')->name("saveInfo");
});

Route::get('/page-not-found', function () {
    return view('page_not_found');
})->name('page_not_found');

Route::fallback(function () {
    return view('page_not_found');
});