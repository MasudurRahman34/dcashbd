
 
    <!-- Navbar-->
    
    <!-- Sidebar menu-->
    @extends('backend.layouts.master')

    @section('content')
    
      <div class="app-title" style="margin-top:0px;">
        <div class="mx auto">
          <h1 style= "text-align: center !important; font-size: 40px !important;" >Wecome to  Dashboard !</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="widget-small" style="background: #51bcd4;"> <a href="" class="text-center text-uppercase" style="text-decoration: none;"><div style="padding: 25px; margin-left: 80px; color: white;"> <h4 class="text-center">Buy Dollar</h4><i class="fa fa-shopping-cart" style="font-size: 50px !important; "></i></div></a> 
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small" style="background: #4dc45f;"> <a href="" class="text-center text-uppercase" style="text-decoration: none;"><div style="padding: 25px; margin-left: 80px; color: white;"> <h4 class="text-center">Sell Dollar</h4><i class="fa fa-shopping-bag" style="font-size: 50px !important; "></i></div></a> 
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="widget-small" style="background: #4aa2eb;"> <a href="" class="text-center text-uppercase" style="text-decoration: none;"><div style="padding: 25px; margin-left: 80px; color: white;"> <h4 class="text-center">Buy Dollar</h4><i class="fa fa-random" style="font-size: 50px !important; "></i></div></a> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title text-center">Your Referrale Link</h3>
            <hr>
           
             <h6 class="text-center text-success" href="dcash.com" target="_blank">http://dcash.com/home/signup?user=MasudShuvo@gmail.com</h6>
            
          </div>
        </div>
        </div>
      </div>
    @endsection
    <!-- Essential javascripts for application to work-->
  