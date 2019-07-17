   @extends('backend.layouts.adminMaster')

  @section('content')
  	<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> User List</h1>
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
                    <th>Join Date</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>mobile Number</th>
                    <th>Address</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2011/04/25</td>
                    <td>01</td>
                    <td>Ripon</td>
                    <td>Email@gmail.com</td>
                    <td>01740658791</td>
                    <td>Shatkhira Kolaroya</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                   <td>2011/04/25</td>
                    <td>01</td>
                    <td>Ripon</td>
                    <td>Email@gmail.com</td>
                    <td>01740658791</td>
                    <td>Shatkhira Kolaroya</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td>
                    <td>01</td>
                    <td>Ripon</td>
                    <td>Email@gmail.com</td>
                    <td>01740658791</td>
                    <td>Shatkhira Kolaroya</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td>
                    <td>01</td>
                    <td>Ripon</td>
                    <td>Email@gmail.com</td>
                    <td>01740658791</td>
                    <td>Shatkhira Kolaroya</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td>
                    <td>01</td>
                    <td>Ripon</td>
                    <td>Email@gmail.com</td>
                    <td>01740658791</td>
                    <td>Shatkhira Kolaroya</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>2011/04/25</td>
                    <td>01</td>
                    <td>Ripon</td>
                    <td>Email@gmail.com</td>
                    <td>01740658791</td>
                    <td>Shatkhira Kolaroya</td>
                    <td>Active</td>
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