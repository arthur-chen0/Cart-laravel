<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Model\Products;

class ProductController extends Controller
{
    public function addProduction(Request $request)
    {
        $request->validate([
            'image' => ['required', 'mimes:jpg,jpeg,bmp,png'],
        ]);

        $parameters = request()->all();
   
        if (request()->hasFile('image'))
        {
            $imageURL = request()->file('image')->store('public');
            $parameters['image'] = substr($imageURL, 7);
            // return asset('storage/' . $parameters['image']);
        }
        $create = Products::create([ 
                    'name' => $request['name'],
                    'price' => $request['price'],
                    'url' => 'storage/' . $parameters['image'],
        ]);
        $result = $create->toArray();
        return view('addProduction');
        // if ($parameters['image'] != null){
        //     $result['imageURL'] = asset('storage/' . $parameters['image']);
        //     }
        //     if ($create) {
        //         return response()->json($result, 200);
        // }
    }
}