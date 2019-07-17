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
            <form class="form-horizontal">
            <div class="tile-body">
              
                <div class="form-group row">
                  <label class="control-label col-md-3">Select Page</label>
                  <div class="col-md-8">
                    <select class="form-control" name="">
                      <option>Buy Header</option>
                      <option>Buy Footer</option>
                      <option>Sell Header</option>
                      <option>Sell Footer</option>
                      <option>Exchange Header</option>
                      <option>Exchange Footer</option>
                      <option>Index Header</option>
                      <option>Index Footer</option>
                      <option>Index Term and Condition</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Notive Details</label>
                  <div class="col-md-8">
                    <textarea class="form-control" id="mytextarea" rows="10" placeholder="Enter your address"></textarea>
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
    selector: '#mytextarea'
  });
  </script>
  <script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  @endsection