<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/search', function(App\Model\Products $products, Request $request){
    // $keyWord = $_GET['keyword'];
    $keyWord = $request['keyword'];
    $list = $products::all()->toArray();
    foreach($list as $item){
        if(Str::contains($item['name'], $keyWord)){
            $searchList[] = $item;
        }
    }
    // $searchList = $products::where('name', 'like', '%'. $keyWord . '%')->get();
    if(isset($searchList))
        return view('welcome_cart')->with('list', $searchList);
    else
        return 'Production not found';
})->name('search');

Route::post('/cart', "CartController@addToCart")->name("cart.store");

Route::post('/addProduction', 'ProductController@addProduction')->name('addProduction');


