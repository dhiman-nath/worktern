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
											<a href="usersingle.html"><i class="fa fa-check-circle"></i> Alfredo Bossard
											</a>
											<h2>{{$requestOrder->project_name}}</h2>
										</div>
										<ul class="wt-userlisting-breadcrumb">
											<li><span><i class="far fa-money-bill-alt"></i> {{$requestOrder->amount}} bdt</span></li>
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
						<div class="wt-jobdetailscontent">
							<div class="wt-userlistinghold wt-featured wt-proposalitem">
								<!-- <span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
								<figure class="wt-userlistingimg">
									<img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="image description" class="mCS_img_loaded">
								</figure>
								<div class="wt-proposaldetails">
									<div class="wt-contenthead">
										<div class="wt-title">
											<a href="usersingle.html"> Alfredo Bossard</a>
										</div>
									</div>
									<div class="wt-proposalfeedback">
										<span class="wt-starsvtwo">
											<i class="fa fa-star fill"></i>
										</span>
										<span class="wt-starcontent"> 4.5/<i>5</i> <em> (860 Feedback)</em></span>
									</div>													
								</div> -->

								<div class="wt-rightarea wt-titlewithsearch">

									@if($requestOrder->buyer_id==Auth::id() && $requestOrder->status == 1)
									<form action="{{route('cancel-order')}}" method="POST" class=" wt-formtheme wt-formsearch">
										@csrf
										<input type="hidden" name="id" value="{{$requestOrder->id}}">
										<fieldset>
											<div class="form-group">
												<span class="wt-select">
													<select>
														<option selected value="" disabled="">Order Status</option>
														<option value="">Cancel Order</option>
														<!-- <option value="">Project Status</option> -->
													</select>
												</span>
												<!-- <a href="javascrip:void(0);" class="wt-searchgbtn" data-toggle="modal" data-target="#wt-projectmodalbox"><i class="fa fa-check"></i></a> -->
												<button onclick="return confirm('Are you sure to cancel the order?')" type="submit" class="wt-searchgbtn" type="submit"><i class="fa fa-check"></i></button> 

											</div>
										</fieldset>
									</form>
									@elseif($requestOrder->seller_id==Auth::id() && $requestOrder->status == 1)
									<form action="{{route('request-completed')}}" method="POST" class=" wt-formtheme wt-formsearch">
										@csrf
										<input type="hidden" name="id" value="{{$requestOrder->id}}">
										<fieldset>
											<div class="form-group">
												<span class="wt-select">
													<select required>
														<option value="" disabled="">Project Status</option>
														<option selected value="">Completed</option>
														<!-- <option value="">Project Status</option> -->
													</select>
												</span>
												<!-- <a href="javascrip:void(0);" class="wt-searchgbtn" data-toggle="modal" data-target="#wt-projectmodalbox"><i class="fa fa-check"></i></a> -->
												<button onclick="return confirm('Order Completed?')" type="submit" class="wt-searchgbtn" type="submit"><i class="fa fa-check"></i></button> 
											</div>
										</fieldset>
									</form>
									@endif
									<!-- <div class="wt-hireduserstatus">
										<h5>&#36;30</h5>
										<span>In 02 Months</span>
									</div> -->
									<!-- <div class="wt-hireduserstatus">
										<i class="far fa-envelope"></i>
										<span>Cover Letter</span>
									</div>														
									<div class="wt-hireduserstatus">
										<i class="fa fa-paperclip"></i>
										<span>03 file attached</span>
									</div> -->														
								</div>
								
							</div>
						</div>
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
										@if($file->sender_id != Auth::id())
										Buyer
										@else
										Seller
										@endif
									</td>
									<td>{{$file->message}}</td>
									<td><a href="#">{{$file->file}}</a></td>
								</tr>
								@endforeach
								
							</tbody>
						</table>

						@if($requestOrder->status == 1)
						<div class="wt-historycontent">
							<!-- <ul id="accordion" class="wt-historycontentcol">
								<li class="wt-historycolhead">
									<h3><span>Date</span><span>Message</span><span>Attachment</span></h3>
								</li>
								<li class="collapsed" data-toggle="collapse" data-target="#collapseone">
									<div class="wt-dateandmsg">
										<span><img src="{{asset('/')}}assets/images/user/ongoing/img-01.jpg" alt="img description">Jun 27, 2019</span>
										<span>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim sed</span>
									</div>
									<div class="wt-rightarea wt-msgbtns">
										<a href="javascript:void(0);" class="wt-btn wt-msgbtn"><i class="lnr lnr-chevron-up"></i>Message</a>
										<a href="javascript:void(0);" class="wt-btn wt-attachmentbtn"><i class="lnr lnr-download"></i>Attachment</a>
									</div>
								</li>
								<li class="wt-historydescription collapse active fade show" id="collapseone" data-parent="#accordion">
									<div class="wt-description">
										<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magnam aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut aliquiprex ea commodo consequat eta dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumau dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa quiste officia deserunt mollit anim id est laborum. Sed uten perspiciatis unde omnis istetam natus error sit voluptatem accusantium doloremque laudantium.</p>
									</div>
								</li>
								<li class="collapsed" data-toggle="collapse" data-target="#collapsetwo">
									<div class="wt-dateandmsg">
										<span><img src="{{asset('/')}}assets/images/user/ongoing/img-02.jpg" alt="img description">Jun 27, 2019</span>
										<span>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore  eiusmod tempor incididunt ut labore eta dolore magnam aliqua.</span>
									</div>
									<div class="wt-rightarea wt-msgbtns">
										<a href="javascript:void(0);" class="wt-btn wt-msgbtn"><i class="lnr lnr-chevron-up"></i>Message</a>
										<a href="javascript:void(0);" class="wt-btn wt-attachmentbtn"><i class="lnr lnr-download"></i>Attachment</a>
									</div>
								</li>
								<li class="wt-historydescription collapse" id="collapsetwo" data-parent="#accordion">
									<div class="wt-description">
										<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magnam aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut aliquiprex ea commodo consequat eta dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumau dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa quiste officia deserunt mollit anim id est laborum. Sed uten perspiciatis unde omnis istetam natus error sit voluptatem accusantium doloremque laudantium.</p>
									</div>
								</li>
								<li class="collapsed" data-toggle="collapse" data-target="#collapsethree">
									<div class="wt-dateandmsg">
										<span><img src="{{asset('/')}}assets/images/user/ongoing/img-01.jpg" alt="img description">Jun 27, 2019</span>
										<span>Veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aut irure dolo</span>
									</div>
									<div class="wt-rightarea wt-msgbtns">
										<a href="javascript:void(0);" class="wt-btn wt-msgbtn"><i class="lnr lnr-chevron-up"></i>Message</a>
										<a href="javascript:void(0);" class="wt-btn wt-attachmentbtn"><i class="lnr lnr-download"></i>Attachment</a>
									</div>
								</li>
								<li class="wt-historydescription collapse" id="collapsethree" data-parent="#accordion">
									<div class="wt-description">
										<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magnam aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut aliquiprex ea commodo consequat eta dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumau dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa quiste officia deserunt mollit anim id est laborum. Sed uten perspiciatis unde omnis istetam natus error sit voluptatem accusantium doloremque laudantium.</p>
									</div>
								</li>
								<li class="collapsed" data-toggle="collapse" data-target="#collapsefour">
									<div class="wt-dateandmsg">
										<span><img src="{{asset('/')}}assets/images/user/ongoing/img-02.jpg" alt="img description">Jun 27, 2019</span>
										<span>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidat nonproid</span>
									</div>
									<div class="wt-rightarea wt-msgbtns">
										<a href="javascript:void(0);" class="wt-btn wt-msgbtn"><i class="lnr lnr-chevron-up"></i>Message</a>
											<a href="javascript:void(0);" class="wt-btn wt-attachmentbtn"><i class="lnr lnr-download"></i>Attachment</a>

										</div>
									</li>
									<li class="wt-historydescription collapse" id="collapsefour" data-parent="#accordion">
										<div class="wt-description">
											<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magnam aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut aliquiprex ea commodo consequat eta dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumau dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa quiste officia deserunt mollit anim id est laborum. Sed uten perspiciatis unde omnis istetam natus error sit voluptatem accusantium doloremque laudantium.</p>
										</div>
									</li>
								</ul> -->
								<form action="{{route('send-file')}}" method="post" class="wt-formtheme wt-userform" enctype="multipart/form-data">
									@csrf
									<input type="hidden" name="sender_id" value="{{Auth::id()}}">
									<input type="hidden" name="project_id" value="{{$requestOrder->id}}">
									<fieldset>
										<div class="form-group">
											<textarea required name="message" cols="47" rows="50" id="wt-tinymceeditor" class="wt-tinymceeditor" placeholder="Type message.."></textarea>
										</div>
										<div class="form-group form-group-label">
											<div class="wt-labelgroup">
											<!-- <label for="file">
												<span class="wt-btn">Select Files</span>
												<input type="file" name="file" id="file">

											</label> -->
											<!-- <span>Drop files here to upload</span>
												<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em> -->
												<input type="file" name="file">
											</div>
										</div>
									<!-- <div class="form-group">
										<ul class="wt-attachfile">
											<li class="wt-uploading">
												<span class="uploadprogressbar"></span>
												<span>Category Icon.jpg</span>
												<em>File size: 450 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
											</li>
											<li>
												<span class="uploadprogressbar"></span>
												<span>requirments.pdf</span>
												<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
											</li>
											<li>
												<span class="uploadprogressbar"></span>
												<span>company Intro.docx</span>
												<em>File size: 100 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
											</li>
										</ul>
									</div> -->
									<div class="form-group wt-btnarea">
										<!-- <a href="javascript:void(0);" class="wt-btn">Send Now</a> -->
										<input type="submit" name="" class="wt-btn" value="Send">
									</div>
								</fieldset>
							</form>
						</div>
						@endif

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
													<h3>{{$gig->gig_title}}</h3>
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

					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
		</div>
	</div>
</section>
@endsection