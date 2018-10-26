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
}
