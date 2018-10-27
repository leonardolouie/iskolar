@extends('root.layouts.master')




@section('content')


  
      <div class="pcoded-content">


      	<div class= "card">


                          <div class="card-header">
                             <div class="card proj-progress-card">
                             <div class="card-block">
                 
             	
     

        <!-- Single Product Thumb -->

        <div class="row">
        @foreach($product as $product)
        <div class="col-md-4">
          
                <img src="{{asset('uploads/products/'.$product->image)}}" alt="" style="width: 350px; height: 500px">
               
            </div>


        <!-- Single Product Description -->
        <div class="col-md-88">
                <h2>Product Name: {{$product->product_name}}</h2>
            </a>
             <p class="product-desc">Discount:-P{{$product->discount}}</p>
            <p class="product-price">Price:P{{$product->price}}</p>
            <p class="product-price">Quantity: {{$product->quantity}}</p>
            <p class="product-desc">Description: {{$product->description}}</p>
            <p class="product-desc">Color: {{$product->color}}</p>
            <p class="product-desc">Size: {{$product->size}}</p>
            <p class="product-desc">Category: {{$product->category}}</p>

           
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">

                  @if($product->status == 1)
                    <h2 style="color:green">Status: Available</h2>


                   @else
                   <h2 style="color:red">Status: Not Available</h2>

                   @endif

                </div>
             
              
        </div>
  </div>
        @endforeach

      




      	</div>




      </div>









@endsection