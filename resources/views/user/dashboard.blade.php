@extends('user.master')

@section('body')
@if(Session::get('message'))
<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
	<div class="wt-jobalerts">
		<div class="alert alert-success alert-dismissible fade show">
			<span>{{Session::get('message')}}</span>
			<a href="javascript:void(0)" data-dismiss="alert" class="wt-alertbtn success">Got It</a>
			<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
		</div>
	</div>
</div>
@endif
<section class="wt-haslayout wt-jobpostedholder">

	<div class="row">

		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">

			<div class="wt-haslayout wt-dbsectionspace">
				
				<div class="wt-dashboardbox">
					<div class="wt-dashboardboxtitle wt-yeartag">
						<h2>Job Posted</h2>
						{{-- <div class="wt-tag wt-widgettag">
							<a href="javascript:void(0);">2019</a>
							<a href="javascript:void(0);">2018</a>
							<a href="javascript:void(0);">2017</a>
						</div> --}}
					</div>
					<div class="wt-dashboardboxcontent">
						{{-- <div id="wt-postedsilder" class="wt-postedsilder owl-carousel">

							<div class="item">
								<div class="wt-posteditem">
									<span><i class="fa fa-check-circle"></i><a href="javascript:void(0);"> Louanne Mattioli</a></span>
									<h3>dfdvd</h3>
								</div>
							</div>
							
						</div> --}}
						<div class="wt-jobchartholder">
							<canvas id="wt-jobchart" class="wt-jobchart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
			<div class="wt-haslayout wt-dbsectionspace">
				<div class="wt-dashboardbox">
					<div class="wt-dashboardboxtitle">
						<h2>Current Hired Freelancers</h2>
					</div>
					<div class="wt-dashboardboxcontent wt-hiredfreelance">
						<div class="wt-userlistinghold wt-featured">
							<span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content"></span>
							<figure class="wt-userlistingimg">
								<img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="image description" class="img description">
							</figure>
							<div class="wt-proposaldetails">
								<div class="wt-contenthead">
									<div class="wt-title">
										<h3><a href="javascript:void(0);">Terrence Tynan</a><span>Project Title Goes Here</span></h3>
										<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
									</div>
								</div>													
							</div>	
						</div>
						<!-- <div class="wt-userlistinghold wt-featured">
							<figure class="wt-userlistingimg">
								<img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="image description" class="img description">
							</figure>
							<div class="wt-proposaldetails">
								<div class="wt-contenthead">
									<div class="wt-title">
										<h3><a href="javascript:void(0)">Aileen Remington</a><span>Project Title Goes Here</span></h3>
										<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
									</div>
								</div>												
							</div>	
						</div>
						<div class="wt-userlistinghold wt-featured">
							<figure class="wt-userlistingimg">
								<img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="image description" class="img description">
							</figure>
							<div class="wt-proposaldetails">
								<div class="wt-contenthead">
									<div class="wt-title">
										<h3><a href="javascript:void(0)">Freddie Lisi</a><span>Project Title Goes Here</span></h3>
										<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
									</div>
								</div>												
							</div>	
						</div>
						<div class="wt-userlistinghold wt-featured">
							<figure class="wt-userlistingimg">
								<img src="{{asset('/')}}assets/images/user/userlisting/img-07.jpg" alt="image description" class="img description">
							</figure>
							<div class="wt-proposaldetails">
								<div class="wt-contenthead">
									<div class="wt-title">
										<h3> <a href="javascript:void(0)">Golden Fellman</a><span>Project Title Goes Here</span></h3>
										<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>		
									</div>
								</div>												
							</div>	
						</div> -->																			
					</div>
				</div>
			</div>
		</div> --}}
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
			@include('user.include.manage-jobs')
		</div>
	</div>
</section>
<!--Register Form End-->
<!--More Details Start-->
				<!-- <section class="wt-haslayout wt-dbsectionspace wt-padding-add-top wt-moredetailsholder">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-insightsitem wt-dashboardbox wt-insightnoticon">
								<figure class="wt-userlistingimg">
									<img src="{{asset('/')}}assets/images/thumbnail/img-19.png" alt="image description" class="mCS_img_loaded">
								</figure>
								<div class="wt-insightdetails">
									<div class="wt-title">
										<h3>New Messages</h3>
										<a href="javascript:void(0)">Click To View</a>
									</div>													
								</div>	
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-insightsitem wt-dashboardbox">
								<figure class="wt-userlistingimg">
									<img src="{{asset('/')}}assets/images/thumbnail/img-20.png" alt="image description" class="mCS_img_loaded">
								</figure>
								<div class="wt-insightdetails">
									<div class="wt-title">
										<h3>Latest Proposals</h3>
										<a href="javascript:void(0)">Click To View</a>
									</div>													
								</div>	
							</div>
						</div>												
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-insightsitem wt-dashboardbox">
								<span class="wt-pakagespinner"><i class="fa fa-spinner wt-uploading"></i> D29 : H06 : M38 : S42</span>
								<figure class="wt-userlistingimg">
									<img src="{{asset('/')}}assets/images/thumbnail/img-21.png" alt="image description" class="mCS_img_loaded">
								</figure>
								<div class="wt-insightdetails">
									<div class="wt-title">
										<h3>Check Package Expiry</h3>
										<a href="javascript:void(0)">Click To View</a>
									</div>													
								</div>	
							</div>
						</div>						
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-insightsitem wt-dashboardbox">
								<figure class="wt-userlistingimg">
									<img src="{{asset('/')}}assets/images/thumbnail/img-22.png" alt="image description" class="mCS_img_loaded">
								</figure>
								<div class="wt-insightdetails">
									<div class="wt-title">
										<h3>View Saved Items</h3>
										<a href="javascript:void(0)">Click To View</a>
									</div>													
								</div>
							</div>
						</div>
					</div>
				</section> -->
				@endsection