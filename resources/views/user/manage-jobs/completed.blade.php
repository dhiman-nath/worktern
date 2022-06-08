@extends('user.master')
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

							@foreach($jobs as $job)
							<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
								<span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
								<div class="wt-userlistingcontent wt-userlistingcontentvtwo">
									<div class="wt-contenthead">
										<div class="wt-title">
											<!-- <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
											</a> -->
											<h2>{{$job->project_name}}</h2>
										</div>
										<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
											<li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Amount: {{$job->amount}} bdt</span></li>
											<!-- <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li> -->
											<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
											<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: {{$job->duration}} Days</span></li>															
										</ul>
									</div>
									<div class="wt-rightarea">
										<div class="wt-btnarea">
											<span> Project Complete</span>
											<a href="{{route('completed-job',['id'=>$job->id])}}" class="wt-btn">VIEW DETAILS</a>
										</div>
										
										<div class="wt-hireduserstatus">
											<h4>Hired</h4><span>{{$job->name}}</span>
											<ul class="wt-hireduserimgs">
												<li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
											</ul>
										</div>
									</div>
								</div>	
							</div>
							@endforeach


						</div>
					</div>
				</div>
								<!-- <nav class="wt-pagination wt-savepagination">
									<ul>
										<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
										<li><a href="javascrip:void(0);">1</a></li>
										<li><a href="javascrip:void(0);">2</a></li>
										<li><a href="javascrip:void(0);">3</a></li>
										<li><a href="javascrip:void(0);">4</a></li>
										<li><a href="javascrip:void(0);">...</a></li>
										<li><a href="javascrip:void(0);">50</a></li>
										<li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
									</ul>
								</nav>	 -->							
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3">
							@include('user.include.manage-jobs')
							<div class="wt-companyad">
								<figure class="wt-companyadimg"><img src="{{asset('/')}}assets/images/add-img.jpg" alt="img description"></figure>
								<span>Advertisement  255px X 255px</span>
							</div>
						</div>
						
					</div>
				</section>
				@endsection