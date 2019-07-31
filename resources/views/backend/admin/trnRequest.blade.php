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
           
            <div class="btn-group">
              {{date('Y-M-d')}}
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="sampleTable">
              <thead>

                <tr>
                  <th>SL</th>
                  <th>Date</th>
                  <th>User_Name</th>
                  <th>Transaction Type</th>
                  <th>Send_Method</th>
                  <th>Receive_Method</th>
                  <th>Send Account</th>
                  <th>Recieve Account</th>
                  <th>Send Amount</th>
                  <th>Recieve Amount</th>
                  <th>Transaction ID</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @php
                   $i=1;
                @endphp
                @foreach ($transactions as $trns)
                <tr>
                 
                  <td>{{$i}}</td>
                  <td>{{ date('d-m-y', strtotime($trns->created_at)) }}</td>
                  <td><a href="{{ route('userProfile', $trns->userId) }}">{{ $trns->userName}}</a></td>
                  <td>{{$trns->type}}</td>
                  <td><img width="30" src="
                    {{ asset('img/currency/'.$trns->sendMethod.'.jpg') }}"> {{ $trns->sendMethod}}</td>
                  <td><img width="30" src="
                    {{ asset('img/currency/'.$trns->recieveMethod.'.jpg') }}">{{ $trns->recieveMethod}}</td>
                  <td class="text-center"><span class="{{$trns->sendAccount==NULL ? 'text-warning': ''}}">{{$trns->sendAccount==NULL ?'X' :$trns->sendAccount}} </span></td>
                  <td><span class="{{$trns->recieveAccount==NULL ? 'text-warning': ''}}">{{$trns->recieveAccount==NULL ?'X' :$trns->recieveAccount}} </span></td>
                   <td>{{number_format($trns->sendAmount,2) }}

                    @switch($trns->type)
                        @case('Buy')
                         <span class="font-weight-bold" style=" font-family: -webkit-body;">&#2547</span></td>
                            @break
                        @default
                          <span class="font-weight-bold" style=" font-family: -webkit-body;">$</span></td>
                    @endswitch
                    
                    
                   <td>{{number_format($trns->recieveAmount, 2)}}
                       @switch($trns->type)
                        @case('Buy')
                            <span class="font-weight-bold" style=" font-family: -webkit-body;">&#x24</span></td>
                            @break
                    
                        @default
                              <span class="font-weight-bold" style=" font-family: -webkit-body;">&#2547</span></td>
                    @endswitch

                   </td>
                   <td class="text-center"><span class="{{$trns->trnasID==NULL ? 'text-primary': ''}}">{{$trns->trnasID==NULL ?'X' :$trns->trnasID}} </span></td>
                  <td> <a  data-toggle="modal" data-target="#exampleModal{{$trns->id}}" class="{{$trns->status== 0 ? 'badge badge-warning' : ($trns->status==1 ? 'badge badge-success' : 'badge badge-danger')}}">{{$trns->status== 0 ? 'Requested' : ($trns->status==1 ? 'Accepted' :'Refused')}}</a>
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
                                  <label class="control-label col-md-4">Send Account</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{$trns->sendAccount}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row comDiv" >
                                  <label class="control-label col-md-4">Recieve Account</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{$trns->recieveAccount}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row addrDiv">
                                  <label class="control-label col-md-4">Send Amount</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{$trns->sendAmount}}.
                                    " disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row addrDiv">
                                  <label class="control-label col-md-4">Recieve Amount</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{$trns->recieveAmount}}" disabled="true">
                                  </div>
                                </div>
                                <div class="form-group row addrDiv">
                                  <label class="control-label col-md-4">Transaction ID</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text"  value="{{$trns->trnasID}}" disabled="true">
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
                      @php
                        $i++
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
        @endsection