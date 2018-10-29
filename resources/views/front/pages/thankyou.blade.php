
@extends('front.layouts.master')



@section('content')
       
            <br>
            <br>
       <div class="row">
        
         <div class="col-md-12" style="width: 300px; height: 300px; text-align: center">

      
            <h2>Thank you!</h2>
            <p>Your order details was already send in your email!   
                <br>
               
               <a href="{{URL::to('shop')}}" class="btn btn-essence">Shop Again</a>
            </p>
            
       </div>
       
  
    </div>


@endsection