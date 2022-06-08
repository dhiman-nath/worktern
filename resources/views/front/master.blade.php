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
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="{{asset('/')}}assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/normalize.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/scrollbar.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/linearicons.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/tipso.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/chosen.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/main.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/color.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/transitions.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/responsive.css">
    <script src="{{asset('/')}}assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="">
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
                <header id="wt-header" class="wt-header wt-haslayout">
                    <div class="wt-navigationarea">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <strong class="wt-logo"><a href="{{route('/')}}"><img src="{{asset('/')}}assets/images/logo.png" alt="company logo here"></a></strong>
                                    <form action="{{route('seller-search')}}" method="get" class="wt-formtheme wt-formbanner wt-formbannervtwo">
                                        @csrf
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" name="service" class="form-control" placeholder="I’m looking for">
                                                <div class="wt-formoptions">
                                                    {{-- <div class="wt-dropdown">
                                                        <span>In: <em class="selected-search-type">Freelancers </em><i class="lnr lnr-chevron-down"></i></span>
                                                    </div>
                                                    <div class="wt-radioholder">
                                                        <span class="wt-radio">
                                                            <input id="wt-freelancers" data-title="Freelancers" type="radio" name="searchtype" value="freelancer" checked="">
                                                            <label for="wt-freelancers">Freelancers</label>
                                                        </span>
                                                        <span class="wt-radio">
                                                            <input id="wt-jobs" data-title="Jobs" type="radio" name="searchtype" value="job">
                                                            <label for="wt-jobs">Jobs</label>
                                                        </span>
                                                        <span class="wt-radio">
                                                            <input id="wt-companies" data-title="Companies" type="radio" name="searchtype" value="job">
                                                            <label for="wt-companies">Companies</label>
                                                        </span>
                                                    </div> --}}
                                                    {{-- <a href="javascrip:void(0);" class="wt-searchbtn"><i class="lnr lnr-magnifier"></i></a> --}}
                                                    <input class="wt-searchbtn lnr lnr-magnifier" value="Search"  type="submit">
                
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <div class="wt-rightarea">
                                        <nav id="wt-nav" class="wt-nav navbar-expand-lg">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                <i class="lnr lnr-menu"></i>
                                            </button>
                                            <div class="collapse navbar-collapse wt-navigation" id="navbarNav">
                                                <ul class="navbar-nav">
                                                    
                                                    
                                                    
                                                    
                                                    <!-- <li class="menu-item-has-children page_item_has_children">
                                                        <a href="javascript:void(0);">Main</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item-has-children page_item_has_children wt-notificationicon"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
                                                                <a href="javascript:void(0);">Home</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="index-2.html">Home v1</a></li>
                                                                    <li class="wt-newnoti"><a href="indexvtwo.html">Home v2<em>without login</em></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
                                                                <a href="javascript:void(0);">Article</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="articlelist.html">Article List</a></li>
                                                                    <li><a href="articlegrid.html">Article Grid</a></li>
                                                                    <li><a href="articlesingle.html">Article Single</a></li>
                                                                    <li><a href="articleclassic.html">Article Classic</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
                                                                <a href="javascript:void(0);">Company</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="companygrid.html">Company Grid</a></li>
                                                                    <li><a href="companysigle.html">Company Sigle</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="about.html">About</a>
                                                            </li>
                                                            <li>
                                                                <a href="privacypolicy.html">Privacy Policy</a>
                                                            </li>
                                                            <li>
                                                                <a href="comingsoon.html">Coming Soon</a>
                                                            </li>
                                                            <li>
                                                                <a href="404page.html">404page</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="howitworks.html">How It Works</a>
                                                    </li>
                                                    <li class="menu-item-has-children page_item_has_children">
                                                        <a href="javascript:void(0);">Browse Jobs</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="joblisting.html">Job Listing</a>
                                                            </li>
                                                            <li class="current-menu-item">
                                                                <a href="jobsingle.html">Job Single</a>
                                                            </li>
                                                            <li>
                                                                <a href="jobproposal.html">Job Proposal</a>
                                                            </li>
                                                        </ul>
                                                    </li> -->
                                                    @if(Auth::id())
                                                    @if(Auth::user()->is_seller==0)
                                                    <li class="nav-item">

                                                        <a href="{{route('seller-gigs')}}">Become a Seller</a>
                                                    </li>
                                                    @endif
                                                    @endif
                                                </ul>
                                            </div>
                                        </nav>
                                        
                                        @if(Auth::id())
                                        
                                        <div class="wt-userlogedin">
                                            <figure class="wt-userimg">
                                                <img src="{{asset('/')}}assets/images/user-img.jpg" alt="image description">
                                            </figure>
                                            <div class="wt-username">
                                                <h3 class="mt-2"><a href="{{route('home')}}">{{Auth::user()->name}}</a></h3>
                                                <!-- 												<span>Amento Tech</span>
                                                -->											</div>
                                                <nav class="wt-usernav">
                                                    <ul>
                                                        <!-- <li class="menu-item-has-children page_item_has_children">
                                                            <a href="javascript:void(0);">
                                                                <span>Insights</span>
                                                            </a>
                                                            <ul class="sub-menu children">
                                                                <li><a href="dashboard-insights.html">Insights</a></li>
                                                                <li><a href="dashboard-insightsuser.html">Insights User</a></li>
                                                            </ul>
                                                        </li> -->
                                                        @if(Auth::id())
                                                        @if(Auth::user()->is_seller == 1)
                                                        <li>
                                                            <a href="{{route('seller-dashboard')}}">
                                                                <span>Dashboard</span>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @endif
                                                        <li>
                                                            <a href="dashboard-profile.html">
                                                                <span>My Profile</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('requests')}}">
                                                                <span>Post a Request</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('requests')}}">
                                                                <span>Manage Requests</span>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="{{route('messages')}}">
                                                                <span>Messages</span>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="{{route('orders')}}">
                                                                <span>Orders</span>
                                                            </a>
                                                        </li>
                                                        <!-- <li class="menu-item-has-children">
                                                            <a href="javascript:void(0);">
                                                                <span>All Jobs</span>
                                                            </a>
                                                            <ul class="sub-menu">
                                                                <li><a href="dashboard-completejobs.html">Completed Jobs</a></li>
                                                                <li><a href="dashboard-canceljobs.html">Cancelled Jobs</a></li>
                                                                <li><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
                                                                <li><a href="dashboard-ongoingsingle.html">Ongoing Single</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-managejobs.html">
                                                                <span>Manage Jobs</span>
                                                            </a>
                                                        </li>
                                                        <li class="wt-notificationicon menu-item-has-children">
                                                            <a href="javascript:void(0);">
                                                                <span>Messages</span>
                                                            </a>
                                                            <ul class="sub-menu">
                                                                <li><a href="dashboard-messages.html">Messages</a></li>
                                                                <li><a href="dashboard-messages2.html">Messages V 2</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-saveitems.html">
                                                                <span>My Saved Items</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-invocies.html">
                                                                <span>Invoices</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-category.html">
                                                                <span>Category</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-packages.html">
                                                                <span>Packages</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-proposals.html">
                                                                <span>Proposals</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-accountsettings.html">
                                                                <span>Account Settings</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-helpsupport.html">
                                                                <span>Help &amp; Support</span>
                                                            </a>
                                                        </li> -->
                                                        <li>
                                                            <a href="#" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">
                                                                <span>Logout</span>
                                                            </a>
                                                            <form id="logoutForm" action="{{route('logout')}}" method="post">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            
                                            @else
                                            <div class="wt-loginarea">
                                                <figure class="wt-userimg">
                                                    <img src="{{asset('/')}}assets/images/user-login.png" alt="img description">
                                                </figure>
                                                <div class="wt-loginoption">
                                                    <a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
                                                    <div class="wt-loginformhold">
                                                        <div class="wt-loginheader">
                                                            <!-- 														<span>Buyer Login</span>
                                                            -->														<a href="javascript:;"><i class="fa fa-times"></i></a>
                                                        </div>
                                                        <div class="wt-formtheme wt-loginform do-login-form">
                                                            <form action="{{route('login')}}" method="post" >
                                                                @csrf
                                                                <fieldset>
                                                                    <div class="form-group">
                                                                        <input required="" type="text" name="email" class="form-control" placeholder="Email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input required="" type="password" name="password" class="form-control" placeholder="Password">
                                                                    </div>
                                                                    <div class="wt-logininfo">
                                                                        <input type="submit" class="wt-btn do-login-button" value="Login">
                                                                    </form>
                                                                    <span class="wt-checkbox">
                                                                        <input id="wt-login" type="checkbox" name="rememberme">
                                                                        <label for="wt-login">Keep me logged in</label>
                                                                    </span>
                                                                </div>
                                                            </fieldset>
                                                            <div class="wt-loginfooterinfo">
                                                                <!-- <a href="javascript:;" class="wt-forgot-password">Forgot password?</a> -->
                                                                <a href="{{route('register')}}">Create account</a>
                                                            </div>
                                                            
                                                        </div>
                                                        <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
                                                            <fieldset>
                                                                <div class="form-group">
                                                                    <input type="email" name="email" class="form-control get_password" placeholder="Email">
                                                                </div>
                                                                
                                                                <div class="wt-logininfo">
                                                                    <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
                                                                </div>     
                                                            </fieldset>
                                                            <div class="wt-loginfooterinfo">
                                                                <a href="javascript:void(0);" class="wt-show-login">Login</a>
                                                                <a href="register.html">Create account</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <a href="{{route('register')}}" class="wt-btn">Join Now</a>
                                            </div>
                                            @endif
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!--Header End-->
                    @yield('body')
                    
                    @include('front.include.footer')
                </div>
                <!--Content Wrapper End-->
            </div>
            <!--Wrapper End-->
            <script src="{{asset('/')}}assets/js/vendor/jquery-3.3.1.js"></script>
            <script src="{{asset('/')}}assets/js/vendor/jquery-library.js"></script>
            <script src="{{asset('/')}}assets/js/vendor/bootstrap.min.js"></script>
            <script src="{{asset('/')}}assets/js/owl.carousel.min.js"></script>
            <script src="{{asset('/')}}assets/js/chosen.jquery.js"></script>
            <script src="{{asset('/')}}assets/js/tilt.jquery.js"></script>
            <script src="{{asset('/')}}assets/js/scrollbar.min.js"></script>
            <script src="{{asset('/')}}assets/js/prettyPhoto.js"></script>
            <script src="{{asset('/')}}assets/js/jquery-ui.js"></script>
            <script src="{{asset('/')}}assets/js/readmore.js"></script>
            <script src="{{asset('/')}}assets/js/countTo.js"></script>
            <script src="{{asset('/')}}assets/js/appear.js"></script>
            <script src="{{asset('/')}}assets/js/tipso.js"></script>
            <script src="{{asset('/')}}assets/js/jRate.js"></script>
            <script src="{{asset('/')}}assets/js/main.js"></script>
        </body>
        
        
        </html>