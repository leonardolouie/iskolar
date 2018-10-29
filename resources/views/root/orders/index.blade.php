@extends('root.layouts.master')




@section('content')
   <div class="pcoded-content">
                        <div class="card">

                          <div class="card-header">
                             <div class="card proj-progress-card">
                             <div class="card-block">
                            <h5>Add New Product</h5>
                             <button class="btn waves-effect waves-light btn-primary"> <a href="{{URL::to('products/create')}}">Add New</a></button>



                              <div class="card-block">
                            <div class="table-responsive dt-responsive">
                              <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                  <tr>
                                    <th>Actions</th>
                                 
                                    <th>Order Code</th>
                                    <th>Shopper Id</th>
                                    <th>Total</th>
                                    <th>Sub Total</th>
                                    <th>Delivery Type</th>
                                     <th>Payment</th>
                                    <th>Created at </th>
                                  </tr>
                                </thead>
                                <tbody>


                                  @foreach($result as $result)
                                  <tr>
                                    <td>
                                       <a href="{{$result->id}}/show" data-toggle="tooltip" title="show">
                                      <i class="fa fa-eye"></i>
                                    
                                   
                                    
                    
                                    </td>
                                   

                                    <td>{{$result->code_order}}</td>
                                    <td>{{$result->shopper_id}}</td>
                                    <td>{{$result->total}}</td>
                                    <td>{{$result->subtotal}}</td>
                                    <td>{{$result->delivery_type}}</td>
                                    <td>{{$result->payment}} </td>
                                    <td>{{$result->created_at}}</td>

                                  </tr>

                                  @endforeach
                                  
                                </tbody>
                                <tfoot>
                                  <tr>
                                     <th>Actions</th>
                                    <th>Order Code</th>
                                    <th>Shopper Id</th>
                                    <th>Total</th>
                                    <th>Sub Total</th>
                                    <th>Delivery Type</th>
                                     <th>Payment</th>
                                    <th>Created at </th>

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
<script src="{{asset('files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('files/assets/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{asset('files/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{asset('files/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
  $('table').DataTable();
</script>


@endsection