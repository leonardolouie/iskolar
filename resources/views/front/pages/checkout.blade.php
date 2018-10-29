@extends('front.layouts.master')


@section('content')


  <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="{{URL::to('checkoutsave')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First Name <span>*</span></label>
                                    <input type="text" class="form-control" id="first_name" value="" name="first_name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" id="last_name" value=""  name="last_name"required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="company">Middle Name</label>
                                    <input type="text" class="form-control" id="company" value=""  name="middle_name"required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="country">Country <span>*</span></label>
                                    <select class="w-100" id="country" name ="country">
                                        <option value="Philippines">Philippines</option>
                                     
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address">Address <span>*</span></label>
                               
                                    <input type="text" class="form-control" id="street_address2" name="address" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode">Postcode <span>*</span></label>
                                    <input type="text" class="form-control" id="postcode" value="" name="postal_code"required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="city">Town/City <span>*</span></label>
                                    <input type="text" class="form-control" id="city" value="" name="town" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="state">Province <span>*</span></label>
                                    <input type="text" class="form-control" id="state" value="" name="province" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Phone No <span>*</span></label>
                                    <input type="number" class="form-control" id="phone_number" min="0" name="contact_no"value="contact_no">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Email Address <span>*</span></label>
                                    <input type="email" class="form-control" id="email_address" value="" name="email">
                                </div>

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block mb-2" required>
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                    </div>
                                </div>
                            </div>
                             <input type="hidden" name="total" value="{{Cart::getTotal() + 50}}">
                             <input type="hidden" name="subtotal" value="{{Cart::getSubTotal()}}">
                             <input type="hidden" name="delivery_type" value="cashondelivery">

 
                             <button type="submit" class="btn essence-btn" >PLace Order</button>
                      
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>

                        <ul class="order-details-form mb-4">
                             <li><span>Total Quantity:</span> <span>{{Cart::getTotalQuantity()}}</span></li>
                            <li><span>Discount:</span> <span>-P{{ Cart::getCondition('discount')}}</span></li>
                             <li><span>Subtotal:</span> <span>{{Cart::getSubTotal()}}</span></li>
                           <li><span>Delivery:</span> <span>+P50</span></li>
             
        
                    <li><span>Total:</span> <span>{{Cart::getTotal() + 50}}</span></li>
                        </ul>

                        <div id="accordion" role="tablist" class="mb-4">

                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>cash on delievery</a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Deliver na</p>
                                    </div>
                                </div>
                            </div
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Item will deliver in your information given</p>
                                    </div>
                                </div>
                            </div>
                    
                                </div>
                            </div>
                        </div>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->


    @endsection