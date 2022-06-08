@extends('user.master')
@section('body')
<section class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2>Manage Jobs</h2>
                </div>
                <div class="wt-dashboardboxcontent wt-jobdetailsholder">
                    <div class="wt-freelancerholder">
                        <div class="wt-tabscontenttitle">
                            <h2>Pending Jobs</h2>
                        </div>
                        <div class="wt-managejobcontent wt-verticalscrollbar">
                            
                            @foreach($jobs as $job)
                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            <a href="usersingle.html"><i class="fa fa-check-circle"></i>{{Session::get('buyer_name')}}
                                            </a>
                                            <h2>{{$job->title}}</h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            <li><span class="wt-dashboraddoller">{{$job->amount}}৳</span></li>
                                            <!-- <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li> -->
                                            <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Level: {{$job->level}} seller</a></li>
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: {{$job->duration}} Days</span></li>
                                            <li><span class="wt-dashboradclock">{{$job->created_at->diffForHumans()}}</span></li>															
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="{{route('proposals',['id'=>$job->id])}}" class="wt-btn">VIEW Proposals</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            
                                            <a href="{{route('proposals',['id'=>$job->id])}}">											
                                                <h4>{{$job->proposals}}</h4><span style="color: black;">Proposals</span>
                                                <ul class="wt-hireduserimgs">
                                                    <?php
                                                    for($i=1;$i<=$job->proposals;$i++){
                                                        
                                                        
                                                        ?>
                                                        <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            @endforeach
                            <!-- <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
                                            </a>
                                            <h2>Develop a transportation company website </h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                            <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li>
                                            <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h4>04</h4><span>Proposals</span>
                                            <ul class="wt-hireduserimgs">
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="img description"></figure></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
                                            </a>
                                            <h2>Change temp to Arabic and install on wordpress</h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                            <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li>
                                            <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h4>150</h4><span>Proposals</span>
                                            <ul class="wt-hireduserimgs">
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
                                            </a>
                                            <h2>Develop a transportation company website </h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                            <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li>
                                            <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h4>06</h4><span>Proposals</span>
                                            <ul class="wt-hireduserimgs">
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="img description"></figure></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
                                            </a>
                                            <h2>Website changes in HTML & PHP</h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                            <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li>
                                            <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h4>243</h4><span>Proposals</span>
                                            <ul class="wt-hireduserimgs">
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>	
                            </div>	
                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
                                            </a>
                                            <h2>Develop a transportation company website </h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                            <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li>
                                            <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h4>04</h4><span>Proposals</span>
                                            <ul class="wt-hireduserimgs">
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="img description"></figure></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
                                            </a>
                                            <h2>Change temp to Arabic and install on wordpress</h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                            <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li>
                                            <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h4>150</h4><span>Proposals</span>
                                            <ul class="wt-hireduserimgs">
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>	
                            </div> -->	
                            <!-- <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
                                            </a>
                                            <h2>Translation and Proof Reading (Multi Language)</h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                            <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</span></li>
                                            <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h4>01</h4><span>Proposals</span>
                                            <ul class="wt-hireduserimgs">
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>	
                            </div> -->
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