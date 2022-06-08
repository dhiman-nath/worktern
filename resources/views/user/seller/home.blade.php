@extends('user.seller.master')

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
<section class="wt-haslayout wt-dbsectionspace wt-insightuser">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle wt-yeartag">
					<h2>Total Earnings</h2>
					<div class="wt-tag wt-widgettag">
						<a href="javascript:void(0);">2021</a>
						<a href="javascript:void(0);">2020</a>
						<a href="javascript:void(0);">2019</a>
						<a href="javascript:void(0);">2018</a>
						<a href="javascript:void(0);">2017</a>
					</div>
				</div>
				<div class="wt-dashboardboxcontent">
					<div class="wt-jobchartholder">
						<canvas id="wt-jobchart" class="wt-jobchart"></canvas>
					</div>
				</div>
			</div>
			<div class="wt-dashboardbox wt-earningsholder">
				<div class="wt-dashboardboxtitle wt-titlewithsearch">
					<h2>Past Earnings</h2>
					{{-- <form class="wt-formtheme wt-formsearch">
						<fieldset>
							<div class="form-group">
								<input type="text" name="Search" class="form-control" placeholder="Search Here">
								<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
							</div>
						</fieldset>
					</form> --}}
				</div>
				<div class="wt-dashboardboxcontent">
					<table class="wt-tablecategories">
					
						
						
						<thead>
							<tr>
								<th>Project Title</th>
								<th>Date</th>
								<th>Earnings</th>
								<th>Type</th>
							</tr>
						</thead>
						<tbody>
							@foreach($completedOrders as $job)
							<tr>
								<td>{{$job->gig_title}}</td>
								<td>{{ \Carbon\Carbon::parse($job->updated_at)->isoFormat('MMM Do YYYY')}}</td>
								<td>{{$job->amount}} bdt</td>
								<td>Order</td>
							</tr>
							@endforeach
							@foreach($completedJobs as $job)
							<tr>
								<td>{{$job->title}}</td>
								<td>{{ \Carbon\Carbon::parse($job->updated_at)->isoFormat('MMM Do YYYY')}}</td>
								<td>{{$job->amount}} bdt</td>
								<td>Request</td>
							</tr>
							@endforeach
							
						</tbody>
						
					</table> 
				</div>
			</div>
		</div>
		<div class="ccol-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
			<div class="row">
				
				<div class="wt-insightsongoing">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
						<div class="wt-dashboardbox wt-ongoingproject">
							<div class="wt-dashboardboxtitle">
								<h2>Ongoing Orders</h2>
							</div>
							<div class="wt-dashboardboxcontent wt-hiredfreelance">
								
								@foreach($ongoingOrders as $order)
								<div class="wt-userlistinghold wt-featured">
									<a href="{{route('order-details',['id' => $order->id])}}" >
										<span class="wt-smallfeaturedtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
										<div class="wt-proposaldetails">
											<div class="wt-contenthead">
												<div class="wt-title">
													<h3>{{$order->gig_title}}<span>{{$order->name}}</span></h3>
													<!-- <a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a> -->
												</div>
											</div>													
										</div>	
									</a>
								</div>
								@endforeach
								
								@foreach($ongoingJobs as $job)
								<div class="wt-userlistinghold wt-featured">
									<a href="{{route('request-details',['id' => $job->id])}}" >
										<span class="wt-smallfeaturedtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
										<div class="wt-proposaldetails">
											<div class="wt-contenthead">
												<div class="wt-title">
													<h3>{{$job->title}}<span>{{$job->name}}</span></h3>
													<!-- <a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a> -->
												</div>
											</div>													
										</div>	
									</a>
								</div>
								@endforeach
								
							</div>
						</div>
						
						<div class="wt-dashboardbox wt-ongoingproject">
							<div class="wt-dashboardboxtitle">
								<h2 style="color:red;">Cancelled Projects By Buyer</h2>
							</div>
							<div class="wt-dashboardboxcontent wt-hiredfreelance">
								
								@foreach($cancelledOrders as $job)
								<div class="wt-userlistinghold wt-featured">
										<span class="wt-smallfeaturedtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
										<div class="wt-proposaldetails">
											<div class="wt-contenthead">
												<div class="wt-title">
													<h3>{{$job->gig_title}}<span>{{$job->name}}</span></h3>
													<!-- <a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a> -->
												</div>
											</div>													
										</div>	
									</a>
								</div>
								@endforeach
								@foreach($cancelledJobs as $job)
								<div class="wt-userlistinghold wt-featured">
									{{-- <!-- <a href="{{route('seller-ongoing-job',['id'=>$job->id])}}" > --> --}}
										<span class="wt-smallfeaturedtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
										<div class="wt-proposaldetails">
											<div class="wt-contenthead">
												<div class="wt-title">
													<h3>{{$job->title}}<span>{{$job->name}}</span></h3>
													<!-- <a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a> -->
												</div>
											</div>													
										</div>	
									</a>
								</div>
								@endforeach
								
							</div>
						</div>
						
						
					</div>
				</div>	
				
				
				<!-- <div class="wt-insightsitemholder">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
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
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
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
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
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
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
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
				</div> -->
				
				
				
				
				
				<div class="wt-dashboardsaveholder wt-dashboardsave">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
						<div class="wt-proposalsr wt-dashboardbox">
							<div class="wt-proposalsrcontent">
								<figure>
									<img src="{{asset('/')}}assets/images/thumbnail/img-17.png" alt="image">
								</figure>
								<div class="wt-title">
									<h3>{{count($ongoingJobs)+count($ongoingOrders)}}</h3>
									<span>Total Ongoing Orders</span>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
						<div class="wt-proposalsr wt-dashboardbox">
							<div class="wt-proposalsrcontent  wt-freelancelike">
								<a href="{{route('seller-completed-jobs')}}">
									<figure>
										<img src="{{asset('/')}}assets/images/thumbnail/img-15.png" alt="image">
									</figure>
									<div class="wt-title">
										<h3>{{count($completedJobs)+count($completedOrders)}}</h3>
										<span style="color:black">Completed Orders</span>
									</div>
								</a>
							</div> 
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
						<div class="wt-proposalsr wt-dashboardbox mt-3">
							
							<div class="wt-proposalsrcontent  wt-freelancelike">
								<a href="{{route('applied-jobs')}}">
									<figure>
										<img src="{{asset('/')}}assets/images/thumbnail/img-15.png" alt="image">
									</figure>
									
									<div class="wt-title">
										<h3>{{count($appliedJobs)}}</h3>
										<span style="color: black;">Applied for Requested Orders</span>
									</div>
								</a>
							</div> 
							
						</div>
					</div>
					{{-- <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
						<div class="wt-proposalsr wt-dashboardbox mt-3">
							<div class="wt-proposalsrcontent">
								<figure>
									<img src="{{asset('/')}}assets/images/thumbnail/img-17.png" alt="image">
								</figure>
								<div class="wt-title">
									<h3>{{count($ongoingJobs)}}</h3>
									<span>Total Ongoing Jobs</span>
								</div>
							</div> 
						</div>
					</div> --> --}}
					
					
					
					
				</div>
				
				
			</div>						
		</div>												
	</div>
</section>
@endsection