<header id="wt-header" class="wt-header wt-headervtwo wt-haslayout">
    <div class="wt-navigationarea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <strong class="wt-logo"><a href="{{route('/')}}"><img src="{{asset('/')}}assets/images/logo.png" alt="company logo here"></a></strong>
                    <form action="{{route('seller-search')}}" method="get" class="wt-formtheme wt-formbanner wt-formbannervtwo">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="service" class="form-control" placeholder="Try web designer..">
                                <div class="wt-formoptions">
                                    {{-- <div class="wt-dropdown">
                                        <span>In: <em class="selected-search-type">Freelancers </em><i class="lnr lnr-chevron-down"></i></span>
                                    </div> --}}
                                    {{-- <div class="wt-radioholder">
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
                                    {{-- <i class="lnr lnr-magnifier"></i> --}}
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
                                    <li class="menu-item-has-children page_item_has_children">
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
                                    {{-- <li class="nav-item">
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
                                    </li> --}}
                                    <li class="menu-item-has-children page_item_has_children">
                                        <a href="{{route('/')}}">Switch to Buying</a>
                                        <!-- <ul class="sub-menu">
                                            <li>
                                                <a href="userlisting.html">User Listing</a>
                                            </li>
                                            <li class="current-menu-item">
                                                <a href="usersingle.html">User Single</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- <div class="wt-loginarea">
                            <figure class="wt-userimg">
                                <img src="{{asset('/')}}assets/images/user-login.png" alt="img description">
                            </figure>
                            <div class="wt-loginoption">
                                <a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
                                <div class="wt-loginformhold">
                                    <div class="wt-loginheader">
                                        <span>Login</span>
                                        <a href="javascript:;"><i class="fa fa-times"></i></a>
                                    </div>
                                    <form class="wt-formtheme wt-loginform do-login-form">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-control" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="wt-logininfo">
                                                <a href="javascript:;" class="wt-btn do-login-button">Login</a>
                                                <span class="wt-checkbox">
                                                    <input id="wt-login" type="checkbox" name="rememberme">
                                                    <label for="wt-login">Keep me logged in</label>
                                                </span>
                                            </div>
                                        </fieldset>
                                        <div class="wt-loginfooterinfo">
                                            <a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
                                            <a href="register.html">Create account</a>
                                        </div>
                                    </form>
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
                            <a href="register.html" class="wt-btn">Join Now</a>
                        </div> -->
                        <div class="wt-userlogedin">
                            <figure class="wt-userimg">
                                <img src="{{asset('/')}}assets/images/user-img.jpg" alt="image description">
                            </figure>
                            <div class="wt-username">
                                <h3 class="mt-2">{{Auth::user()->name}}</h3>
                                <!-- <span>Amento Tech</span> -->
                            </div>
                            <nav class="wt-usernav">
                                <ul>
                                    
                                    <li>
                                        <a href="{{route('home')}}">
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('messages')}}">
                                            <span>Messages</span>
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
                                    <!-- <li>
                                        <a href="index-2.html">
                                            <span>Logout</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>