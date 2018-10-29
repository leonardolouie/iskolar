<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Cart;
use Redirect;
use App\Shopper;
use App\Order;
use Illuminate\Support\Str;

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
    'link_image' => $product->image,
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
      
      public function saveorder()
      {



      	  $shopper = new Shopper;


      	   $shopper->first_name = request('first_name');
      	   $shopper->middle_name = request('middle_name');
      	   $shopper->last_name = request('last_name');
      	   $shopper->email = request('email');
      	   $shopper->postal_code = request('postal_code');
      	   $shopper->country = request('country');
      	   $shopper->town = request('town');
      	   $shopper->province = request('province');
      	   $shopper->status = request('status');
      	   $shopper->contact_number = request('contact_no');
      	   $shopper->address = request('address');

      	   $shopper->save();

      	   $order = new order();

      	   $order->code_order = Str::random(8);
      	   $order->shopper_id = 1;
      	   $order->total = request('total');
      	   $order->subtotal = request('subtotal');
      	   $order->discount = request('discount');
      	   $order->delivery_type = request('delivery_type');
      	   $order->payment = 'cash on delivery';
      	   $order->transac_status = 'ok';
      	   $order->save();
      	   Cart::clear();


     
        return redirect('thankyou');
      }
      

      public function thankyou()
      {





      	return view('front.pages.thankyou');
      }

     public function removeitem($id)

     {




      Cart::remove($id);
      return Redirect::back()->with('sucess_message', 'Successfully Clear Cart');

     }

}
