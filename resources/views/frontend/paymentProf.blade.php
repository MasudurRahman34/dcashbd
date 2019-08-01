<!DOCTYPE html>
<html>

<!-- Mirrored from tdbsewallet.com/home/payment_proof by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2019 02:03:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>dcashbd | paymentProf</title>


    <link rel="icon" href="{{asset('frontend/public/img/logo.png')}}" >

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fakeLoader.min.css') }}"> -->


	<!-- Google Fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Lato" rel="stylesheet">  -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Subrayada" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


	<!-- Lightbox2 stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/public/css/new/animate.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/public/css/new/lightbox.css')}}" />

	<!-- bootstrap  styleSheet -->
	<link rel="stylesheet" href="{{asset('frontend/public/css/bootstrap.css')}}">

	<!-- font-awesome  styleSheet -->
	<!-- <link rel="stylesheet" href="https://tdbsewallet.com/public/css/font-awesome.css"> -->
	<link rel="stylesheet" href="{{asset('frontend/public/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css')}}">

	<!-- wow animate  -->
	<link rel="stylesheet" href="{{asset('frontend/public/css/new/animate.css')}}">

	<!-- custom styleSheet -->
	<link rel="stylesheet" href="{{asset('frontend/public/css/new/style.css')}}">

	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('frontend/public/css/new/responsive.css')}}">

	<!-- jquery script -->
	<script src="{{asset('frontend/public/js/new/jquery-3.1.1.js')}}" type="text/javascript"></script>

	<!-- Start of Smartsupp Live Chat script -->



</head>
<style>

