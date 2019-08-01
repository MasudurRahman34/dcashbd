<!DOCTYPE html>
<html>


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>dcashbd | Home</title>


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

	<script>
         $(document).ready(function(){
             hitting();
             setInterval(function(){
                 hitting();
             },5000);
         });

         // function hitting(){

         //     $.ajax({
         //        url: 'https://tdbsewallet.com/home/check_user',
         //        type: 'POST',
         //     }).done(function(response) {
         //         console.log(response);
         //        if(response=="1"){
         //          $(".online-icon > span > i").addClass("active_icon");
         //          $("#status").html("Online");
         //        }else{
         //          $(".online-icon > span > i").removeClass("active_icon");
         //          $("#status").html("Offline");
         //        }
         //    });
         // }
     </script>
     
     <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5be2abf50e6b3311cb783f32/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script> -->
    <!--End of Tawk.to Script-->

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
	      <a class="navbar-brand nav-brand logo" href="index.html" style="margin-left: 10px;">
              <img class="img-responsive" src="{{asset('frontend/public/img/logo3.png')}}" style="">  <!-- <h2 style="color: red;">DCASHBD</h2> -->
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
	      	.active_icon { color: green; box-shadow: 0 0 6px rgba(18, 193, 18, 0.6), 0 0 12px rgba(106, 255, 0, 0.7); border-radius: 50%;}
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
                            Whatsapp -01650271792
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

            <li><a href="{!! url('#home') !!}">Home</a></li>
            <li><a href="{!! url('#trns') !!}">LT Transaction</a></li>
	        <!--<li><a href="index.html#home">Home</a></li> -->
	        <li><a href="{!! url('#service') !!}">Service</a></li>
            <li><a href="{!! url('#about') !!}">About</a></li>
	        <li><a href="{!! route('paymentProf') !!}">Payment Prof</a></li>
	        <!-- <li><a href="home/faq.html">FAQs</a></li> -->
	       
	        <li><a href="{!! url('#contact') !!}">Contact</a></li>
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
.carousel-inner > .item > img {
    filter: brightness(1.0); 
}
.carousel-caption {
    color: rgb(255, 255, 255);
}
.carousel-indicators{display: none;}
.carousel-inner img {height: 100vh;}
@media all and (max-width:768px){
    .cover{
        margin-top: 85px;
        padding-top: 15px;
    }
}
</style>

<!-- header start -->
	<header id="home">
		<div class="slider wow fadeIn">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <!--li data-target="#carousel-example-generic" data-slide-to="2"></li-->
			  </ol>

			  <div class="carousel-inner" role="listbox">
				 
			    <div class="item active">
				    <div class="cover">
				      <img style="/*-webkit-filter: grayscale(100%); filter: grayscale(100%);*/ width:100%;" src="{{asset('frontend/public/img/new/Sydney.jpg')}}" alt="...">
                      <!-- <img style="/*-webkit-filter: grayscale(100%); filter: grayscale(100%);*/ width:100%;" src="{{asset('frontend/public/img/new/slider-2.jpg')}}" alt="..."> -->

				      <div class="carousel-caption animated lightSpeedIn">

				       	<article>
				       		<h1>Welcome to Dcashbd !</h1>
					        <p>Quick and Easy Exchange USD to BDT</p>
				       	</article>
				       	<ul>
				       		<li><a href="access/subscriber/login.html">Sign In</a></li>
				       		<li><a href="home/signup.html">Sing Up</a></li>
				       	</ul>	       	

				      </div>
				    </div>
			    </div>

			    <div class="item">
			      <img src="{{asset('frontend/public/img/new/b.jpg')}}" alt="...">

			      <div class="carousel-caption">

			       	<article>
			       		<h1>Dollar Buy,Sell and Exchange!</h1>
				        <p>dbcashbd Wallet First Track Anytime Anywhere</p>
			       	</article>
			       	<ul>
			       		<li><a href="access/subscriber/login.html">Sign In</a></li>
			       		<li><a href="home/signup.html">Sing Up</a></li> 
			       	</ul>

			      </div>

			    </div>
			    
			  </div>

			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</header>
<!-- header end --><style>
.service_area01{
	background: #9C27B0;
	color: #fff;
/*	margin-bottom: 45px;*/
}
.service_area01 span{
	padding: 30px;
    display: block;
}
.service_area01 i{
	display: block;
	font-size: 50px;
}
.style_prevu_kit{
	display:inline-block;
    border:0;
    position: relative;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1);
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1);
    transition: all 200ms ease-in;
    transform: scale(1);
}
a:hover{text-decoration: none;}
.style_prevu_kit:hover{
	background: #9C27B0;
	box-shadow: 0px 0px 150px #000000;
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.2);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.2);
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.2);
    transition: all 200ms ease-in;
    transform: scale(1.2);
}

