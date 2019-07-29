   @extends('backend.layouts.adminMaster')

  @section('content')
  	<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Notice</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            
            <form class="form-horizontal"action="{{ route('notice.update', $notices->id) }}" method="POST">
              @csrf
            <div class="tile-body">
              
                <div class="form-group row">
                  <label class="control-label col-md-3">Select Page</label>
                  <div class="col-md-8">
                    <select class="form-control" name="type">

                      <option>{{$notices->type}}</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Notice Details</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="notice" id="mytextarea" rows="10" >{{$notices->notice}}</textarea>
                  </div>
                </div>
              
            </div>
            <div class="tile-footer">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-primary" type="Submit" style="float: right;"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                      </div>
                    </div>
                </div>
              </form>
          </div>
        </div>
      </div>
  @endsection
  @section('script')
  <script>
  tinymce.init({
    selector: '#mytextarea',
    plugins: "lists",
  toolbar: "numlist bullist"
  });
  </script>
  <script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  @endsection