.mobile{display:none;}
.logo img{
    max-width: 190px;
    box-shadow: 0 0 30px rgba(255,255,255,0.3);
    margin-top:19px;
}
@media all and (max-width: 768px){
    .mobile{display:block;}
    .desktop{display:none;}
    .nav_mobile{top: 44px !important;}
    .helpLine{
        background: #fffff2;
        top: 20px;
        position: fixed;
        z-index: 9;
        left: 0;
        right: 0;
        text-align: center;
        border-bottom: 0.1px solid #ddd;
        padding: 2px;
    }
    .logo img{
        margin-top:-15px;
    }
    .nav-background ul.nav-ul li a{color:#333 !important;}
    .service_date{
        position:fixed;
        z-index:9;
    }
    .service_date .info{
        text-align: left;
        position: fixed;
        top: 0;
        background: #fff;
        color: #333 !important;
    }
}
    
	.navbar{min-height:85px; /*background:rgba(0,0,0,0.5);*/ top:0;}
	.nav-background ul.nav-ul{padding-top: 0;}
	.carousel-caption{color: #42B20F; text-shadow: 0 1px 5px rgba(255,255,255,.6);}
</style>
<body class="wow fadeIn">
    
    <div class="mobile service_date col-sm-12">
        <div class="row">
	      <div style="margin-bottom: 10px;">
            <div class="col-xs-6 mobile info" style="text-align:left;left:0;">
                    Service Time: 9 AM - 11 PM
            </div>
            <div class="col-xs-6 mobile info text-right" style="right:0">
                Fri-Jul-2019 &nbsp;&nbsp;<span id="time1"></span> am            </div>
	      </div>
        </div>
    </div>
   <div class="mobile helpLine">Helpline: 01715222938 OR 01650271792 | Skype: skype</div>
	 
    
	<nav class="navbar navbar-default nav_mobile nav-background">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand nav-brand logo" href="{!! url('/d') !!}" style="margin-left: 10px;">
              <img class="img-responsive" src="{{asset('frontend/public/img/logo3.png')}}" style="">
          </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	      <style>
            .active .collapse .md15 .desktop {color: #000;}
	        .md15 { width: 100%; height: auto; display: block; margin: -15px; padding: -15px; overflow: auto; clear: both; position: relative; top: -28px; right: -30px; }
	        .md15 .info { float: left; overflow: auto; font-weight: bold; color: #fff; display: block; text-align: right; }
	        .md15 .online-icon span i { color: #0bc10b; box-shadow: 0 0 6px rgba(18, 193, 18, 0.6), 0 0 12px rgba(106, 255, 0, 0.7); border-radius: 50%; font-size: 18px;}
	        .online { display:block; }
	        .on, .off {display: none;}
	      	.btn-new{ border: 1px solid #9C27B0; padding: 10px !important; margin-top: 10px !important; background: #9C27B0; color: #fff !important;}
	      	.btn-new:hover{ background: #fff !important; color: #9C27B0 !important;}
	      	.online-icon {width: 50%; float: left; text-align: right;}
	      	.active_icon { color: #00ba51; box-shadow: 0 0 6px rgba(18, 193, 18, 0.6), 0 0 12px rgba(106, 255, 0, 0.7); border-radius: 50%;}
	      </style>
          
          
          
            <div class="col-sm-12">
                <div class="row">
        	      <div class="md15" style="margin-bottom: 10px;">
                    <div class="col-xs-6 desktop info" style="text-align:left;">
                        <div class="row">
                            Fri-Jul-2019 &nbsp;&nbsp; <span id="time2"></span> am | Service Time: 9am - 11pm
                        </div>
                    </div>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-4 desktop info text-right">
                        <div class="row">
                            Whatsapp - 01650271792
                        </div>
                    </div>
        	      </div>
                </div>
            </div>
            
            
	      <div class="md15">
	          <div class="online-icon">
                <span style="color: rgb(255,255,255);font-weight:bold;"> Admin </span>
                <span>
                    <i class="fa fa-circle fa-lg" aria-hidden="true"></i>
                    <span style="color: rgb(255,255,255);font-weight:bold;" id="status">Online</span>
                </span>
            </div>

	          <div class="desktop info" style="width: 50%;">Helpline: 01715222938 OR 01650271792 | Skype: skype</div>
	      </div>

	      <ul class="nav navbar-nav navbar-right nav-ul">
	        <li><a href="{!! url('/d') !!}">Home</a></li>
	         <li><a href="{!! url('/d#trns') !!}">LT Transaction</a></li>
	        <!--<li><a href="index.html#home">Home</a></li> -->
	        <li><a href="{!! url('/d#service') !!}">Service</a></li>
	        <li><a href="{!! url('/d#about') !!}">About</a></li>
	        <!-- <li><a href="home/faq.html">FAQs</a></li> -->
	       
	        <li><a href="{!! url('/d#contact') !!}">Contact</a></li>
	        <li><a class="btn-new" style="margin-right: 5px;" href="{{route('login')}}">Sign In</a></li>
	        <li><a class="btn-new" href="{{route('register')}}">Sign Up</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
<!-- nav end -->




 
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time1').innerHTML = h + ":" + m + ":" + s;
        document.getElementById('time2').innerHTML = h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
     window.onload=startTime;
</script>
<style>
@media screen and (max-width: 768px) {
    .mobile-top-margin {margin-top: 50px;}
}
</style>

<div class="container-fluid" style="background:#ddd;height: 5px; margin-top: 100px;"></div>

<div class="container-fluid mobile-top-margin">
    <div class="row">
    
        <div class="col-md-2"></div>
        <div class="col-md-4">
              	            <h3>Buy Proof</h3>
	            <table class="table table-bordered">
	                <tr>
	                    <th>Date</th>
	                    <th>Name</th>
	                    <th>Method</th>
	                    <th>Amount</th>

	                </tr>
	                
                  @foreach (App\model\transaction::where('status', 1)->limit(10)->latest('updated_at')->get() as $trns)
                          
                          	
                          @if ($trns->type=='Buy')
                                 	{{-- expr --}}
                                        
                            <tr>
                    
	                    <td>{{ date('d-m-y', strtotime($trns->updated_at)) }}</td>
	                    <td>{{$trns->userName}}</td>
	                    <td><img src="{{ asset('img/currency/'.$trns->recieveMethod.'.jpg') }}" style="margin-top:0;border-radius:50%;width:30px;height:30px;" /></td>
	                    <td>{{number_format($trns->recieveAmount, 2)}} &#x24</td>
	                </tr>
	                @endif
                   @endforeach
	             </table>
                   </div>
        
        <div class="col-md-4">
              	            <h3>Sell Proof</h3>
	            <table class="table table-bordered">
	            
	                <tr>
	                    <th>Date</th>
	                    <th>Name</th>
	                    <th>Method</th>
	                    <th>Amount</th>
	                </tr>
	                
	                	                @foreach (App\model\transaction::where('status', 1)->limit(10)->latest('updated_at')->get() as $trns)
                          
                          	
                          @if ($trns->type=='Sell')
                                 	{{-- expr --}}
                                        
                            <tr>
                    
	                    <td>{{ date('d-m-y', strtotime($trns->updated_at)) }}</td>
	                    <td>{{$trns->userName}}</td>
	                    <td><img src="{{ asset('img/currency/'.$trns->sendMethod.'.jpg') }}" style="margin-top:0;border-radius:50%;width:30px;height:30px;" /></td>
	                    <td>{{number_format($trns->sendAmount, 2)}} &#x24</td>
	                </tr>
	                @endif
                   @endforeach
	                	            </table>
                      </div>
        
        <div class="col-md-4">
                      </div>
        
    </div>
</div>
<style>
    footer {
        background: #3b3b3b;
        padding-top: 100px;
        padding-bottom: 100px;
        text-align: center;
        position: relative;
    }
    footer h1 {
        font-size: 2rem;
        font-weight: 300;
        text-transform: uppercase;
        color: #fff;
        margin-bottom: .5rem;
    }
    footer h1 span {
        color: #9C27B0;
        font-weight: 700;
    }
    footer p {
        color: #fff;
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        font-weight: 300;
        margin-bottom: 30px;
    }
    footer ul {
        padding-left: 0;
        list-style: none;
    }
    footer ul li {
        display: inline-block;
        margin: 5px;
    }
    footer ul li a {
        display: block;
        width: 40px;
        height: 40px;
        padding: 5px;
        text-align: center;
        line-height: 30px;
        color: #fff;
        background-color: rgba(255,255,255,0.06);
        transition: 0.3s;
    }
    footer ul li a:hover {
        text-decoration: none;
        background-color: #9C27B0;
        color: #fff;
    }
    .back-to-top {
        position: fixed;
        right: 15px;
        bottom: 15px;
        background-color: #3c3c3c;
        width: 30px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        border-radius: 16px;
    }
    .back-to-top:before {
        content: "";
        display: block;
        width: 30px;
        height: 6px;
        position: absolute;
        bottom: -9px;
        right: 0;
        background-color: rgba(0, 0, 0, 0.15);
        -webkit-filter: blur(2px);
        filter: blur(2px);
        border-radius: 50%;
    }
    .back-to-top ion-icon {
        color: #fff;
        font-size: 20px;
        height: 60px;
    }
</style>
<footer>
	<h1>DCASHBD <span>Wallet</span></h1>
	<p>The trusted way ot buy sell and exchange dollar online in Bangladesh.</p>
	<p>2019 © DCASHBD Wallet.</p>
	<ul>
		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="#"><i class="fa fa-youtube"></i></a></li>
		<li><a href="#"><i class="fa fa-instagram"></i></a></li>
	</ul>
	<!-- a href="#" class="back-to-top">
		<!-- ion-icon name="arrow-up"></ion-icon -->
	</a -->
</footer>


	
	<script src="{{asset('frontend/public/js/new/bootstrap.js')}}" type="text/javascript"></script>
	<!-- Lightbox2 Script -->


	<script src="{{asset('frontend/public/js/new/lightbox.js')}}" type="text/javascript"></script>
	<!-- bootstrap script -->


	<!-- custom script -->
	<script src="{{asset('frontend/public/js/new/script.js')}}" type="text/javascript"></script>
	<script src="{{asset('frontend/public/js/new/script.js')}}" type="text/javascript"></script>
	<!-- light box start -->
	<!-- wow animation -->
	<script src="{{asset('frontend/public/js/new/wow.js')}}" type="text/javascript"></script>

    <script src="{{asset('frontend/public/unpkg.com/ionicons%404.1.1/dist/ionicons.js')}}"></script>

		<script>
	    wow = new WOW(
	      {
	        animateClass: 'animated',
	        offset:       100,
	        callback:     function(box) {
	          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
	        }
	      }
	    );
	    wow.init();
	    document.getElementById('moar').onclick = function() {
	      var section = document.createElement('section');
	      section.className = 'section--purple wow fadeInDown';
	      this.parentNode.insertBefore(section, this);
	    };
	  </script>

		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2PlnZawipfMHVDvkKBV5WCZ_ATektARo"></script>
	  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(24.758829, 90.389245), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [
							    {
							        "featureType": "administrative",
							        "elementType": "labels.text.fill",
							        "stylers": [
							            {
							                "color": "#727272"
							            },
							            {
							                "lightness": "0"
							            },
							            {
							                "weight": "5.15"
							            }
							        ]
							    },
							    {
							        "featureType": "administrative",
							        "elementType": "labels.text.stroke",
							        "stylers": [
							            {
							                "visibility": "off"
							            }
							        ]
							    },
							    {
							        "featureType": "landscape.man_made",
							        "elementType": "geometry.fill",
							        "stylers": [
							            {
							                "color": "#c7dedf"
							            }
							        ]
							    },
							    {
							        "featureType": "landscape.natural",
							        "elementType": "all",
							        "stylers": [
							            {
							                "color": "#ebd882"
							            }
							        ]
							    },
							    {
							        "featureType": "poi.park",
							        "elementType": "geometry.fill",
							        "stylers": [
							            {
							                "color": "#9ec48d"
							            }
							        ]
							    },
							    {
							        "featureType": "road",
							        "elementType": "geometry.fill",
							        "stylers": [
							            {
							                "color": "#ffffff"
							            }
							        ]
							    },
							    {
							        "featureType": "road",
							        "elementType": "labels.text.fill",
							        "stylers": [
							            {
							                "color": "#000000"
							            }
							        ]
							    },
							    {
							        "featureType": "road",
							        "elementType": "labels.text.stroke",
							        "stylers": [
							            {
							                "visibility": "off"
							            }
							        ]
							    },
							    {
							        "featureType": "road.highway",
							        "elementType": "geometry.fill",
							        "stylers": [
							            {
							                "visibility": "on"
							            }
							        ]
							    },
							    {
							        "featureType": "road.highway",
							        "elementType": "geometry.stroke",
							        "stylers": [
							            {
							                "visibility": "off"
							            }
							        ]
							    },
							    {
							        "featureType": "road.local",
							        "elementType": "geometry.fill",
							        "stylers": [
							            {
							                "visibility": "on"
							            }
							        ]
							    },
							    {
							        "featureType": "water",
							        "elementType": "geometry",
							        "stylers": [
							            {
							                "visibility": "on"
							            },
							            {
							                "color": "#78c3c9"
							            }
							        ]
							    }
							]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.758829, 90.389245),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
</body>

<!-- Mirrored from tdbsewallet.com/home/payment_proof by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2019 02:03:16 GMT -->
</html>
