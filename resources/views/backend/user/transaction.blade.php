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
                    <th>Serial</th>
                    <th>Date</th>
                    <th>Transaction Type</th>
                    <th>Send Method</th>
                    <th>Receive Method</th>
                    <th>Receive Account</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                   @php
                   $i=1;
                @endphp
                   @foreach ($user->transaction as $trns)
                  <tr>
                    <td>{{$i}}</td>
                  <td>{{ date('d-m-y', strtotime($trns->created_at)) }}</td>
                  <td>{{$trns->type}}</td>
                  <td><img width="30" src="
                    {{ asset('img/currency/'.$trns->sendMethod.'.jpg') }}"> {{ $trns->sendMethod}}</td>
                  <td><img width="30" src="
                    {{ asset('img/currency/'.$trns->recieveMethod.'.jpg') }}">{{ $trns->recieveMethod}}</td>
                  
                  

                    @switch($trns->type)
                        @case('Buy')
                         <span class="font-weight-bold" style=" font-family: -webkit-body;">&#2547</span></td>
                            @break
                        @default
                          <span class="font-weight-bold" style=" font-family: -webkit-body;">$</span></td>
                    @endswitch
                    
                    <td>{{$trns->recieveAccount}}
                   <td>{{number_format($trns->recieveAmount, 2)}}
                       @switch($trns->type)
                        @case('Buy')
                            <span class="font-weight-bold" style=" font-family: -webkit-body;">&#x24</span></td>
                            @break
                    
                        @default
                              <span class="font-weight-bold" style=" font-family: -webkit-body;">&#2547</span></td>
                    @endswitch

                   </td>
        
                    <td><span class="{{$trns->status==0 ? 'badge badge-warning': ($trns->status==1 ? 'badge badge-dark' : 'badge badge-danger')}}"> {{$trns->status==0 ? 'Requested': ($trns->status==1 ? 'Completed' : 'Refused')}}</span></td>
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
  @endsection