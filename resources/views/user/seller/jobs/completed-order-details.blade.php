@extends('user.seller.master')
@section('body')

<section class="wt-haslayout wt-dbsectionspace">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle">
					<h2>Job Details</h2>
				</div>
				<div class="wt-dashboardboxcontent wt-jobdetailsholder">
					<div class="wt-freelancerholder wt-tabsinfo">
						<!-- <div class="wt-tabscontenttitle">
							<h2>Hired Freelancer</h2>
						</div> -->
						<div class="wt-jobdetailscontent">
							<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
								<span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
								<div class="wt-userlistingcontent">
									<div class="wt-contenthead">
										<div class="wt-title">
											<!-- <a href="usersingle.html"> --><!-- <i class="fa fa-check-circle"></i> --> {{$buyer->name}}
												<!-- </a> -->
												<h2>{{$gig->gig_title}}</h2>
											</div>
											<ul class="wt-userlisting-breadcrumb">
												<li><span>Amount: {{$project->amount}} bdt</span></li>
											<!-- <li><span><img src="{{asset('/')}}assets/images/flag/img-02.png" alt="img description">  United States</span></li>
												<li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li> -->
											</ul>
										</div>

									</div>	
								</div>
							</div>
						</div>
						<div class="wt-rcvproposalholder wt-hiredfreelancer wt-tabsinfo">
						<!-- <div class="wt-tabscontenttitle">
							<h2>Hired Freelancer</h2>
						</div> -->
						
					</div>
					<div class="wt-projecthistory">
						<div class="wt-tabscontenttitle">
							<h2>Project History</h2>
						</div>
						<table class="table">
							<thead>
								<tr>

									<th scope="col" style="width: 20%;">Date</th>
									<th scope="col" style="width: 10%;">Sender</th>
									<th scope="col" style="width: 50%;">Message</th>
									<th scope="col" style="width: 20%;">Attachment</th>
								</tr>
							</thead>
							<tbody>

								@foreach($files as $file)
								<tr>
									<td>{{$file->created_at->diffForHumans()}}</td>
									<td>
										@if($file->sender_id==Auth::id())
										Seller
										@else
										Buyer
										@endif
									</td>
									<td>{{$file->message}}</td>
									<td><a href="#">{{$file->file}}</a></td>
								</tr>
								@endforeach
								
							</tbody>
						</table>

						@if($feedback!=null)
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
							<div class="wt-usersingle">
								<div class="wt-clientfeedback">
									<div class="wt-usertitle wt-titlewithselect">
										<h2>Buyer's Feedback</h2>

									</div>


									<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
										<figure class="wt-userlistingimg">
											<img src="{{asset('/')}}assets/images/client/img-03.jpg" alt="image description">
										</figure>
										<div class="wt-userlistingcontent">
											<div class="wt-contenthead">
												<div class="wt-title">
													<!-- <a href="javascript:void(0);"> --><p><i class="fa fa-check-circle"></i> {{$buyer->name}}</p><!-- </a> -->
													<h3>{{$project->project_name}}</h3>
												</div>
												<ul class="wt-userlisting-breadcrumb">
													<!-- <li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li> -->
													<!-- <li><span><img src="{{asset('/')}}assets/images/flag/img-02.png" alt="img description"> United States</span></li> -->


													<li><span><!-- <i class="far fa-calendar"></i> -->{{ \Carbon\Carbon::parse($feedback->updated_at)->isoFormat('MMM Do YYYY')}}</span></li>
													<!-- <li><span class="wt-stars"><span></span></span></li> -->
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
											<p>“{{$feedback->feedback}}”</p>
										</div>
									</div>
											<!-- <div class="wt-btnarea">
												<a href="javascript:void(0);" class="wt-btn">Load More</a>
											</div> -->
										</div>
									</div>
								</div>
								@endif
								<!-- endif -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
				</div>
			</div>
		</section>

		@endsection