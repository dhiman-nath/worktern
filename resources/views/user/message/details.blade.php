@extends('user.master')
@section('body')

<section class="wt-haslayout wt-dbsectionspace">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="wt-dashboardbox wt-messages-holder">
				<div class="wt-dashboardboxtitle">
					<h2>Messages</h2>
				</div>
				<div class="wt-dashboardboxtitle wt-titlemessages">
					<a href="javascript:void(0);" class="wt-back"><i class="ti-arrow-left"></i></a>
					<div class="wt-userlogedin">
						<figure class="wt-userimg">
							<img src="{{asset('/')}}assets/images/user-img.jpg" alt="image description">
						</figure>
						<div class="wt-username">
							<h3><i class="fa fa-check-circle"></i> Louanne Mattioli</h3>
							<span>Amento Tech</span>
						</div>
					</div>
					<a href="javascript:void(0);" class="wt-viewprofile">View Profile</a>
				</div>
				<div class="wt-dashboardboxcontent wt-dashboardholder wt-offersmessages">
					<ul>
						<li>
							<form class="wt-formtheme wt-formsearch">
								<fieldset>
									<div class="form-group">
										<input type="text" name="Location" class="form-control" placeholder="Search Here">
										<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
									</div>
								</fieldset>
							</form>
							<div class="wt-verticalscrollbar wt-dashboardscrollbar">
								
								@foreach($convos as $convo)
								@if($convo->last_sender_id!=Auth::id() && $convo->seen_by_receiver==0)
								<a href="{{route('buyer-message-details',['id'=>$convo->id])}}"> 
									<div class="wt-ad wt-dotnotification">
										<figure><img src="{{asset('/')}}assets/images/messages/img-03.jpg" alt="image description"></figure>
										<div class="wt-adcontent">
											<h3>{{$convo->name}}</h3>
											<span style="color:black;">{{$convo->message}}</span>
										</div>
									</div>
								</a>
								@else
								<a href="{{route('buyer-message-details',['id'=>$convo->id])}}"> 
								<div class="wt-ad">
									<figure><img src="{{asset('/')}}assets/images/messages/img-03.jpg" alt="image description"></figure>
									<div class="wt-adcontent">
										<h3>{{$convo->name}}</h3>
										<span style="color:black;">{{$convo->message}}</span>
									</div>
								</div>
								</a>
								@endif
								@endforeach
								

							</div>
						</li>
						<li>
							<div class="wt-chatarea">
								<div class="wt-messages wt-verticalscrollbar wt-dashboardscrollbar">

									<br>
										<br>
										<br>
										<br>
										<br>
									@foreach($messages as $message)

									@if($message->receiver==Auth::id())
									<div class="wt-offerermessage">
										<figure><img src="{{asset('/')}}assets/images/messages/img-12.jpg" alt="image description"></figure>

										<div class="wt-description">
											<div class="clearfix"></div>
											<p>{{$message->message}}</p>
											<div class="clearfix"></div>
											<time datetime="2017-08-08">{{ \Carbon\Carbon::parse($message->created_at)->isoFormat('MMM Do YYYY HH:MM')}}</time>
											<div class="clearfix"></div>
										</div>
									</div>
									<?php $convo_id = $message->convo_id ?>
									@else
									@if($message->seen_by_receiver==1)
									<div class="wt-memessage wt-readmessage">
										<figure><img src="{{asset('/')}}assets/images/messages/img-11.jpg" alt="image description"></figure>
										
										
										<div class="wt-description">
											
											<div class="clearfix"></div>
											<p>{{$message->message}}</p>
											<div class="clearfix"></div>
											<time datetime="2017-08-08">{{ \Carbon\Carbon::parse($message->created_at)->isoFormat('MMM Do YYYY HH:MM')}}</time>
											<div class="clearfix"></div>
										</div>
										
										
										<?php $convo_id = $message->convo_id ?>
									</div>
									@else
									<div class="wt-memessage">
										<figure><img src="{{asset('/')}}assets/images/messages/img-11.jpg" alt="image description"></figure>
										
										
										<div class="wt-description">
											
											<div class="clearfix"></div>
											<p>{{$message->message}}</p>
											<div class="clearfix"></div>
											<time datetime="2017-08-08">{{ \Carbon\Carbon::parse($message->created_at)->isoFormat('MMM Do YYYY HH:MM')}}</time>
											<div class="clearfix"></div>
										</div>
										
										
										<?php $convo_id = $message->convo_id ?>
									</div>
									@endif
									@endif
									@endforeach
								</div>
								<div class="wt-replaybox">
									<form action="{{route('buyer-conversation')}}" method="post">
										@csrf
									<div class="form-group">
										<textarea required name="message" class="form-control" name="reply" placeholder="Type message here"></textarea>
									</div>
									<div class="wt-iconbox">
										
										<input type="hidden" name="convo_id" value="{{$convo_id}}">
										<input type="hidden" name="sender" value="{{Auth::id()}}">
										<input type="submit" name="" class="wt-btnsendmsg" value="Send">
									</div>
									</form>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-3">
			<div class="wt-dashboardbox wt-messagebox wt-messageboxvtwo">
				<div class="wt-dashboardboxcontent">
					<div class="wt-userprofile">
						<figure>
							<img src="{{asset('/')}}assets/images/profile/img-02.jpg" alt="img description">
						</figure>
						<div class="wt-title">
							<h3><i class="fa fa-check-circle"></i> Valentine Mehring</h3>
							<span>5.0/5 <a class="javascript:void(0);">(860 Feedback)</a> <br>Member since May 30, 2013 <br><a href="javascript:void(0);">@valentine20658</a></span>
							<a href="javascript:void(0)" class="wt-btn">View Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
@endsection