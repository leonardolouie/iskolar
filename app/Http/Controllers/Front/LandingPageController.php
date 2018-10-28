<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;


class LandingPageController extends Controller
{
    //





    public function index()
    {

        $products = Product::where('status', 1)->take(8)->inRandomOrder()->get();
       
    	return view('front.pages.landingpage', compact('products'));
    }



    public function shop()
    {

        $products = Product::where('status', 1)->get();
        $count = Product::where('status', 1)->count();
     	return view('front.pages.shop', compact('products' , 'count'));

    } 



    public function blog()
    {



    	return view('front.pages.blog');
    }

    public function contact()


    {



     	return view('front.pages.contact');
    }


    public function productdetails($id)

    {

      $product = Product::where('id', $id)->get();


      return view('front.pages.product_details',compact('product'));

         

    }


}
