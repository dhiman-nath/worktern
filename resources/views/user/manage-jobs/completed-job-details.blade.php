@extends('user.master')
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
											@if($feedback)
											<a style="color:blue;" href="{{route('gig-details',['id'=>$gig->id])}}">{{$seller->name}}
											</a>
											@endif
											<h2>{{$project->project_name}}</h2>
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
										@if($file->sender_id==Session::get('buyer_id'))
										Buyer
										@else
										Seller
										@endif
									</td>
									<td>{{$file->message}}</td>
									<td><a href="{{route('download-file',['id'=>$file->id])}}">{{$file->file}}</a></td>
								</tr>
								@endforeach
								
							</tbody>
						</table>

						@if($project->is_reviewed==0)
						<div class="wt-historycontent">
							
							<form action="{{route('feedback-submit')}}" method="post" class="wt-formtheme wt-userform" enctype="multipart/form-data">
								@csrf

								<input type="hidden" name="buyer_id" value="{{Auth::id()}}">
								<input type="hidden" name="project_id" value="{{$project->id}}">

								<fieldset>
									<h2>Feedback</h2>

									<div class="form-group">

										<textarea required name="feedback" cols="47" rows="50" id="wt-tinymceeditor" class="wt-tinymceeditor" placeholder="Share your experience.."></textarea>

									</div>
									<div class="form-group">

										<select name="star" class="col-md-7">
											<option selected>Choose Star</option>
											<option value="1" >1</option>
											<option value="2" >2</option>
											<option value="3" >3</option>
											<option value="4" >4</option>
											<option value="5" >5</option>
										</select>

									</div>

									<div class="form-group wt-btnarea">

										<!-- <a href="javascript:void(0);" class="wt-btn">Send Now</a> -->

										<!-- <div id="form">
											<fieldset class="stars">
												<input required name="star" value="5" type="radio" id="star1" ontouchstart="ontouchstart"/>
												<label class="fa fa-star" for="star1"></label>
												<input  type="radio" name="star" value="4" id="star2" ontouchstart="ontouchstart"/>
												<label class="fa fa-star" for="star2"></label>
												<input name="star" value="3"  type="radio" id="star3" ontouchstart="ontouchstart"/>
												<label class="fa fa-star" for="star3"></label>
												<input name="star" value="2"  type="radio" id="star4" ontouchstart="ontouchstart"/>
												<label class="fa fa-star" for="star4"></label>
												<input name="star" value="1"  type="radio" id="star5" ontouchstart="ontouchstart"/>
												<label class="fa fa-star" for="star5"></label>
												<input type="radio" id="star-reset"/>
												<label class="reset" for="star-reset">reset</label>
											<figure class="face"><i></i><i></i>
												<u>
													<div class="cover"></div>
												</u>
											</figure>
										</fieldset>
									</div> -->

									<input type="submit" name="" class="wt-btn" value="Submit">
								</div>




							</fieldset>
						</form>
					</div>
					@else
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
						<div class="wt-usersingle">
							<div class="wt-clientfeedback">
								<div class="wt-usertitle wt-titlewithselect">
									<h2>Your Feedback</h2>

								</div>


								<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
									<figure class="wt-userlistingimg">
										<img src="{{asset('/')}}assets/images/client/img-03.jpg" alt="image description">
									</figure>
									<div class="wt-userlistingcontent">
										<div class="wt-contenthead">
											<div class="wt-title">
												<!-- <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Photodune Professionals</a> -->
												<h3>{{$project->project_name}}</h3>
											</div>
											<ul class="wt-userlisting-breadcrumb">
												<!-- <li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li> -->
												<!-- <li><span><img src="{{asset('/')}}assets/images/flag/img-02.png" alt="img description"> United States</span></li> -->


												<li><span><!-- <i class="far fa-calendar"></i> -->Jun 2017</span></li>
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
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
				</div>
			</div>
		</section>

		@endsection