<style>
*{box-sizing: border-box;}
.ln_wrapper{
	overflow: hidden;
	width: 100%;
	position: relative;
    margin: 0 auto;
    height: 64px;
    /*margin-bottom:20px;*/
}
.numHide {border-bottom: 1px solid #fff;}
.ln_left{
	width: 15%;
	min-width: 120px;
	float: left;
	background: #9C27B0;
	text-align: center;
}
.ln_left p{
	margin: 0;
	padding: 17px 0;
	color: #fff;
	text-transform: uppercase;
	font-size: 18px;
}
.ln_right{
	width: 85%;
	overflow: hidden;
	background: #6A6A6A;
	position: absolute;
	right: 0;
}
.ln_right ul{
	list-style-type: none;
	padding-left: 0;
	margin: 0;
}
.ln_right ul li{
	display: inline-block;
	overflow: hidden;
	padding: 7px 0;
	line-height: 53px;
	color: #000;	    
}
.ln_right ul li a{
        text-decoration: none;
        color: #fff;
}
.ln_right ul li a:hover{
	color: #fff;
}
.register-hover a:hover{
	text-decoration: none;
	background: #fff;
	color: #333 !important;
	border: 1px solid #333 !important;
}

/* CSS FOR RESPONSIVE */
@media screen and (max-width: 1024px){
    .contact .content {
        padding: 0px 0px;
    }
}
@media screen and (max-width: 768px){
    .ln_wrapper {
        overflow: auto;
        height: auto;
        position: static;
        margin-bottom: 0;
    }
    .ln_left {
        width: 100%;
        min-width: 100%;
        display: block;
        float: none;
    }
    .ln_right {
        width: 100%;
        min-width: 100%;
        display: block;
        float: none;
        position: static;
    }
    .numHide {border-bottom: 1px solid #fff;}
}
@media screen and (max-width: 650px){
	.ln_left_arrow{
		display: none;
	}
	.ln_right{
		z-index: -100;
	}
}
</style>


<div class="container-fluid">
    <div class="row"> 		  
		      
	<div class="col-md-10">
	    <div class="row">
	        <div class="ln_wrapper">
		    <div class="ln_left">
			<p>Latest News</p>
		    </div>
		      <div class="ln_right marquee" data-duration='15000'>
		      	  <ul>
		      	      		      	          <li><a target="_blank" href="home/notice.html"></a></li>
		      	      		      	  </ul>	      	  
		      </div>
		</div>
	    </div>
	</div>
	
	<div class="col-md-2 numHide">
	    <div class="row" style="background: #9C27B0;">
	        <p style="line-height: 64px; font-size: 20px; text-align: center; margin-bottom: 0; color: #fff;">Skype: skype</p>
	    </div>
	</div>
	
    </div>
</div>




<!-- last ten transaction start -->
    <section id="trns" class="product" style="background: rgba(120, 192, 30,0.05);">
        <div class="container">
            <div class="row">
                
                <div class="head wow fadeIn">
                    <div class="col-sm-8 col-sm-offset-2">
                        <article>
                            <h1 class="text-center">Latest Transaction</h1>
                            <div class="hr"></div>
                        </article>
                    </div>
                </div>

                <div class="content">
                    
                    <div class="col-md-12 wow zoomIn">
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Send</th>
                                <th>Receive</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                                @php
                   $i=1;
                @endphp
                                @foreach (App\model\transaction::where('status', 1)->limit(10)->latest('updated_at')->get() as $trns)
                                   
                            <tr>
                    <td>{{$i}}</td>
                  
                  <td><img width="30" src="
                    {{ asset('img/currency/'.$trns->sendMethod.'.jpg') }}"> {{ $trns->sendMethod}}</td>
                  <td><img width="30" src="
                    {{ asset('img/currency/'.$trns->recieveMethod.'.jpg') }}">{{ $trns->recieveMethod}}</td>
                   <td>{{number_format($trns->recieveAmount, 2)}}
                       @switch($trns->type)
                        @case('Buy')
                            <span class="font-weight-bold" style=" font-family: -webkit-body;">&#x24</span></td>
                            @break
                    
                        @default
                              <span class="font-weight-bold" style=" font-family: -webkit-body;">&#2547</span></td>
                    @endswitch

                   </td>
                   <td>{{ date('d-m-y', strtotime($trns->updated_at)) }}</td>
        
                    <td><span class="{{$trns->status==0 ? 'badge badge-warning': ($trns->status==1 ? 'badge badge-dark' : 'badge badge-danger')}}"> {{$trns->status==0 ? 'Requested': ($trns->status==1 ? 'Completed' : 'Refused')}}</span></td>
                  </tr>
                @php
                  $i++;
                @endphp
                   @endforeach
                            


                            
                            
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- last ten transaction end -->








<div class="container-fluid">
	<div class="row service_area01">
		<div class="container">
			<div class="row">

				<div class="col-md-4">
					<div class="row">
						<span class="text-center style_prevu_kit">
							<i class="fa fa-money"></i>
							<h3><b>BUY</b> Dollar</h3>
							<p style="font-size: 14px;">
							    You can Buy maximum of <b>$&nbsp;100</b> USD<br>
								You can Buy minimum of <b>$&nbsp;5</b> USD
							</p>
						</span>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<span class="text-center style_prevu_kit">
							<i class="fa fa-shopping-cart"></i>
							<h3><b>SELL</b> Dollar</h3>
							<p style="font-size: 14px;">
							    You can Sell maximum of <b>$&nbsp;100</b> USD<br>
								You can Sell minimum of <b>$&nbsp;5</b> USD
							</p>
						</span>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<span class="text-center style_prevu_kit">
							<i class="fa fa-exchange"></i>
							<h3><b>EXCHANGE</b> Dollar</h3>
							<p style="font-size: 14px;">
							    You can Exchange maximum of <b>$&nbsp;0</b> USD<br>
								You can Exchange minimum of <b>$&nbsp;0</b> USD
							</p>
						</span>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>



    <style>
    	/* h2{overflow: auto;}
    	h2 img{max-width: 150px !important; float: left; } */
    	.col-md-1 .img-responsive {display: block; margin: 5px auto;}
    </style>
	<!--section class="service-footer wow bounceInLeft" style="margin-top: 8rem;">
		<!--article class="container-fluid">
			<h4 class="text-center" style="color:#000;">We Accept</h4>
			<h2 class="text-center" style="color: #999;">
				<div class="col-md-3"></div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/p.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/skrill.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/neteller.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/btc.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/payneer.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/pm.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/PayPal.png">
				</div>
				<div class="col-md-3"></div>
			</h2>
		</article-->

		<!--article class="container-fluid">
			<h2 class="text-center" style="color: #999; margin-top: 0;">
				<div class="col-md-3"></div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/pm.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/bkash.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/bracbank.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" style="padding: 3.5px 0;" src="https://tdbsewallet.com/public/images/rocket.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/dbbl.jpg">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3" style="border: 1px solid #ddd;">
					<img class="img-responsive row" src="https://tdbsewallet.com/public/images/neteller.jpg">
				</div>

				<div class="col-md-3"></div>
			</h2>
		</article-->

		<!-- style>
			.fbGroup{
			    color: #fff;
			    background: #00ba51;
			    text-decoration: none;
			    font-size: 35px;
			    padding: 10px 25px;
			    border: 2px solid #00ba51;
			    border-radius: 4px;
			}
			.fbGroup:hover{
				background: #fff;
				color: #00ba51;
				text-decoration: none;
			}
		</style>

		<div class="container-fluid text-center col-md-offset-3 col-md-6" style="position: static;
    margin-top: 30px;">
			<a class="fbGroup" href="#" target="_blank">Join Our Facebook Group</a>
		</div -->

	</section-->


<!-- we accept footer end -->








<!-- product start -->
	<section id="service" class="product">
		<div class="container">
			<div class="row">

				<div class="head wow fadeIn">
					<div class="col-sm-8 col-sm-offset-2">
						<article>
							<h1 class="text-center">Services</h1>
							<div class="hr"></div>
							<p class="text-center">
								<h2>Payment Processing Time 5-20 Minutes</h2>
							</p>
						</article>


					</div>
				</div>




				<div class="content">


					<div class="col-md-4">
						<div class="content-item wow zoomIn" style="background: #9C27B0; color: #fff;">
							<div class="icon" style="background: #fff; color: #9C27B0;">
								<i class="fa fa-money"></i>
							</div>


							<article>
								<p>
									Dollar Buy, Sell, Exchange
								</p>
							</article>

						</div>
					</div>


					<div class="col-md-4">
						<div class="content-item wow zoomIn" style="background: rgba(0,0,0,0.8); color: #fff;">
							<div class="icon" style="background: #fff; color: rgba(0,0,0,0.8);">
								<i class="fa fa-exchange"></i>
							</div>


							<article>
								<p>
									Instant Payment
								</p>
							</article>

						</div>
					</div>





					<div class="col-md-4">
						<div class="content-item wow zoomIn" style="background: #9C27B0; color: #fff;">
							<div class="icon" style="background: #fff; color: #9C27B0;">
								<i class="fa fa-globe"></i>
							</div>


							<article>
								<p>
									Quick Reply
								</p>
							</article>

						</div>
					</div>



					<div class="col-md-4">
						<div class="content-item wow zoomIn" style="background: rgba(0,0,0,0.8); color: #fff;">
							<div class="icon" style="background: #fff; color: rgba(0,0,0,0.8);">
								<i class="fa fa-calendar-check-o"></i>
							</div>


							<article>
								<p>
								1% Referral Commission System
								</p>
							</article>

						</div>
					</div>



					<div class="col-md-4">
						<div class="content-item wow zoomIn" style="background: #9C27B0; color: #fff;">
							<div class="icon" style="background: #fff; color: #9C27B0;">
								<i class="fa fa-calendar"></i>
							</div>


							<article>
								<p>
									Direct Referral Income
								</p>
							</article>

						</div>
					</div>



					<div class="col-md-4">
						<div class="content-item wow zoomIn" style="background: rgba(0,0,0,0.8); color: #fff;">
							<div class="icon" style="background: #fff; color: rgba(0,0,0,0.8);">
								<i class="fa fa-cogs"></i>
							</div>


							<article>
								<p>
									24 Hours Reply
								</p>
							</article>

						</div>
					</div>



				</div>






			</div>
		</div>
	</section>
<!-- product end -->













<!-- about start -->
	<section id="about" class="about">
		<div class="container">
			<div class="row">

				<div class="head wow fadeIn">
					<div class="col-sm-8 col-sm-offset-2">
						<article>
							<h1 class="text-center">About Us</h1>
							<div class="hr"></div>

						</article>
					</div>
				</div>




				<div class="content">

				    <div class="col-sm-6">
						<div class="right-side wow bounceInRight">
							<figure>
								<img src="{{asset('frontend/public/img/new/bgTop.jpg')}}" alt="" class="img-responsive img-thumbnail">
							</figure>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="left-side wow bounceInLeft">
							<article>
								<h3>Welcome To <span class="color">DCASHBD Wallet</span></h3>
								<p>
									Bangladesh all online money maker welcome to DCASHBD E Wallet. Honourable all members can Buy, Sell and Exchange Doller to Taka just in 5-15 minutes. To make Bangladesh rich, developed and digital country we always with you.<br>We think it will be easy and faster way to all users who wants to Buy, Sell or Exchange dollar from online in a trustworthy way. Its so flixible. User could sell their Doller in a reasonable price and also could buy dollar with a reasonable price. User could also exchange dollar with a flexible rate.
								</p>

							</article>
						</div>
					</div>

				</div>



			</div>
		</div>
	</section>
<!-- about end -->











<!-- new area start -->
	<section id="faq" style="background: #9C27B0; color: #fff;">
		<div class="container">
			<div class="row">
				<h1 style="padding: 50px 0;" class="text-center">DCASHBD Wallet – Dollar Buy, Sell, Exchange Solution</h1>
			</div>
		</div>
	</section>
<!-- new area start -->







<!-- contact start -->
	<section id="contact" class="contact" style="background: rgba(156,39,176, 0.1);">
		<div class="container">
			<div class="row">
				<div class="head wow fadeIn">
					<article>
						<h1 class="text-center">Get In touch</h1>
						<div class="hr"></div>
					</article>
				</div>


				<div class="content">
					<div class="col-sm-6 wow bounceInLeft">
					   						<div class="row">
						  <form accept-charset="utf-8">								<div class="col-md-6">
									<input type="text" name="name" required placeholder="Enter Your Name">
								</div>

								<div class="col-md-6">
									<input type="email" name="email" required placeholder="Enter Your Email">
								</div>

								<div class="col-md-12">
									<input type="text" name="subject" placeholder="Enter Your Subject">
									<textarea rows="8" name="message" required placeholder="Enter Your Message"></textarea>
									<input type="submit" value="Send Message">

								</div>
							</form>						</div>
					</div>

					<!-- <div class="col-sm-6 wow bounceInRight">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.2875677739!2d90.27937135836183!3d23.780628608238086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1499340602441" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div> -->

					<style>
						@media screen and (min-width: 992px){}
							.contact {
								padding: 50px 0px 0;
							}
						}
					</style>

					<div class="col-sm-6 wow bounceInRight contact-image">
					     <img style="width:100%; height: 540px; margin-top: -42px;" src="{{asset('frontend/public/dollarpaying.com/public/img/image%20update.png')}}" alt="image Not Found !">
					</div>

				</div>




			</div>
		</div>
	</section>
	
<!-- contact end -->
	<script src="{{asset('frontend/public/cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js')}}" type="text/javascript"></script> 
	
	<script>
	$(document).ready(function(){
	    $('.marquee').marquee({
		 pauseOnHover: true
	    });
	});
	</script>
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

<!-- Mirrored from tdbsewallet.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2019 02:03:10 GMT -->
</html>
