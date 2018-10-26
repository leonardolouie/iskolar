<?php


namespace App\Http\Controllers\Root;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    //

    public function index()
    {

            $result = Product::all();

    	return view('root.products.index' , compact('result'));
    }

    public function create()

    {



    	return view('root.products.create');
    }


    public function store(Request $request)
    {




         $request->validate([

        'product_name' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
        'category' => 'required',
        'image' => 'mimes:jpeg,jpg,png,gif|required|max:4000',
        'discount' => 'numeric',
       
    ]);

  
    $path=$request->file('image')->store('uploads');
    $imagepath = $path;

    $product = new Product;
    $product->product_name = request('product_name');
    $product->size = request('size');
    $product->quantity = request('quantity');
    $product->price = request('price');
    $product->category = request('category');
    $product->discount = request('size');
    $product->status = request('status');
    $product->color = request('color');
    $product->description = request('description');
    $product->image =  $imagepath;
    $product->save();
    return redirect('products/index');

 
    }
}
