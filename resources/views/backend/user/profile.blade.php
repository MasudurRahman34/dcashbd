@extends('backend.layouts.master')

  @section('content')
  	<div class="row user">
                  <div class="col-md-3">
                    <div class="profile">
                      <div class="info" style="white-space: inherit !important;"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
                        <h4>{{Auth::user()->name}}</h4>
                        <p>Openning Date  {{date('d-m-y', strtotime(Auth::user()->created_at))}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="tab-content">
                      <div class="tab-pane active" id="user-timeline">
                        <div class="timeline-post">
                         <div class="col-md-12">
                          <div class="tile">
                            <h3 class="tile-title">My profile</h3>
                            <div class="table-responsive">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                 
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Mobile Number</th>
                                  <th>Address</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{Auth::user()->name}}</td>
                                  <td>{{Auth::user()->email}}</td>
                                  <td>{{Auth::user()->mobile}}</td>
                                  <td>{{Auth::user()->address}}</td>
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