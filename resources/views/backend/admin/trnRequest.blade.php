   @extends('backend.layouts.adminMaster')

  @section('content')
  	<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Transaction Request</h1>
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
                    <th>UserId</th>
                    <th>Name</th>
                    <th>Transaction Type</th>
                    <th>Send Method</th>
                    <th>Receive Method</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2011/04/25</td>
                    <td>001</td>
                    <td>Ripon</td>
                    <td>Sell</td>
                    <td>perfect Money</td>
                    <td>Bkash</td>
                    <td>400 ৳</td>
                    <td>Requested</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td><td>001</td>
                    <td>Ripon</td>
                    <td>Sell</td>
                    <td>Bkash </td>
                    <td>perfect Money</td>
                    <td>$4005</td>
                    <td>Recieved</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td><td>001</td>
                    <td>Ripon</td>
                    <td>Sell</td>
                    <td>perfect Money</td>
                    <td>Bkash</td>
                    <td>400 ৳</td>
                    <td>Refuse</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td><td>001</td>
                    <td>Ripon</td>
                    <td>Sell</td>
                    <td>perfect Money</td>
                    <td>Bkash</td>
                    <td>400 ৳</td>
                    <td>Refuse</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td><td>001</td>
                    <td>Ripon</td>
                    <td>Sell</td>
                    <td>perfect Money</td>
                    <td>Bkash</td>
                    <td>400 ৳</td>
                    <td>Requested</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td><td>001</td>
                    <td>Ripon</td>
                    <td>Sell</td>
                    <td>perfect Money</td>
                    <td>Bkash</td>
                    <td>400 ৳</td>
                    <td>Recieved</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td><td>001</td>
                    <td>Ripon</td>
                    <td>Sell</td>
                    <td>perfect Money</td>
                    <td>Bkash</td>
                    <td>400 ৳</td>
                    <td>Recieved</td>
                  </tr>
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