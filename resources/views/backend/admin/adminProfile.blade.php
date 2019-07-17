   @extends('backend.layouts.adminMaster')

  @section('content')
  	<div class="row user">
                  <div class="col-md-3">
                    <div class="profile">
                      <div class="info" style="white-space: inherit !important;"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
                        <h4>John Doe</h4>
                        <p>Openning Date  2017-03-29</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="tab-content">
                      <div class="tab-pane active" id="user-timeline">
                        <div class="timeline-post">
                         <div class="col-md-12">
                          <div class="tile">
                            <h3 class="tile-title">User profile</h3>
                            <div class="table-responsive">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                 
                                  <th>Name</th>
                                  <th>Username myname</th>
                                  <th>Email</th>
                                  <th>Mobile Number</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>myname Mark</td>
                                  <td> myname Otto</td>
                                  <td>myname@gmail.com</td>
                                  <td>903401489</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        </div>
                        <ul style="list-style: none;
                              padding-left: 0;
                              margin-bottom: 0;">
                          <li class=""><h5 href="#"><i class="fa fa-fw fa-lg fa-share"></i>Upper Reffaral Link</h5><a href="">http://tdbsewallet.com/home/signup?user=kobirkhansatkhira7@gmail.com</a></li> <br><li class=""><h5 href="#"><i class="fa fa-fw fa-lg fa-share"></i>My Reffaral Link</h5><a href="">http://tdbsewallet.com/home/signup?user=kobirkhansatkhira7@gmail.com</a></li> <br>
                        </ul>
                      </div>
                    </div>
                  </div>
                 </div>
              </div>
  @endsection