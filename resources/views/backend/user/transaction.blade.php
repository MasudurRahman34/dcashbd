@extends('backend.layouts.master')

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
            <div class="table-responsive">
              <table class="table table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Transaction Type</th>
                    <th>Send Method</th>
                    <th>Receive Method</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($user->transaction as $trns)
                  <tr>
                    <td>{{$trns->created_at}}</td>
                    <td>{{$trns->type}}</td>
                    <td>{{$trns->sendMethod}}</td>
                    <td>{{$trns->recieveMethod}}</td>
                    <td>{{$trns->amount}}</td>
                    <td><span class="{{$trns->status==0 ? 'badge badge-warning': ($trns->status==1 ? 'badge badge-dark' : 'badge badge-danger')}}"> {{$trns->status==0 ? 'Requested': ($trns->status==1 ? 'Completed' : 'Refused')}}</span></td>
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