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
            
            <form class="form-horizontal"action="{{ route('notice.store') }}" method="POST">
              @csrf
            <div class="tile-body">
              
                <div class="form-group row">
                  <label class="control-label col-md-3">Select Page</label>
                  <div class="col-md-8">
                    <select class="form-control" name="type">
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
                  <label class="control-label col-md-3">Notice Details</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="notice" id="mytextarea" rows="10" placeholder="Enter your address"></textarea>
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
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Date</th>
                    <th>Notice Type</th>
                    <th>Notice</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                   @php
                   $i=1;
                @endphp
                   @foreach ($notices as $nts)
                  <tr>
                    <td>{{$i}}</td>
                  <td>{{ date('d-m-y', strtotime($nts->created_at)) }}</td>
                  <td>{{$nts->type}}</td>
                  <td>{!! $nts->notice!!}</td>
        
                    <td><a class="btn btn-primary" href="{{ route('notice.edit', $nts->id) }}" ><i class="fa fa-lg fa-edit"></i>
                    </a><a class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal{{$nts->id}}"><i class="fa fa-lg fa-trash"></i></a>
                      <div class="modal fade" id="DeleteModal{{$nts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form class="form-horizontal" action="{{ route('notice.delete', $nts->id) }}" method="POST">
                           @csrf
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">notice</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                           <div class="tile">
                            <div class="tile-body">
                                <div class="form-group row">
                                  <label class="control-label col-md-4">Notice Type</label>
                                  <div class="col-md-8">
                                    <input class="form-control" type="text"  name="name" value="{{$nts->type}}" >
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-12">Type</label>
                                  <div class="col-md-12">
                                    <textarea class="form-control" name="notice" id="mytextarea" rows="10" placeholder="Enter your address">{!!$nts->notice!!}</textarea>
                                  </div>
                                </div>
                                
                                </div>
                              </div>
                            </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Delete</button>
                              </div>
                            </div>
                      </form>
                    </div>
                  </div>
                  </td>
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