@extends('front.layouts.master')



@section('content')


 <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        @foreach($product as $product)
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="{{asset('uploads/products/'.$product->image)}}" alt="">
                <img src="{{asset('uploads/products/'.$product->image)}}" alt="">
                <img src="{{asset('uploads/products/'.$product->image)}}"alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">

              
                <h2>{{$product->product_name}}</h2>
            </a>
            <p class="product-price">P{{$product->price}}</p>
            <p class="product-desc">{{$product->description}}</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <h1>{{$product->color}}</h1>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                    
                </div>
            </form>
        </div>
        @endforeach
    </section>
    <!-- ##### Single Product Details Area End ##### -->




@endsection