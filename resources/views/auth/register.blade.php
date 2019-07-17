  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <!-- Twitter meta-->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:site" content="@pratikborsadiya">
      <meta property="twitter:creator" content="@pratikborsadiya">
      <!-- Open Graph Meta-->
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Vali Admin">
      <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
      <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
      <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
      <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <title>Registration</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Main CSS-->
      @include ('backend.partials.css');
    </head>
  <body>

      <main class="userRegisration">
      <section class="material-half-bg">
        <div class="cover"></div>
      </section>  
        <div class="row">
          <div class="col-md-6 offset-md-3" >
            <div class="tile">
              <h3 class="tile-title">User Registration</h3>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
              <div class="tile-body">
                  <div class="form-group row">
                    <div class="col-md-8">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Full name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Valid Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8">
                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password Minimum 8 character" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile Number" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    
                    <div class="col-md-8">
                      <textarea class="form-control" name="address" rows="2" placeholder="Enter your address...country, postal code, hometown" required></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-6">Identity Proof/ Nid card/ Birth Certificate</label>
                    <div class="col-md-6">
                      <input class="form-control" name="idprof" type="file">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" required>I accept the terms and conditions 
                        </label>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="tile-footer">
                <div class="row">
                  <div class="col-md-6 offset-md-4">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </div>
          </form>

            </div>
          </div>
        </div>
      </main>
      
   
      <!-- Essential javascripts for application to work-->
      @include ('backend.partials.script');
      <!-- Page specific javascripts-->
      <!-- Google analytics script-->
      <!-- <script type="text/javascript">
        if(document.location.hostname == 'pratikborsadiya.in') {
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-72504830-1', 'auto');
          ga('send', 'pageview');
        }
      </script> -->
    </body>
  </html>