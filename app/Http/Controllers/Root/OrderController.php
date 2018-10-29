<?php

namespace App\Http\Controllers\Root;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

use App\Order;
class OrderController extends Controller
{
    




    public function index()
    {

        $result = Order::all();

    	return view('root.orders.index' , compact('result'));
    }
    
}
