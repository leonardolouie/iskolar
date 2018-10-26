@extends('root.layouts.master')




@section('content')



      <div class="pcoded-content">


      	<div class= "card">
                 
             	<div class="card-block">
             		@foreach($product as $product)
             		<label>Product Name</label>
						<h5 class="title">{{$product->product_name}}</h5>

				</div>



				








							@endforeach
      




      	</div>




      </div>









@endsection