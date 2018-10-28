<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Cart;
use Redirect;

class CartController extends Controller
{
    //




    public function store(Request $request)
    { 
        



      
       $product = Product::find(request('id'));

     $itemCondition2 = new \Darryldecode\Cart\CartCondition(array(
    'name' => 'discount',
    'type' => 'promo',
    'target' => 'total',
    'value' => '-'.$product->discount,
     ));


     Cart::add(array(
    'id' => $product->id ,
    'name' => $product->product_name,
    'price' => $product->price,
    'quantity' => request('quantity'),
     'image' => $product->image,
    'attributes' => array(),
    'conditions' => [$itemCondition2]
		));

       



	return Redirect::back()->with('sucess_message', 'Successfully Added to Cart');


    }



    public function checkout()
    {





        return view('front.pages.checkout');
    }

    public function clearcart()
    {



           Cart::clear();
           return Redirect::back()->with('sucess_message', 'Successfully Clear Cart');


    }

  

}
