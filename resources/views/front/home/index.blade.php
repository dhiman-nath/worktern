@extends('front.master')

@section('body')
<!--Home Banner Start-->
<div class="wt-haslayout wt-bannerholder">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="wt-bannerimages">
                    <figure class="wt-bannermanimg" data-tilt>
                        <img src="{{asset('/')}}assets/images/bannerimg/img-01.png" alt="img description">
                        <img src="{{asset('/')}}assets/images/bannerimg/img-02.png" class="wt-bannermanimgone" alt="img description">
                        <img src="{{asset('/')}}assets/images/bannerimg/img-03.png" class="wt-bannermanimgtwo" alt="img description">
                    </figure>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="wt-bannercontent">
                    <div class="wt-bannerhead">
                        <div class="wt-title">
                            <h1><span>Hire expert freelancers</span> for any job, Online</h1>
                        </div>
                        <div class="wt-description">
                            <p>Consectetur adipisicing elit sed dotem eiusmod tempor incuntes ut labore etdolore maigna aliqua enim.</p>
                        </div>
                    </div>
                    <form action="{{route('seller-search')}}" method="get" class="wt-formtheme wt-formbanner">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="service" class="form-control" placeholder="Try 'mobile app'">
                                <div class="wt-formoptions">
                                    {{-- <div class="wt-dropdown">
                                        <span>In: <em class="selected-search-type">Freelancers </em><i class="lnr lnr-chevron-down"></i></span>
                                    </div>
                                    <div class="wt-radioholder">
                                        <span class="wt-radio">
                                            <input id="wt-freelancers" data-title="Freelancers" type="radio" name="searchtype" value="freelancer" checked>
                                            <label for="wt-freelancers">Freelancers</label>
                                        </span>
                                        <span class="wt-radio">
                                            <input id="wt-jobs"  data-title="Jobs" type="radio" name="searchtype" value="job">
                                            <label for="wt-jobs">Jobs</label>
                                        </span>
                                        <span class="wt-radio">
                                            <input id="wt-company"  data-title="Companies" type="radio" name="searchtype" value="job">
                                            <label for="wt-company">Companies</label>
                                        </span>
                                    </div> --}}
                                    {{-- <a href="userlisting.html" class="wt-searchbtn"><i class="lnr lnr-magnifier"></i></a> --}}
                                    <input class="wt-searchbtn lnr lnr-magnifier" value="Search"  type="submit">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    {{-- <div class="wt-videoholder">
                        <div class="wt-videoshow">
                            <a data-rel="prettyPhoto[video]" href="https://www.youtube.com/watch?v=J37W6DjqT3Q"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="wt-videocontent">
                            <span>See For Yourself!<em>How it works &amp; experience the ultimate joy.</em></span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--Home Banner End-->





<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout">
    <!--Categories Start-->
    <section class="wt-haslayout wt-main-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                    <div class="wt-sectionhead wt-textcenter">
                        <div class="wt-sectiontitle">
                            <h2>Explore Categories</h2>
                            <span>Professional by categories</span>
                        </div>
                    </div>
                </div>
                <div class="wt-categoryexpl">
                    
                    @foreach($categories as $category)
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
                        <div class="wt-categorycontent">
                            <figure><img src="{{asset($category->image)}}" alt="image description"></figure>
                            <div class="wt-cattitle">
                                <h3><a href="{{route('category-sellers',['id'=>$category->id])}}">{{$category->name}}</a></h3>
                            </div>
                            <div class="wt-categoryslidup">
                                <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                <a href="{{route('category-sellers',['id'=>$category->id])}}">Explore <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>      
                    </div>
                    @endforeach
                    
                    
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-lef mb-4">
                        <div class="wt-btnarea">
                            <a href="{{route('all-categories')}}" class="wt-btn">View All</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
        </div>
        
    </section>
    <!--Categories End-->
    
    <section class="wt-haslayout">
        <div class="container">
                    <div class="wt-sectionhead wt-textcenter">
                        <div class="wt-sectiontitle">
                            <h2>Gigs you may like</h2>
                            <span>Professional by categories</span>
                        </div>
                    </div>
                    <div class="row"> 
                        @foreach($gigs as $gig)
                        <a href="{{route('gig-details',['id'=>$gig->id])}}">
                            <div class="card ml-5 mb-3" style="width: 18rem;">
                                <img class="card-img-top" src="{{asset($gig->gig_image)}}" alt="Gig image">
                                <div class="card-body">
                                    <img src="{{asset('')}}assets/images/profile/img-01.jpg" height="10" width="50" alt="hi" style="border-radius: 50%;">
                                    <h5 class="card-title mt-2">{{$gig->gig_title}}</h5>
                                    
                                    <p class="card-text mb-2" style="color:black;">level {{$gig->level}} seller.</p>
                                    <a href="{{route('gig-details',['id'=>$gig->id])}}" class="btn btn-danger">Starting at {{$gig->starting_amount}} ৳</a>
                                </div> 
                            </div>
                        </a>
                        @endforeach
                        
            </div>
        </div>
    </section>
    
    <!--Join Company Info Start-->
    @if(!Auth::id())	
    <section class="wt-haslayout wt-main-section wt-paddingnull wt-companyinfohold">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="wt-companydetails">
                        <div class="wt-companycontent">
                            <div class="wt-companyinfotitle">
                                <h2>Start As Buyer</h2>
                            </div>
                            <div class="wt-description">
                                <p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.</p>
                            </div>
                            <div class="wt-btnarea">
                                <a href="{{route('register')}}" class="wt-btn">Join Now</a>
                            </div>
                        </div>
                        <div class="wt-companycontent">
                            <div class="wt-companyinfotitle">
                                <h2>Start As Freelancer</h2>
                            </div>
                            <div class="wt-description">
                                <p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.</p>
                            </div>
                            <div class="wt-btnarea">
                                <a href="{{route('register')}}" class="wt-btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--Join Company Info End-->
    
    
    <!--Skills Start-->
    <!-- <section class="wt-haslayaout wt-main-section wt-footeraboutus">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="wt-widgetskills">
                        <div class="wt-fwidgettitle">
                            <h3>By Skills</h3>
                        </div>
                        <ul class="wt-fwidgetcontent">
                            <li><a href="javascript:void(0);">Software Engineer</a></li>
                            <li><a href="javascript:void(0);">Technical Writer</a></li>
                            <li><a href="javascript:void(0);">UI Designer</a></li>
                            <li><a href="javascript:void(0);">UX Designer</a></li>
                            <li><a href="javascript:void(0);">Virtual Assistant</a></li>
                            <li><a href="javascript:void(0);">Web Designer</a></li>
                            <li><a href="javascript:void(0);">Wordpress Developer</a></li>
                            <li><a href="javascript:void(0);">Content Writer</a></li>
                            <li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="wt-widgetskill">
                        <div class="wt-fwidgettitle">
                            <h3>Skills In US</h3>
                        </div>
                        <ul class="wt-fwidgetcontent">
                            <li><a href="javascript:void(0);">HTML Developers in US</a></li>
                            <li><a href="javascript:void(0);">HTML5 Developers in US</a></li>
                            <li><a href="javascript:void(0);">JavaScript Developers in US</a></li>
                            <li><a href="javascript:void(0);">Microsoft Word Experts in US</a></li>
                            <li><a href="javascript:void(0);">PowerPoint Experts in US</a></li>
                            <li><a href="javascript:void(0);">Social Media Marketers in US</a></li>
                            <li><a href="javascript:void(0);">WordPress Developers in US</a></li>
                            <li><a href="javascript:void(0);">Writers in US</a></li>
                            <li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="wt-footercol wt-widgetcategories">
                        <div class="wt-fwidgettitle">
                            <h3>By Categories</h3>
                        </div>
                        <ul class="wt-fwidgetcontent">
                            <li><a href="javascript:void(0);">Graphics &amp; Design</a></li>
                            <li><a href="javascript:void(0);">Digital Marketing</a></li>
                            <li><a href="javascript:void(0);">Writing &amp; Translation</a></li>
                            <li><a href="javascript:void(0);">Video &amp; Animation</a></li>
                            <li><a href="javascript:void(0);">Music &amp; Audio</a></li>
                            <li><a href="javascript:void(0);">Programming &amp; Tech</a></li>
                            <li><a href="javascript:void(0);">Business</a></li>
                            <li><a href="javascript:void(0);">Fun &amp; Lifestyle</a></li>
                            <li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="wt-widgetbylocation">
                        <div class="wt-fwidgettitle">
                            <h3>By Location</h3>
                        </div>
                        <ul class="wt-fwidgetcontent">
                            <li><a href="javascript:void(0);">Switzerland</a></li>
                            <li><a href="javascript:void(0);">Canada</a></li>
                            <li><a href="javascript:void(0);">Germany</a></li>
                            <li><a href="javascript:void(0);">United Kingdom</a></li>
                            <li><a href="javascript:void(0);">Japan</a></li>
                            <li><a href="javascript:void(0);">Sweden</a></li>
                            <li><a href="javascript:void(0);">Australia</a></li>
                            <li><a href="javascript:void(0);">United States</a></li>
                            <li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--Skills Start End-->
</main>
<!--Main End-->
@endsection