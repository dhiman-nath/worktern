@extends('user.seller.master')
@section('body')
<section class="wt-haslayout wt-dbsectionspace">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle">
					<h2>All Jobs</h2>
				</div>
				<div class="wt-dashboardboxcontent wt-jobdetailsholder">
					<div class="wt-completejobholder">
						<div class="wt-tabscontenttitle">
							<h2>Completed Jobs</h2>
						</div>
						<div class="wt-managejobcontent">

							@foreach($orders as $job)
							<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
								<span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
								<div class="wt-userlistingcontent wt-userlistingcontentvtwo">
									<div class="wt-contenthead">
										<div class="wt-title">
											<a href="usersingle.html"><i class="fa fa-check-circle"></i> {{$job->name}}
											</a>
											<h2>{{$job->gig_title}}</h2>
										</div>
										<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
											<li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Amount: {{$job->amount}} bdt</span></li>
											<!-- <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li> -->
											<!-- <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: level </a></li> -->
											<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: {{$job->delivery}} Days</span></li>															
										</ul>
									</div>
									<div class="wt-rightarea">
										<div class="wt-btnarea">
											<span> Project Complete</span>
											<a href="{{route('seller-completed-order',['id'=>$job->id])}}" class="wt-btn">VIEW DETAILS</a>
										</div>
										
										<!-- <div class="wt-hireduserstatus">
											<h4>Hired</h4><span>Terrence Tynan</span>
											<ul class="wt-hireduserimgs">
												<li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
											</ul>
										</div> -->
									</div>
								</div>	
							</div>
							@endforeach
							@foreach($jobs as $job)
							<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
								<span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
								<div class="wt-userlistingcontent wt-userlistingcontentvtwo">
									<div class="wt-contenthead">
										<div class="wt-title">
											<a href="usersingle.html"><i class="fa fa-check-circle"></i> {{$job->name}}
											</a>
											<h2>{{$job->title}}</h2>
										</div>
										<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
											<li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Amount: {{$job->amount}} bdt</span></li>
											<!-- <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li> -->
											<!-- <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: level </a></li> -->
											<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: {{$job->duration}} Days</span></li>															
										</ul>
									</div>
									<div class="wt-rightarea">
										<div class="wt-btnarea">
											<span> Project Complete</span>
											<a href="{{route('seller-completed-job',['id'=>$job->id])}}" class="wt-btn">VIEW DETAILS</a>
										</div>
										
										<!-- <div class="wt-hireduserstatus">
											<h4>Hired</h4><span>Terrence Tynan</span>
											<ul class="wt-hireduserimgs">
												<li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
											</ul>
										</div> -->
									</div>
								</div>	
							</div>
							@endforeach


						</div>
					</div>
				</div>

			</div>
		</div>



	</div>
</section>
@endsection