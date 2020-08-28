<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Model\ProductObject;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        if($request->hasCookie('cart')){
            $cartList = unserialize($request->cookie('cart'));
        }
        if(isset($cartList)){

            $isExist = TRUE;
            foreach($cartList as $item){
                if(!$item->containsName($request->get('name'))){
                   $isExist = FALSE;
                }
                else{
                    $isExist = TRUE;
                break;
                }
            }
            if(!$isExist){
                $product = new ProductObject($request->get('name'), $request->get('price'), $request->get('url'));
                $cartList[] = $product;
            }
           
        }
        else{
            $product = new ProductObject($request->get('name'), $request->get('price'), $request->get('url'));
            $cartList[] = $product;
        }
        
        // return view('test')->with('cartList', $cartList)->withCookie('cart', serialize($cartList));
        return redirect(route('home'))->withCookie('cart', serialize($cartList)) ;
    }

    public function listCart(Request $request)
    {
        // $cartList = unserialize($request->cookie('cart'));
        $cartList = unserialize($_COOKIE['cart']);
        return view('checkout')->with('cartList', $cartList);
    }
}

