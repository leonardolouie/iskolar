@extends('root.layouts.master')




@section('content')
<div class="pcoded-content">






		@if ($errors->any())
		  <div class="alert alert-danger border-danger">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="icofont icofont-close-line-circled"></i>
               </button>
			<ul>
				
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		 
		@endif
	<div class="card">

		<div class="card-header">
			<div class="card proj-progress-card">
				<form method="POST" action="{{URL::to('products/store')}}" enctype="multipart/form-data" >

					{{csrf_field()}}

					<div class="card-block">
						<h1 class="title">Add New Product</h1>
						<h1 class="sub-title">Enter Product Details</h1>
						<div class="form-group row">

							<div class="col-sm-5">

								<label class="form-label">Product Name</label>
								<input type="text" class="form-control" placeholder="Enter Product name" name="product_name" value="{{old('product_name')}}" required>
							</div>

							<div class="col-sm-3">
								<label class="form-label">Quantity</label>
								<input type="text"  placeholder="Enter Quantity" class="form-control" name="quantity" value="{{old('quantity')}}" required>
							</div>
							
						</div>

						<div class="form-group row">
                            <div class="col-sm-3">
								<label class="form-label">Discount</label>
								<input type="text" class="form-control"  placeholder="Enter Discount" name="discount" value="{{old('discount')}}">
							</div>
							<div class="col-sm-3">
								<label class="form-label">Price</label>
								<input type="text" placeholder="Enter Price" class="form-control" name="price" value="{{old('price')}}" required>
							</div>

						</div>

						<div class="form-group row">

							<div class="col-sm-3">
								<label class="form-label">CATEGORY</label>
								<select class="form-control" name="category" required>
									<option value="Lanyard">LANYARD</option>
									<option value="Shirt">SHIRT</option>
									
		

								</select>
							</div>

							<div class="col-sm-5">
								
								<label class="form-label">Color</label>
								<select class="form-control" name="color" value="{{old('color')}}">
                      
									<option value="0">None</option>
									<option value="White">White</option>
									<option value="Black">Black</option>
									<option value="Yellow">Yellow</option>
									<option value="Red">Red</option>
									<option value="Maroon">Maroon</option>
									<option value="Green">Green</option>
									<option value="Violet">Violet</option>
									<option value="Pink">Pink</option>
									<option value="Orange">Orange</option>
									<option value="Blue">Blue</option>

								</select>
							</div>



						</div>
						<div class="form-group row">

							<div class="col-sm-5">

								<label class="form-label">SIZE</label>
								<select class="form-control" name="size" value="{{old('size')}}">
									<option value="0">NONE</option>
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
									<option value="XXL">XXL</option>
									<option value="XXXL">XXXL</option>
								</select>
								
							</div>
							<label class="form-label"><b>Status </b></label>
							<div class="col-sm-5">
							<input type="checkbox" class= " border-checkbox border-checkbox-group border-checkbox-group-primary" name="status" value ="1"> 
							</div> 

						
						</div>



						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Image</label>
							<div class="col-sm-5">
								<input type="file" class="form-control" accept="image/*" name="image" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Description</label>
							<div class="col-sm-6">
								<textarea rows="4" cols="4" class="form-control"
								placeholder="Enter Description" name="description" value="{{old('decsription')}}"></textarea>
							</div>
						</div>
					    <div class="form-group row">
							<div class="col-sm-2">
							<button class="btn btn-primary btn-lg form-control">SUBMIT</button>
							</div>
					    </div>
					</div>

					</form>
				</div>
               </div>
			</div>
		</div>
	</div>
</div>


				
		





@endsection