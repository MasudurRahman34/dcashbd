   @extends('backend.layouts.adminMaster')

   @section('content')
   <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Transaction History</h1> 
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
              <button class="btn btn-primary"><i class="fa fa-lg fa-plus"></i></button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>UserId</th>
                  <!-- <th>Name</th> -->
                  <th>Transaction Type</th>
                  <th>Send Method</th>
                  <th>Receive Method</th>
                  <th>Number/Email</th>
                  <th>Email</th>
                  <th>Transaction ID</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($transactions as $trns)
                <tr>
                  <td>{{$trns->created_at}}</td>
                  <td>{{$trns->userId}}</td>
                  <td><a href="{{ route('userProfile', $trns->userId) }}">{{ $trns->user->id}}</a></td>
                  <td>{{$trns->type}}</td>
                  <td>{{$trns->sendMethod}}</td>
                  <td>{{$trns->recieveMethod}}</td>
                  <td><span class="{{$trns->number==NULL ? 'text-warning': ''}}">{{$trns->number==NULL ?'x' :$trns->number}} </span></td>
                  <td><span class="{{$trns->email==NULL ? 'text-warning': ''}}">{{$trns->email==NULL ?'x' :$trns->email}} </span></td>
                  <td>{{$trns->trnasID}}</td>
                  <td>{{$trns->amount}}</td>
                  <td> <a  data-toggle="modal" data-target="#exampleModal{{$trns->id}}" class="{{$trns->status==0 ? 'badge badge-warning' : $trns->status==1 ? 'badge badge-success' : 'badge badge-danger'}}">{{$trns->status== 0 ? 'Requested' : ($trns->status==1 ? 'Accepted' :'Refused')}}</a>
                    <div class="modal fade" id="exampleModal{{$trns->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Transaction type</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                           <div class="tile">
                            <div class="tile-body">
                              <form class="form-horizontal" action="{{ route('trns.status', $trns->id) }}" method="POST">
                                @csrf
                               
                                <div class="form-group row">
                                  <label class="control-label col-md-4">Transaction Type</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text"  value="{{$trns->type}}"  disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-4">Send Method</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text"  value="{{$trns->sendMethod}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-4">Recieve Method</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{$trns->recieveMethod}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row comDiv" >
                                  <label class="control-label col-md-4">Email</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{$trns->email}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row comDiv" >
                                  <label class="control-label col-md-4">Number</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{$trns->number}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row addrDiv">
                                  <label class="control-label col-md-4">Transaction ID</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text"  value="{{$trns->trnasID}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row addrDiv">
                                  <label class="control-label col-md-4">Amount</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{$trns->amount}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group alert alert-dismissible alert-danger row" >
                                  <label class="control-label col-md-5"><span>Are You Sure Change Status</span></label>
                                  <div class="col-md-7">
                                    <select class="form-control" name="status" required>
                                      <option></option>
                                      <option value="1">Accepted</option>
                                      <option value="2">Refused</option>
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
        <script type="text/javascript">$('#sampleTable').DataTable({
          "order": [[ 3, "desc" ]]
        });</script>
        @endsection