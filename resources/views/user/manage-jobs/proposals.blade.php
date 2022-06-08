@extends('user.master')
@section('body')
                
                <main id="wt-main" class="wt-main wt-haslayout">
                    
                    <section class="wt-haslayout wt-dbsectionspace wt-proposals">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
                                <div class="wt-dashboardbox">
                                    <div class="wt-dashboardboxtitle">
                                        <h2>Manage Jobs</h2>
                                    </div>
                                    <div class="wt-dashboardboxcontent wt-rcvproposala">
                                        {{-- <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                            <span class="wt-featuredtag wt-featuredtagcolor3"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
                                            <div class="wt-userlistingcontent">
                                                <div class="wt-contenthead">
                                                    <div class="wt-title">
                                                        <a href="usersingle.html"><i class="fa fa-check-circle"></i> Terrence Tynan
                                                        </a>
                                                        <h2>Change temp to Arabic and install on wordpress</h2>
                                                    </div>
                                                    <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                                        <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                                        <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description" class="mCS_img_loaded"> England</span></li>
                                                        <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
                                                        <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>
                                                    </ul>
                                                </div>
                                                <div class="wt-rightarea">
                                                    <div class="wt-hireduserstatus">
                                                        <h4>06</h4><span>Proposals Received</span>
                                                        <ul class="wt-hireduserimgs">
                                                            <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description" class="mCS_img_loaded"></figure></li>
                                                            <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="img description" class="mCS_img_loaded"></figure></li>
                                                            <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description" class="mCS_img_loaded"></figure></li>
                                                            <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description" class="mCS_img_loaded"></figure></li>
                                                            <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description" class="mCS_img_loaded"></figure></li>
                                                            <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description" class="mCS_img_loaded"></figure></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>	
                                        </div> --}}
                                        <div class="wt-freelancerholder wt-rcvproposalholder">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Received Proposals</h2>
                                            </div>
                                            <div class="wt-managejobcontent">
                                                
                                                @foreach ($proposals as $proposal)
                                                <div class="wt-userlistinghold wt-featured wt-proposalitem">
                                                    <a href="{{route('gig-details',['id'=>$proposal->gig_id])}}"> 
                                                        <figure class="wt-userlistingimg">
                                                            <img src="{{asset('/')}}assets/images/user/userlisting/img-04.jpg" alt="image description" class="mCS_img_loaded">
                                                        </figure>
                                                        
                                                        <div class="wt-proposaldetails">
                                                            <div class="wt-contenthead">
                                                                <div class="wt-title">
                                                                    
                                                                    <b style="color:black">{{$proposal->name}}</b>
                                                                    
                                                                </div>
                                                                <div class="wt-title" style="color:silver;">
                                                                    {{-- <a href="usersingle.html"> 
                                                                    </a> --}}
                                                                    Level {{$proposal->level}} seller
                                                                </div>
                                                            </div>
                                                            {{-- <div class="wt-proposalfeedback">
                                                                <span class="wt-starsvtwo">
                                                                    <i class="fa fa-star fill"></i>
                                                                </span>
                                                                <span class="wt-starcontent"> 4.5/<i>5</i> <em> (860 Feedback)</em></span>
                                                            </div>													 --}}
                                                        </div>
                                                    </a>
                                                    <div class="wt-title mt-4">
                                                        <p>{{$proposal->description}}</p>
                                                    </div>
                                                    <div class="wt-rightarea">
                                                        <div class="wt-btnarea">
                                                            <a href="{{route('hire-seller',['id'=>$proposal->id])}}" onclick="return confirm('Are you sure to hire this freelancer?')" class="wt-btn">Hire Now</a>
                                                        </div>
                                                        <div class="wt-hireduserstatus">
                                                            <h5>{{$proposal->amount}} BDT</h5>
                                                            <span>In {{$proposal->duration}} Days</span>
                                                        </div>
                                                        {{-- <div class="wt-hireduserstatus">
                                                            <i class="far fa-envelope"></i>
                                                            <span>Cover Letter</span>
                                                        </div>														
                                                        <div class="wt-hireduserstatus">
                                                            <i class="fa fa-paperclip"></i>
                                                            <span>03 file attached</span>
                                                        </div>														 --}}
                                                    </div>
                                                </div>		
                                                @endforeach
                                            </div>										
                                        </div>
                                    </div>
                                    {{-- <nav class="wt-pagination wt-savepagination">
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
                                    </nav>								 --}}
                                </div>
                            </div>
                            {{-- @include('buyer.include.manage-jobs') --}}
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3">
                                
                                <div class="wt-companyad">
                                    <figure class="wt-companyadimg"><img src="{{asset('/')}}assets/images/add-img.jpg" alt="img description"></figure>
                                    <span>Advertisement  255px X 255px</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </main>
                
            </div>
            <!--Content Wrapper End-->
        </div>
        <!--Wrapper End-->
        @include('user.seller.include.scripts')
        
        
@endsection