   @extends('backend.layouts.adminMaster')

   @section('content')
   <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Currency</h1> 
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="tile-title-w-btn">
            <h3 class="title">All Item</h3>
            {{date('Y-m-d')}}
            <div class="btn-group">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-lg fa-plus"></i></button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Currency</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     <div class="tile">
                      <div class="tile-body">
                        <form class="form-horizontal" action="{{ route('currency.store') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                            <label class="control-label col-md-4">Currency Name</label>
                            <div class="col-md-8">
                              <input class="form-control" name="name" type="text" placeholder="Enter Currency name" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-4">Page Type</label>
                             <div class="col-md-8">
                              <select class="form-control" name="type" id="currencyType" required>
                                <option></option>
                                <option value="1">Buy</option>
                                <option value="2">Sell</option>
                                <option value="3">Exchange</option>
                             </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-4">Rate</label>
                            <div class="col-md-8">
                              <input class="form-control" type="number" name="rate" min="1" placeholder="Enter Rate" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-4">Minimum Value</label>
                            <div class="col-md-8">
                              <input class="form-control" type="number" name="minValue" placeholder="Enter Minimum Value" required=>
                            </div>
                          </div>
                          <div class="form-group row comDiv" >
                            <label class="control-label col-md-4">comission</label>
                            <div class="col-md-8">
                              <input class="form-control" type="number" id="commission" name="commission" placeholder="Enter commisison" disabled="true" step=".1" required=>
                            </div>
                          </div>
                          <div class="form-group row addrDiv">
                            <label class="control-label col-md-4">Payment Address</label>
                            <div class="col-md-8">
                              <input class="form-control" type="text" name="address" id="address" placeholder="Payment Address" disabled="true">
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
                  <th>SL</th>
                  <th>last Update</th>
                  <th>Currency</th>
                  <th>Type</th>
                  <th>Rate</th>
                  <th>Min value</th>
                  <th>C.mission</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $i=1;
                @endphp
                @foreach ($currencies as $cur)
                  {{-- expr --}}
               
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ date('d-M-y', strtotime($cur->created_at)) }}</td>
                  <td>{{$cur->name}}</td>
                  <td> @switch($cur->type)
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
                  <td>{{$cur->rate}}</td>
                  <td>{{$cur->minValue}}</td>
                  <td>{{$cur->commission==0 ? '0' : $cur->commission}}</td>
                  <td>{{str_limit ($cur->address, 15 )}}</td>
                  <td> <a class=" {{$cur->status==0 ? 'badge badge-success' : 'badge badge-warning'}}">{{$cur->status==0 ? 'Active' : 'Inactive'}}</a></td>
                  <td><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$cur->id}}"><i class="fa fa-lg fa-edit"></i>
                    </a><a class="btn btn-danger" href="#"><i class="fa fa-lg fa-trash"></i></a>
                    <div class="modal fade" id="exampleModal{{$cur->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">All Currency</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                           <div class="tile">
                            <div class="tile-body">
                              <form class="form-horizontal" action="{{ route('currency.edit', $cur->id) }}" method="POST">
                                @csrf
                               
                                <div class="form-group row">
                                  <label class="control-label col-md-4">Currency Name</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text"  name="name" value="{{$cur->name}}" >
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-4">Type</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text"  name="type" value="{{$cur->type}}" >
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-4">Rate</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text"  name="rate" value="{{$cur->rate}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-4">Minimum Value</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" name="minValue" value="{{$cur->minValue}}">
                                  </div>
                                </div>
                                <div class="form-group row comDiv" >
                                  <label class="control-label col-md-4">Commision</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" name="commission" value="{{$cur->commission}}">
                                  </div>
                                </div>
                                <div class="form-group row comDiv" >
                                  <label class="control-label col-md-4">Address</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" name="address" value="{{$cur->address}}">
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
                @php
                  $i++;
                @endphp
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
          if(currencyType==1){
                  $('#address').prop("disabled", true);
                  $('#commission').prop("disabled", true);
                  $('.addrDiv').hide();
                  $('.comDiv').hide();
                }
                else if(currencyType==3){
                  $('.comDiv').show();
                   $('#commission').prop("disabled", false);
                   $('#address').prop("disabled", false);
                   $('.addrDiv').show();
                }
              else{
                  $('#address').prop("disabled", false);
                  $('#commission').prop("disabled", true);
                  $('.addrDiv').show();
                  $('.comDiv').hide();
          }
        });
      });
    </script>
  @endsection