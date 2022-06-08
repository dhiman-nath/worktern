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
                            <h2>Posted Jobs</h2>
                        </div>
                        <div class="wt-managejobcontent wt-verticalscrollbar mCustomScrollbar _mCS_1">
                            @foreach($jobs as $job)
                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                <span class="wt-featuredtag wt-featuredtagcolor3"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                <div class="wt-userlistingcontent">
                                    <div class="wt-contenthead">
                                        <div class="wt-title">
                                            {{-- <a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli</a> --}}
                                            <h2>{{$job->project_name}}</h2>
                                        </div>
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            
                                            <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: {{$job->duration}} Days</span></li>							
                                        </ul>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="{{route('buyer-ongoing-job',['id'=>$job->id])}}" class="wt-btn">VIEW DETAILS</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h4>Hired</h4><span>{{$job->name}}</span>
                                            <ul class="wt-hireduserimgs">
                                                <li><figure><img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="img description"></figure></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            @endforeach
                            	
                            										
                        </div>
                    </div>
                </div>
                
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