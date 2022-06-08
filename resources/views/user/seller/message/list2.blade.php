@extends('user.seller.master')
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
								<a class="chatOpen" onclick="event.preventDefault()" href="{{route('seller-message-details',['id'=>$convo->id])}}"> 
									<div class="wt-ad wt-dotnotification">
										<figure><img src="{{asset('/')}}assets/images/messages/img-03.jpg" alt="image description"></figure>
										<div class="wt-adcontent">
											<h3>{{$convo->name}}</h3>
											<span style="color:black;">{{$convo->message}}</span>
										</div>
										<input id="convoId" type="hidden" name="convoId" value="{{$convo->id}}">
									</div>
								</a>
								@else
								<a class="chatOpen" onclick="event.preventDefault()" href="{{route('seller-message-details',['id'=>$convo->id])}}"> 
									<div class="wt-ad">
										<figure><img src="{{asset('/')}}assets/images/messages/img-03.jpg" alt="image description"></figure>
										<div class="wt-adcontent">
											<h3>{{$convo->name}}</h3>
											<span style="color:black;">{{$convo->message}}</span>
										</div>
										<input id="convoId" type="hidden" name="convoId" value="{{$convo->id}}">
									</div>
								</a>
								@endif
								@endforeach
								<!-- <div class="wt-ad">
									<figure><img src="{{asset('/')}}assets/images/messages/img-04.jpg" alt="image description"></figure>
									<div class="wt-adcontent">
										<h3>Nichelle Yelvington</h3>
										<span>Consectetur adipisicing elit sed do...</span>
									</div>
								</div> -->
								
							</div>
						</li>
						<li>
							<div class="wt-chatarea">
								<div class="wt-messages wt-verticalscrollbar wt-dashboardscrollbar" id="chatArea">
									
								</div>
								<div class="wt-replaybox">
									<form action="#" method="post">
										@csrf
										<div class="form-group">
											<textarea id="message" required name="message" class="form-control" name="reply" placeholder="Type message here"></textarea>
										</div>
										<div class="wt-iconbox">
											<!-- <i class="lnr lnr-thumbs-up"></i>
												<i class="lnr lnr-thumbs-down"></i>
												<i class="lnr lnr-smile"></i> -->
												<!-- <a href="javascript:void(0);" class="wt-btnsendmsg">Send</a> -->
												<input id="convoId" type="hidden" name="convo_id">
												<input id="senderId" type="hidden" name="sender" value="{{Auth::id()}}">
												<input onclick="sendMessage(event)" type="button" name="" class="wt-btnsendmsg" value="Send">
										</div>
									</form>
								</div>
							</div>
								{{-- <div class="wt-chatarea"> --}}
									<!-- <div class="wt-replaybox">
										<div class="form-group">
											<textarea class="form-control" name="reply" placeholder="Type message here"></textarea>
										</div>
										<div class="wt-iconbox">
											<i class="lnr lnr-thumbs-up"></i>
											<i class="lnr lnr-thumbs-down"></i>
											<i class="lnr lnr-smile"></i>
											<a href="javascript:void(0);" class="wt-btnsendmsg">Send</a>
										</div>
									</div> -->
									{{-- <div class="wt-replaybox">
										<form action="#" method="post">
											@csrf
											<div class="form-group">
												<textarea id="message" required name="message" class="form-control" name="reply" placeholder="Type message here"></textarea>
											</div>
											<div class="wt-iconbox">
												<!-- <i class="lnr lnr-thumbs-up"></i>
													<i class="lnr lnr-thumbs-down"></i>
													<i class="lnr lnr-smile"></i> -->
													<!-- <a href="javascript:void(0);" class="wt-btnsendmsg">Send</a> -->
													<input id="convoId" type="hidden" name="convo_id">
													<input id="senderId" type="hidden" name="sender" value="{{Auth::id()}}">
													<input onclick="sendMessage(event)" type="button" name="" class="wt-btnsendmsg" value="Send">
												</div>
											</form>
										</div> --}}
										{{-- </div> --}}
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
			
			<script type="text/javascript">
			
				$(document).ready(function(){
					//message details------------------------------------
				
				$('.chatOpen').on('click', function(){
					//console.log("hlo");
					
					showMessages();
					
					
					
				})
				
				function showMessages(){
					let id = $("#convoId").val();
					//$("#inputConvoId").val(id);
					
					$.ajax({
						type: 'get',
						url: '/seller/message/'+id,
						dataType: 'json',
						success: function(response){
							//console.log(response.messages);
							let receiverId = {!! Auth::id() !!}
							let chat = 
							`<br>
							<br>
							<br>
							<br>
							`;
							$.each(response.messages, function(key, value){
								chat += 
								
								`${value.receiver==receiverId ?
									`
									<div class="wt-offerermessage">
										<figure><img src="assets/images/messages/img-12.jpg" alt="image description"></figure>
										
										<div class="wt-description">
											<div class="clearfix"></div>
											<p>${value.message}</p>
											<div class="clearfix"></div>
											<time datetime="2017-08-08"> ${value.created_at} </time>
											<div class="clearfix"></div>
										</div>
									</div>
									`
									: `
									<div class="wt-memessage">
										<figure><img src="assets/images/messages/img-11.jpg" alt="image description"></figure>
										
										<div class="wt-description">
											
											<div class="clearfix"></div>
											<p>${value.message}</p>
											<div class="clearfix"></div>
											<time datetime="2017-08-08"> ${value.created_at}</time>
											<div class="clearfix"></div>
										</div>
										
									</div>
									`}`
									
								});
								
							$("#chatArea").html(chat);
						}
						
					})
				}
				
				//send message
				
				
				function sendMessage(event){
					event.preventDefault();
					//console.log("hlo");
					let senderId = $("#senderId").val();
					let convoId = $("#convoId").val();
					let message = $("#message").val();
					
					$.ajax({
						type: 'post',
						url: '/seller-conversation',
						dataType: 'json',
						data:{
							"_token": "{{ csrf_token() }}",
							convo_id:convoId, 
							sender:senderId,
							message:message,
						},
						
						success: function(data){
							showMessages();
							//console.log("hlo");
						}
					})
				}
				})
				
				
				
				
			</script>
			@endsection