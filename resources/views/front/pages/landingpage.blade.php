  @extends('front.layouts.master')



  @section('content')

  <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url({{asset('ISKOLAR/42244852_737605536580626_1822135554590900224_o.jpg')}});">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        
                          <h1 style="color: white;text-align: center" > ISKOLAR CREATIVES </h1>
                        <a href="{{URL::to('shop')}}" class="btn essence-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->


   

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            
                        <div class="row">

                            <!-- Single Product -->
                            <table>
                                
                         
                           
                            @foreach($products as $product)
                     
                            <form action="{{URL::to('addtocart')}}" method="POST">
                                {{csrf_field()}}
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{asset('uploads/products/'.$product->image)}}" alt="" style="height: 250px">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="{{asset('uploads/products/'.$product->image)}}" alt="">

                                        <!-- Product Badge -->
                                        <div class="product-badge offer-badge">
                                            <span>-{{$product->discount}}</span>
                                        </div>
    
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                       
                                        <a href="{{URL::to($product->id.'/details')}}">
                                        <span>{{$product->description}}</span>
                                            <h6>{{$product->product_name}}</h6>
                                        </a>
                                        <h5 style="color:red">P{{$product->price}}</h5>
                                         <b>Quantity: <small>{{$product->quantity}} </small></b>
                                         <br>
                                         <label for="last_name">Enter Quantity</label>
                                         <input type="number" name="quantity" required>
                                         <input type="hidden" name="id"  value="{{$product->id}}">


                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <button type="submit" class="btn essence-btn btn_add_cart"> ADD TO CART</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                         @endforeach
                            </table>
                         
                        </div>
        </div>


    
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    @endsection