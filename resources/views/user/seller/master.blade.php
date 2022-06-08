<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Worktern</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="{{asset('/')}}assets/images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/normalize.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/scrollbar.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/themify-icons.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/jquery-ui.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/linearicons.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/tipso.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/chosen.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/main.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/dashboard.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/color.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/transitions.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/responsive.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/dbresponsive.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/chat.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	-->	<script src="{{asset('/')}}assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="wt-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- Preloader Start -->
		<div class="preloader-outer">
			<div class="loader"></div>
		</div>
		<!-- Preloader End -->
		<!-- Wrapper Start -->
		<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
			<!-- Content Wrapper Start -->
			<div class="wt-contentwrapper">
				<!-- Header Start -->
				@include('user.seller.include.header')
				<!--Header End-->
				<!--Main Start-->
				<main id="wt-main" class="wt-main wt-haslayout">
					<!--Sidebar Start-->
					@include('user.seller.include.sidebar')
					<!--Sidebar Start-->
					<!-- Alert Boxes Start -->
					<!-- <div class="wt-haslayout wt-jobalertsdashboard">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="wt-jobalerts">
									<div class="alert alert-warning alert-dismissible fade show">
										<em>Alert:</em> <span> You’ve consumed all you points to apply new job,</span>
										<a href="javascript:void(0)" class="wt-alertbtn warning">Buy Now</a>
										<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="wt-jobalerts">
									<div class="alert alert-primary alert-dismissible fade show">
										<em>info: </em> <span> You’ve no skills of “PHP” but still you can apply for this job.</span>
										<a href="javascript:void(0)" class="wt-alertbtn primary">View</a>
										<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="wt-jobalerts">
									<div class="alert alert-success alert-dismissible fade show">
										<em>Congratulation!</em> <span> we've received payment against your selected package Congratulation!:  “Extended Plan” and its valid till “Jun 27, 2019”</span>
										<a href="javascript:void(0)" class="wt-alertbtn success">Got It</a>
										<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="wt-jobalerts">
									<div class="alert alert-danger alert-dismissible fade show">
										<em>You’re Late:</em> <span> We’re sorry but the job you want to apply is no longer available You’re Late:  for public/freelancers anymore.</span>
										<a href="javascript:void(0)" class="wt-alertbtn danger">Got It</a>
										<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- Alert Boxes End -->
					<!--Register Form Start-->
					@yield('body')
					<!--More Details End-->
				</main>
				<!--Main End-->	
			</div>
			<!--Content Wrapper End-->
		</div>
		<!--Wrapper End-->
		@include('user.seller.include.scripts')
		
		
		
		
		
		
	</body>
	
	</html>