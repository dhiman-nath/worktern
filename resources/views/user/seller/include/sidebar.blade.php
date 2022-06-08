<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
	<div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
		<span class="menu-icon">
			<em></em>
			<em></em>
			<em></em>
		</span>
	</div>
	<div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
		<div class="wt-companysdetails wt-usersidebar">
			<figure class="wt-companysimg">
				<img src="{{asset('/')}}assets/images/sidebar/img-01.jpg" alt="img description">
			</figure>
			<div class="wt-companysinfo">
				<figure><img src="{{asset('/')}}assets/images/user-img.jpg" alt="img description"></figure>
				<div class="wt-title">
					<h2><a href="javascript:void(0);">{{Auth::user()->name}}</a></h2>
					<!-- <span>Amento Tech</span> -->
				</div>
			</div>
		</div>
		<nav id="wt-navdashboard" class="wt-navdashboard">
			<ul>
								<!-- <li class="menu-item-has-children wt-active">
									<a href="javascript:void(0);">
										<i class="ti-dashboard"></i>
										<span>Insights</span>
									</a>
									<ul class="sub-menu">
										<li class="wt-active"><hr><a href="dashboard-insights.html">Insights</a></li>
										<li><hr><a href="dashboard-insightsuser.html">Insights User</a></li>
									</ul>
								</li> -->
								<li>
									<a href="{{route('seller-dashboard')}}">
										<i class="ti-briefcase"></i>
										<span>Dashboard</span>
									</a>
								</li>
								
								<li>
									<a href="{{route('my-gigs')}}">
										<i class="ti-briefcase"></i>
										<span>Gigs</span>
									</a>
								</li>
								<li>
									<a href="{{route('buyer-requests')}}">
										<i class="ti-briefcase"></i>
										<span>Buyer Requests</span>
									</a>
								</li>
								<!-- <li class="menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-package"></i>
										<span>All Jobs</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-completejobs.html">Completed Jobs</a></li>
										<li><hr><a href="dashboard-canceljobs.html">Cancelled Jobs</a></li>
										<li><hr><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
										<li><hr><a href="dashboard-ongoingsingle.html">Ongoing Single</a></li>
									</ul>
								</li>
								<li>
									<a href="dashboard-managejobs.html">
										<i class="ti-announcement"></i>
										<span>Manage Jobs</span>
									</a>
								</li>
								<li class="wt-notificationicon menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-pencil-alt"></i>
										<span>Messages</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-messages.html">Messages</a></li>
										<li><hr><a href="dashboard-messages2.html">Messages V 2</a></li>
									</ul>
								</li>
								<li>
									<a href="dashboard-saveitems.html">
										<i class="ti-heart"></i>
										<span>My Saved Items</span>
									</a>
								</li>
								<li>
									<a href="dashboard-invocies.html">
										<i class="ti-file"></i>
										<span>Invoices</span>
									</a>
								</li>
								<li>
									<a href="dashboard-category.html">
										<i class="ti-layers"></i>
										<span>Category</span>
									</a>
								</li>
								<li>
									<a href="dashboard-packages.html">
										<i class="ti-money"></i>
										<span>Packages</span>
									</a>
								</li>
								<li>
									<a href="dashboard-proposals.html">
										<i class="ti-bookmark-alt"></i>
										<span>Proposals</span>
									</a>
								</li>
								<li>
									<a href="dashboard-accountsettings.html">
										<i class="ti-anchor"></i>
										<span>Account Settings</span>
									</a>
								</li>
								<li>
									<a href="dashboard-helpsupport.html">
										<i class="ti-tag"></i>
										<span>Help &amp; Support</span>
									</a>
								</li> -->
								<!-- <li>
									<a href="index-2.html">
										<i class="ti-shift-right"></i>
										<span>Logout</span>
									</a>
								</li> -->
								<li>
									<a href="#" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">
										<i class="ti-shift-right"></i>
										<span>Logout</span>
									</a>
									<form id="logoutForm" action="{{route('logout')}}" method="post">
										@csrf
									</form>
								</li>
							</ul>
						</nav>
						<div class="wt-navdashboard-footer">
							<span>Easy BD Freelancing. © 2021 All Rights Reserved.</span>
						</div>
					</div>
				</div>