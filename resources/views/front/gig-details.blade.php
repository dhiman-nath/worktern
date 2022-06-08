@extends('front.master')
<style>
	/* body {font-family: Arial;} */
	
	/* Style the tab */
	.tab {
		overflow: hidden;
		border: 1px solid #ccc;
		background-color: #f1f1f1;
	}
	
	/* Style the buttons inside the tab */
	.tab button {
		background-color: inherit;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 14px 16px;
		transition: 0.3s;
		font-size: 17px;
	}
	
	/* Change background color of buttons on hover */
	.tab button:hover {
		background-color: #ddd;
	}
	
	/* Create an active/current tablink class */
	.tab button.active {
		background-color: #ccc;
	}
	
	/* Style the tab content */
	.tabcontent {
		display: none;
		padding: 6px 12px;
		border: 1px solid #ccc;
		border-top: none;
	}
</style>
@section('body')

<div class="wt-haslayout wt-innerbannerholder wt-innerbannerholdervtwo">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
			</div>
		</div>
	</div>
</div>
<!--Inner Home End-->
<!--Main Start-->
<!-- User Profile Start-->
<div class="wt-main-section wt-paddingtopnull wt-haslayout">
	<div class="container">
		<div class="row">	
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
				<div class="wt-userprofileholder">
					<span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
					<div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
						<div class="row">
							<div class="wt-userprofile">
								<figure>
									<img src="{{asset('/')}}assets/images/profile/img-01.jpg" alt="img description">
									<div class="wt-userdropdown wt-online">
									</div>
								</figure>
								<div class="wt-title">
									<h3><i class="fa fa-check-circle"></i>{{$gig->name}}</h3>
									<?php
									$sum = 0;
									$avgStar = 1;
									$total = count($feedbacksRequest)+count($feedbacksOrder);
									foreach($feedbacksRequest as $feedback){
										
										$sum = $sum+$feedback->star;
										$avgStar = $sum/$total;
									}
									foreach($feedbacksOrder as $feedback){
										
										$sum = $sum+$feedback->star;
										$avgStar = $sum/$total;
									}
									?>
									<span>{{$avgStar}}/5 <a class="javascript:void(0);">({{count($feedbacksOrder)+count($feedbacksRequest)}} Feedback)</a> <br>Member since {{ \Carbon\Carbon::parse($gig->member_since)->isoFormat('MMM Do YYYY')}}<br><!-- <a href="javascript:void(0);">@valentine20658</a>  --><!-- <a href="javascript:void(0);" class="wt-reportuser">Report User</a> --></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
						<div class="row">
							<div class="wt-proposalhead wt-userdetails">
								<h2>{{$gig->gig_title}}</h2>
								<!-- <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
									<li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
									<li><span><img src="{{asset('/')}}assets/images/flag/img-02.png" alt="img description">  United States</span></li>
									<li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
								</ul> -->
								<div class="wt-description">
									
									<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu omnis iste natus error sit voluptatem.</p>
									<p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem amet conctetur adipisci velit sedate quianon.</p>
									<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu omnis iste natus error sit voluptatem.</p>
									<p>Accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos quist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem amet conctetur adipisci velit sedate quianon.</p>
									
								</div>
							</div>
							<div id="wt-statistics" class="wt-statistics wt-profilecounter">
								<div class="wt-statisticcontent wt-countercolor1">
									<h3 data-from="0" data-to="{{count($ongoingJobs)}}" data-speed="800" data-refresh-interval="03">03</h3>
									<h4>Ongoing <br>Orders</h4>
								</div>
								<div class="wt-statisticcontent wt-countercolor2">
									<h3 data-from="0" data-to="{{count($completedJobs)}}" data-speed="800" data-refresh-interval="100">1503</h3>
									<h4>Completed <br>Orders</h4>
								</div>
								<div class="wt-statisticcontent wt-countercolor4">
									<h3 data-from="0" data-to="{{count($appliedJobs)}}" data-speed="800" data-refresh-interval="02">02</h3>
									<h4>Applied <br>for Orders</h4>
								</div>
								<div class="wt-statisticcontent wt-countercolor3">
									<h3 data-from="0" data-to="{{$gig->level}}" data-speed="800" data-refresh-interval="100">3</h3>
									
									<h4>Level <br>Seller</h4>
								</div>
								<div class="wt-description">
									<p>* Adpsicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
									<!-- <a href="javascript:void(0);" class="wt-btn" data-toggle="modal" data-target="#reviewermodal">Send Offer</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- User Profile End-->
	<!-- User Listing Start-->
	<div class="container">
		<div class="row">
			<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
					<div class="wt-usersingle">
						
						@if(!$feedbacksOrder->isEmpty() || !$feedbacksRequest->isEmpty())
						<div class="wt-clientfeedback">
							<div class="wt-usertitle wt-titlewithselect">
								<h2>Client Feedback</h2>		
							</div>
							
							
							@foreach($feedbacksOrder as $feedback)
							<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
								<figure class="wt-userlistingimg">
									<img src="{{asset('/')}}assets/images/client/img-03.jpg" alt="image description">
								</figure>
								<div class="wt-userlistingcontent">
									<div class="wt-contenthead">
										<div class="wt-title">
											
											<h3>{{$feedback->feedback}}</h3>
										</div>
										<ul class="wt-userlisting-breadcrumb">
											
											
											<li><span><i class="far fa-calendar"></i> {{ \Carbon\Carbon::parse($feedback->created_at)->isoFormat('MMM YYYY')}}</span></li>
											@if($feedback->star==1)
											<li><i class="fas fa-star"></i></li>
											@elseif($feedback->star==2)
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											@elseif($feedback->star==3)
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											@elseif($feedback->star==4)
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											@elseif($feedback->star==5)
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											@endif
										</ul>
									</div>
								</div>
								{{-- <div class="wt-description">
									<p style="color:black">“{{$feedback->feedback}}”</p>
								</div> --}}
							</div>
							@endforeach
							
							@foreach($feedbacksRequest as $feedback)
							<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
								<figure class="wt-userlistingimg">
									<img src="{{asset('/')}}assets/images/client/img-03.jpg" alt="image description">
								</figure>
								<div class="wt-userlistingcontent">
									<div class="wt-contenthead">
										<div class="wt-title">
											
											<h3>{{$feedback->feedback}}</h3>
										</div>
										<ul class="wt-userlisting-breadcrumb">
											
											
											<li><span><i class="far fa-calendar"></i> {{ \Carbon\Carbon::parse($feedback->created_at)->isoFormat('MMM YYYY')}}</span></li>
											@if($feedback->star==1)
											<li><i class="fas fa-star"></i></li>
											@elseif($feedback->star==2)
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											@elseif($feedback->star==3)
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											@elseif($feedback->star==4)
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											@elseif($feedback->star==5)
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											@endif
										</ul>
									</div>
								</div>
								<div class="wt-description">
									<p style="color:black">“{{$feedback->feedback}}”</p>
								</div>
							</div>
							@endforeach
							
						</div>
						@endif
						
						@if(!$gigs->isEmpty())
						<div class="wt-clientfeedback">
							<div class="wt-usertitle wt-titlewithselect">
								<h2>Other gigs of this user</h2>
								
							</div>
							
							
							@foreach($gigs as $gig)
							<a href="{{route('gig-details',['id'=>$gig->id])}}">
								<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
									<figure class="wt-userlistingimg">
										<img src="{{asset('/')}}assets/images/client/img-03.jpg" alt="image description">
									</figure>
									<div class="wt-userlistingcontent">
										<div class="wt-contenthead">
											<div class="wt-title">
												
												<h3>{{$gig->gig_title}}</h3>
											</div>
											<ul class="wt-userlisting-breadcrumb">
												<li><span>
													Level: {{$gig->level}} seller</span></li>
													
													<li><span><i class="far fa-calendar"></i> {{ \Carbon\Carbon::parse($gig->created_at)->isoFormat('MMM YYYY')}}</span></li>
													<!-- <li><span class="wt-stars"><span></span></span></li> -->
												</ul>
											</div>
										</div>
										<div class="wt-description">
											<p style="color:black">“{{$gig->gig_description}}”</p>
										</div>
									</div>
								</a>
								@endforeach
								
							</div>
							@endif
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
						
						@if($seller->id != Auth::id())
						<h3>Order Service</h3>
						<div class="tab">
							<button class="tablinks" onclick="openCity(event, 'London')">Basic</button>
							@if($standard)
							<button class="tablinks" onclick="openCity(event, 'Paris')">Standard</button>
							@endif
							@if($premium)
							<button class="tablinks" onclick="openCity(event, 'Tokyo')">Premium</button>
							@endif
						</div>
						
						
						<div id="London" class="tabcontent active">
							<h4>{{$basic->title}}</h4>
							{{-- <p class="">{{$basic->short_description}}</p> --}}
							<p>delivery: {{$basic->delivery}} days</p>
							<p>revisions: {{$basic->revision}}</p>
							<form action="{{route('order')}}" method="POST">
								@csrf
								{{-- <a href="" class="btn btn-danger">Continue (৳{{$basic->amount}})</a> --}}
								<input type="hidden" name="buyer_id" value="{{Auth::id()}}"
								>
								<input type="hidden" name="seller_id" value="{{$gig->seller_id}}">
								<input type="hidden" name="gig_id" value="{{$gig->id}}">
								<input type="hidden" name="delivery" value="{{$basic->delivery}}">
								<input type="hidden" name="revision" value="{{$basic->revision}}">
								<input type="hidden" name="amount" value="{{$basic->amount}}">
								<input type="submit" class="btn btn-danger" value="Continue ({{$basic->amount}} bdt)">
							</form>
						</div>
						
						@if($standard)
						<div id="Paris" class="tabcontent">
							<h4>{{$standard->title}}</h4>
							{{-- <p class="">{{$standard->short_description}}</p> --}}
							<p>{{$standard->delivery}} days delivery</p>
							<p>{{$standard->revision}} revisions</p>
							<a href="" class="btn btn-danger">Continue ({{$standard->amount}} bdt)</a>
						</div>
						@endif
						
						@if($premium)
						<div id="Tokyo" class="tabcontent">
							<h4>{{$premium->title}}</h4>
							{{-- <p class="">{{$premium->short_description}}</p> --}}
							<p>{{$premium->delivery}} days delivery</p>
							<p>{{$premium->revision}} revisions</p>
							<a href="" class="btn btn-danger">Continue ({{$premium->amount}} bdt)</a>
						</div>
						@endif

						<br><br>
						<aside id="wt-sidebar" class="wt-sidebar">
							
							{{-- ekhane chilo --}}
							<div class="wt-widget wt-reportjob">
								<div class="wt-widgettitle">
									<h2>Message This User</h2>
								</div>
								<div class="wt-widgetcontent">
									<form action="{{route('seller-conversation')}}" method="POST" class="wt-formtheme wt-formreport">
										@csrf
										<fieldset>
											<!-- <div class="form-group">
												<span class="wt-select">
													<select>
														<option value="reason">Select Reason</option>
														<option value="reason1">Reason1</option>
														<option value="reason2">Reason2</option>
														<option value="reason3">Reason3</option>
														<option value="reason4">Reason4</option>
													</select>
												</span>
											</div> -->
											<div class="form-group">
												<textarea required name="message" class="form-control" placeholder="Type message.."></textarea>
											</div>
											
											<div class="form-group wt-btnarea">
												<!-- <a href="javascrip:void(0);" class="wt-btn">Send</a> -->
												<input type="hidden" name="user1" value="{{Auth::id()}}">
												<input type="hidden" name="user2" value="{{$seller->id}}">
												<input class="wt-btn" type="submit" value="Send" name="">
											</div>
											
										</fieldset>
									</form>
								</div>
							</div>
							@endif
						</aside>
						
						
						
						
					</div>
				</div>
			</div>
		</div>
		<!-- User Listing End-->
	</div>
	
	
	<script>
		openCity(event, "London");
		
		function openCity(evt, cityName) {
			
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
			
			
		}
	</script>
	@endsection