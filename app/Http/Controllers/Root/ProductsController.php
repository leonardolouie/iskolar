<?php


namespace App\Http\Controllers\Root;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Product;
use Image;

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









    $product = new Product;
    $product->product_name = request('product_name');
    $product->size = request('size');
    $product->quantity = request('quantity');
    $product->price = request('price');
    $product->category = request('category');
    $product->discount = request('discount');
    $product->status = request('status');
    $product->color = request('color');
    $product->description = request('description');
  
    if($request->hasFile('image'))
    {
      $image = $request->file('image');
      $filename = time(). '.'. $image->getClientOriginalExtension();
      $location = public_path('uploads/products/'.$filename);

      Image::make($image)->resize(800,400)->save($location);

      $product->image = $filename; 
     

    }


    $product->save();
    return redirect('products/index');

 
    }



    public function show($id)
    {

     $product = Product::where('id', $id)->get();



      return view('root.products.show', compact('product'));




    }



    public function activate($id)
    {
            $products = Product::where('id', $id)->get();

        foreach($products as $products)
        {
           if( $products->status == 0 || $products->status == '')
           {

              $product = Product::where('id', $id)->update(['status' => '1']);


           }

           else{


              $product = Product::where('id', $id)->update(['status' => '0']);
           }
       }
          

         return redirect()->back();
    }
}
