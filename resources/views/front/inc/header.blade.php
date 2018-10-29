 <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{URL::to('welcome')}}"><h6>ISKOLAR CREATIVES <h6></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{URL::to('shop')}}">Shop</a> </li>
                            <li><a href="{{URL::to('blog')}}">Blog</a></li>
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
    
              
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="{{route('login')}}"><img src="{{asset ('front/img/core-img/user.svg')}}" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="{{asset('front/img/core-img/bag.svg')}}" alt=""> <span> {{Cart::getContent()->count()}}</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="{{asset('front/img/core-img/bag.svg')}}" alt="">{{Cart::getContent()->count()}} </a>
        </div>

        <div class="cart-content d-flex">
            @if(Cart::getContent()->count() > 0)
            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->

                 @foreach($items = Cart::getContent() as $collection)
                 <form action="{{URL::to($collection->id.'/remove')}}" method="post">
                    {{csrf_field()}}
                       
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="{{asset('ISKOLAR/2.jpg')}}" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                               
                   
                                
                                 
                            
                           
                            <span class="badge">{{$collection->name}}</span>
                        
                           
                            <p class="Price"><span> Quantity:</span>{{$collection->quantity}}</p>
                            <p class="price"><span> Price:</span>{{$collection->price}}</p>

                           
                        </div>
                    </a>
                </div>

                   <button type="submit" class="btn essence-btn">Remove</button>
             </form>
                         

           
            @endforeach
             </div>
                       
              <!-- Cart Summary -->

                 <div class="cart-amount-summary">

                <h2>Cart Summary</h2>
                <ul class="summary-table">
                    <li><span>Total Quantity:</span> <span>{{Cart::getTotalQuantity()}}</span></li>
                    <li><span>Discount:</span> <span>-P{{ Cart::getCondition('discount')}}</span></li>
                    <li><span>Subtotal:</span> <span>{{Cart::getSubTotal()}}</span></li>
                    <li><span>Delivery:</span> <span>+P50</span></li>
             
        
                    <li><span>Total:</span> <span>{{Cart::getTotal() + 50}}</span></li>




                   
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="{{URL::to('checkout')}}" class="btn essence-btn">check out</a>
                </div>
                 <div class="checkout-btn mt-100">
                    <a href="{{URL::to('clearcart')}}" class="btn essence-btn">Clear Cart</a>
                </div>
            </div>
            @else
             <div class="cart-amount-summary">

                <h2>Cart Is Empty</h2>
                <ul class="summary-table">
                   <li>Order Na</li>
                </ul>

            </div>

           @endif

           
        
        </div>
    </div>





    <!-- ##### Right Side Cart End ##### -->