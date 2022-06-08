@extends('front.master')

@section('body')
<!-- <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
    <div class="wt-main-section wt-haslayout"> -->
        <!-- User Listing Start-->
        <div class="wt-haslayout">
            <div class="container">
                <div class="row">
                    <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                        
                                @foreach($sellers as $seller)
                                <a href="{{route('gig-details',['id'=>$seller->id])}}">
                                <div class="wt-userlistinghold">
                                    <figure class="wt-userlistingimg">
                                        <img src="{{asset('/')}}assets/images/user/userlisting/img-06.jpg" alt="image description">
                                    </figure>
                                    <div class="wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                            <div class="wt-title ">
                                                
                                                <a href="{{route('gig-details',['id'=>$seller->id])}}"><i class="fa fa-check-circle"></i> {{$seller->name}}</a>
                                                <h2>{{$seller->gig_title}}</h2>
                                            </div>
                                            <ul class="wt-userlisting-breadcrumb">
                                                <li><span><i class="far fa-user-circle"></i> Level {{$seller->level}} seller</span></li>
                                                <!-- {{--<li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
                                                 <li><span><img src="{{asset('/')}}assets/images/flag/img-03.png" alt="img description">  Canada</span></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-heart"></i> Click to Save</a></li> --}}
                                                {{-- <li><p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris...</p></li> --}} -->
                                            </ul>
                                        </div>
                                        <div class="wt-rightarea">
                                            <span class="wt-starsvtwo">
                                                <i class="fa fa-star fill"></i>
                                                <i class="fa fa-star fill"></i>
                                                <i class="fa fa-star fill"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span class="wt-starcontent">4.5/<sub>5</sub> <em>(860 Feedback)</em></span>
                                        </div>
                                    </div>
                                    <div class="wt-description">
                                        <p>{{$seller->gig_description}}</p>
                                    </div>
                                    <!-- {{-- <div class="wt-tag wt-widgettag">
                                        <a href="javascript:void(0);">PHP</a>
                                        <a href="javascript:void(0);">HTML</a>
                                        <a href="javascript:void(0);">JavaScript</a>
                                        <a href="javascript:void(0);">WordPress</a>
                                    </div> --}} -->
                                </div>
                                </a>
                                @endforeach
                              
                                
                            </div>
                            
                        </div>
                        {{  $sellers->appends(Request::all())->links() }}
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- User Listing End-->
   <!--  </div>
</main> -->
@endsection