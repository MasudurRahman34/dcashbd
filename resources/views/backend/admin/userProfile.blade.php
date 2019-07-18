   @extends('backend.layouts.adminMaster')

   @section('content')
   <div class="row user">
    <div class="col-md-3">
      <div class="profile">
        <div class="info" style="white-space: inherit !important;"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
          <h4>{{$user->name}}</h4>
          <p>{{$user->created_at}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="tab-content">
        <div class="tab-pane active" id="user-timeline">
          <div class="timeline-post">
           <div class="col-md-12">
            <div class="tile">
              <h3 class="tile-title">User profile</h3>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>

                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile Number</th>
                      <th>Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$user->name}}</td>
                      <td> {{$user->email}}</td>
                      <td>{{$user->mobile}}</td>
                      <td>{{$user->address}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <ul style="list-style: none;
          padding-left: 0;
          margin-bottom: 0;">
          <li class=""><h5 href="#"><i class="fa fa-fw fa-lg fa-share"></i>Upper Reffaral Link</h5><a href="">http://tdbsewallet.com/home/signup?user=kobirkhansatkhira7@gmail.com</a></li> <br><li class=""><h5 href="#"><i class="fa fa-fw fa-lg fa-share"></i>My Reffaral Link</h5><a href="">http://tdbsewallet.com/home/signup?user=kobirkhansatkhira7@gmail.com</a></li> <br>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="tile-title-w-btn">
            <h3 class="title">All Transaction</h3>
            <div class="btn-group">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-lg fa-plus"></i></button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Send Notice</h5>
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
                    <th>Date</th>   
                    <th>Transaction Type</th>
                    <th>Send Method</th>
                    <th>Receive Method</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user->transaction as $trns)
                  {{-- expr --}}
               
                <tr>
                  <td>{{$trns->created_at}}</td>
                  <td>{{$trns->type}}</td>
                  <td>{{$trns->sendMethod}}</td>
                  <td>{{$trns->recieveMethod}}</td>
                  <td>{{$trns->number}}</td>
                  <td>{{$trns->email}}</td>
                  <td>{{$trns->trnasID}}</td>
                  <td>{{$trns->amount}}</td>
                  <td> <a class=" {{$trns->status==0 ? 'badge badge-success' : 'badge badge-warning'}}">{{$trns->status==0 ? 'Requested' : $trns->status==1 ? 'Accepted' :'Refuse'}}</a></td>
                  <td><a class="btn btn-primary" href="#"><i class="fa fa-lg fa-edit"></i></a>
                    <a class="btn btn-danger" href="#"><i class="fa fa-lg fa-trash"></i></a></td>
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
  @endsection