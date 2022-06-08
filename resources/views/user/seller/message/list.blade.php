@extends('user.master')

@section('body')
<main id="wt-main" class="wt-main wt-haslayout">
	
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
									<a class="chatOpen" convoId="{{$convo->id}} onclick="event.preventDefault()" href="#"> 
										<div class="wt-ad wt-dotnotification">
											<figure><img src="{{asset('/')}}assets/images/messages/img-03.jpg" alt="image description"></figure>
											<div class="wt-adcontent">
												<h3>{{$convo->name}}</h3>
												<span id="lastMessage" style="color:black;">{{$convo->message}}</span>
											</div>
											<input  type="hidden" name="convoId" value="{{$convo->id}}">
										</div>
									</a>
									@else
									<a class="chatOpen" convoId="{{$convo->id}}" onclick="event.preventDefault()" href="#"> 
										<div class="wt-ad">
											<figure><img src="{{asset('/')}}assets/images/messages/img-03.jpg" alt="image description"></figure>
											<div class="wt-adcontent">
												<h3>{{$convo->name}}</h3>
												<span id="lastMessage" style="color:black;">{{$convo->message}}</span>
											</div>
											<input  type="hidden" name="convoId" value="{{$convo->id}}">
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
								
								<div class="container">
									
									<div class="col-md-12">
										
										<div class="page-content page-container" id="page-content">
											<div class="padding">
												<div class="row container d-flex justify-content-center">
													<div class="col-md-12">
														<div class="box box-warning direct-chat direct-chat-warning">
															<div class="box-header with-border">
																<h3 class="box-title">Chat Messages</h3>
																<div class="box-tools pull-right"> <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages">20</span> <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts"> <i class="fa fa-comments"></i></button> <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i> </button> </div>
															</div>
															<div class="box-body" id="chatArea">
																
															</div>
															<div class="box-footer">
																<form action="#" method="post">
																	@csrf
																	<div class="input-group"> <input type="text" id="message" name="message" placeholder="Type Message ..." class="form-control"> 
																		<span class="input-group-btn"> 
																			<input id="convoId" type="hidden" name="convo_id">
																			<input id="senderId" type="hidden" name="sender" value="{{Auth::id()}}">
																			{{-- <button type="button" class="btn btn-warning btn-flat">Send</button>  --}}
																			<input  class="btn btn-warning btn-flat" type="button" onclick="sendMessage(event)" value="Send">
																			
																		</span>
																	</div>
																	
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								
							</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	
	<script type="text/javascript">
		
		
		//message details------------------------------------
		$("#message").val("");

		$('.chatOpen').on('click', function(){
			
			let id = $(this).attr('convoId');
			showMessages(id);
			
			
		})
		
		$(document).on('keypress',function(e) {
			//e.preventDefault();
			if(e.which == 13) {
				sendMessage(e);
			}
		});
		
		function showMessages(id){
			$("#convoId").val(id);
			let convoId = id;
			//$("#inputConvoId").val(id);
			
			$.ajax({
				
				type: 'get',
				url: '/seller/message/'+convoId,
				dataType: 'json',
				success: function(response){
					//console.log(response.messages);
					let receiverId = {!! Auth::id() !!}
					let chat = "";
					
					$.each(response.messages, function(key, value){
						chat += 
						
						`${value.receiver==receiverId ?
							`
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">${value.name}</span> <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span> </div> <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">
								<div class="direct-chat-text">${value.message}</div>
							</div>
							`
							: `
							<div class="direct-chat-msg right">
								<div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">${value.name}</span> <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span> </div> <img class="direct-chat-img" src="https://img.icons8.com/office/36/000000/person-female.png" alt="message user image">
								<div class="direct-chat-text">${value.message}</div>
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
					url: '/message',
					dataType: 'json',
					data:{
						"_token": "{{ csrf_token() }}",
						convo_id:convoId, 
						sender:senderId,
						message:message,
					},
					
					success: function(data){
						$("#message").val("");
						showMessages(convoId);
						// $("#lastMessage").html(data.message.message);
						// console.log(data.message.message);
					}
				})
			}
			
			//setInterval(showMessages, 1000);
			
			
		</script>
	</main>
	@endsection