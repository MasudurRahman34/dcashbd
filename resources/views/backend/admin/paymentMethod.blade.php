   @extends('backend.layouts.adminMaster')

   @section('content')
   <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Payment Method</h1> 
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="tile-title-w-btn">
            <h3 class="title">All Items</h3>
            {{date('Y-m-d')}}
            <div class="btn-group">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-lg fa-plus"></i></button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Payment Method</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     <div class="tile">
                      <div class="tile-body">
                        <form class="form-horizontal" action="{{ route('paymentMethod.store') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                            <label class="control-label col-md-4">Payment Method Name</label>
                            <div class="col-md-8">
                              <input class="form-control" name="name" type="text" placeholder="Enter payment Method name" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-4">Page Type</label>
                            <div class="col-md-8">
                              <select class="form-control" name="type" id="currencyType" required>
                                <option value="1">Buy</option>
                                <option value="2">Sell</option>
                                <option value="3">Exchange</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-4">Payment Address</label>
                            <div class="col-md-8">
                              <input class="form-control" type="text" name="address" id="address" placeholder="Payment Address">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>last Update</th>
                <th>Id</th>
                <th>Payment method</th>
                <th>Type</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($paymentmethods as $pm)
              {{-- expr --}}

              <tr>
                <td>{{$pm->created_at}}</td>
                <td>{{$pm->id}}</td>
                <td>{{$pm->name}}</td>
                <td> @switch($pm->type)
                  @case(1)
                  {{'Buy'}}
                  @break
                  @case(2)
                  {{'Sell'}}
                  @break
                  @case(3)
                  {{'Exchange'}}
                  @break
                  @default
                  Default case...
                  @endswitch
                </td>
                <td>{{$pm->address}}</td>
                <td> <a class=" {{$pm->status==0 ? 'badge badge-success' : 'badge badge-warning'}}">{{$pm->status==0 ? 'Active' : 'Inactive'}}</a></td>
                <td><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$pm->id}}"><i class="fa fa-lg fa-edit"></i>
                </a><a class="btn btn-danger" href="#"><i class="fa fa-lg fa-trash"></i></a>
                <div class="modal fade" id="exampleModal{{$pm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">All Payment Mehtod</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <div class="tile">
                        <div class="tile-body">
                          <form class="form-horizontal" action="{{ route('paymentMethod.edit', $pm->id) }}" method="POST">
                            @csrf

                            <div class="form-group row">
                              <label class="control-label col-md-4">Currency Name</label>
                              <div class="col-md-8">
                                <input class="form-control" type="text"  name="name" value="{{$pm->name}}" >
                              </div>
                            </div>
                            <div class="form-group row" >
                              <label class="control-label col-md-4"><span>Type</span></label>
                              <div class="col-md-8">
                                <select class="form-control" name="type" id="currencyType">

                                  <option value="1" {{$pm->type==1 ? 'selected' :'' }}>Buy</option>
                                  <option value="2" {{$pm->type==2 ? 'selected' :'' }}>Sell</option>
                                  <option value="3" {{$pm->type==3 ? 'selected' :'' }}>Exchange</option>
                                </select>
                              </div>
                            </div> 
                            <div class="form-group row">
                              <label class="control-label col-md-4">Payment Address</label>
                              <div class="col-md-8">
                                <input class="form-control" type="text" name="address" id="address" value="{{$pm->address}}">
                              </div>
                            </div>

                            <div class="form-group alert alert-dismissible alert-danger row" >
                              <label class="control-label col-md-5"><span>Are You Sure Change Status</span></label>
                              <div class="col-md-7">
                                <select class="form-control" name="status" required>
                                  <option></option>
                                  <option value="0">Active</option>
                                  <option value="1">Inactive</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </form>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
    @section('script')
    <script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#currencyType').change(function(){
          var currencyType=$('#currencyType option:selected').val();
          if(currencyType==2){
            $('#address').prop("disabled", true);}
            else{
              $('#address').prop("disabled", false);
            }
          });
      });
    </script>
    @endsection