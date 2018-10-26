@extends('root.layouts.master')




@section('content')
   <div class="pcoded-content">
                        <div class="card">

                          <div class="card-header">
                             <div class="card proj-progress-card">
                             <div class="card-block">
                            <h5>Add New Product</h5>
                             <button class="btn btn-primary btn-round"> <a href="{{URL::to('products/create')}}">Add New</a></button>



                              <div class="card-block">
                            <div class="table-responsive dt-responsive">
                              <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                  <tr>
                                    <th>Actions</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Size</th>
                                    <th>Discount</th>
                                    <th>Price</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @foreach($result as $result)
                                  <tr>
                                    <td>
                                      <a href="{{$result->section_id}}/edit" data-toggle="tooltip" title="Edit">
                                      <i class="fa fa-pencil-square-o"></i>
                                      Edit
                                     </a>
                                     <a href="{{$result->section_id}}/edit" data-toggle="tooltip" title="Edit">
                                      <i class="fa fa-pencil-square-o"></i>
                                      Show
                                     </a>
                                     <a href="{{$result->section_id}}/edit" data-toggle="tooltip" title="Edit">
                                      <i class="fa fa-pencil-square-o"></i>
                                      Deactivate
                                     </a>
                                    </td>
                                    <td><img class="img-responsive" src="{{asset('storage/'.$result->image)}}" alt="{{$result->product_name}}"> </td>

                                    <td>{{$result->product_name}}</td>
                                    <td>{{$result->category}}</td>
                                    <td>{{$result->size}}</td>
                                    <td>{{$result->discount}}</td>
                                    <td>{{$result->price}}</td>
                                  </tr>

                                  @endforeach
                                  
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>Actions</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Size</th>
                                    <th>Discount</th>
                                    <th>Price</th>

                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div>

                           
                         

                          </div>
                         
                   </div>

              </div>

@endsection


@section('scripts')

<script src="{{asset('files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
  $('table').DataTable();
</script>


@endsection