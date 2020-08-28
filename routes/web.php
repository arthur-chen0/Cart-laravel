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

Route::get('/', function (App\Model\Products $products) {
    $list = $products::all()->toArray();
    return view('welcome_cart')->with('list', $list);
})->name('home');

Route::get('/checkout', "CartController@listCart")->name('checkout');

Route::get('/add', function (){
    return view('addProduction');
})->name('add');


