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
                    <th>email verified</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    {{-- expr --}}
                  <tr>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->email_verified_at==NULL ? 'No' : 'Yes'}}</td>
                    <td>{{$user->email_verified_at==NULL ? 'Inactive' : 'Active'}}</td>
                    
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