@extends('front.master')

@section('body')


<!-- <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
    <div class="wt-main-section wt-haslayout"> -->
        <!-- User Listing Start-->
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            
            <div class="wt-main-section wt-paddingtopnull wt-haslayout">
                
                <div class="container">
                    <h3 class="tex-primary">Search Results:</h3>
                    <div class="row">
                        <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                            <!-- {{-- <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                                <div class="wt-usersidebaricon">
                                    <span class="fa fa-cog wt-usersidebardown">
                                        <i></i>
                                    </span>
                                </div>
                                <aside id="wt-sidebar" class="wt-sidebar wt-usersidebar">
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>Categories</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <form class="wt-formtheme wt-formsearch">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input type="text" name="Search" class="form-control" placeholder="Search Category">
                                                        <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="wt-checkboxholder wt-verticalscrollbar">
                                                        <span class="wt-checkbox">
                                                            <input id="wordpress" type="checkbox" name="description" value="company" checked>
                                                            <label for="wordpress"> WordPress</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="graphic" type="checkbox" name="description" value="company">
                                                            <label for="graphic"> Graphic Design</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="website" type="checkbox" name="description" value="company">
                                                            <label for="website"> Website Design</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="article" type="checkbox" name="description" value="company">
                                                            <label for="article"> Article Writing</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="software" type="checkbox" name="description" value="company">
                                                            <label for="software"> Software Architecture</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="wordpress1" type="checkbox" name="description" value="company">
                                                            <label for="wordpress1"> WordPress</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="graphic1" type="checkbox" name="description" value="company">
                                                            <label for="graphic1"> Graphic Design</label>
                                                        </span>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>Location</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <form class="wt-formtheme wt-formsearch">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input type="text" name="fullname" class="form-control" placeholder="Search Location">
                                                        <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="wt-checkboxholder wt-verticalscrollbar">
                                                        <span class="wt-checkbox">
                                                            <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                            <label for="wt-description"> <img src="{{asset('/')}}assets/images/flag/img-01.png" alt="img description"> Australia</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="us" type="checkbox" name="description" value="company">
                                                            <label for="us"> <img src="{{asset('/')}}assets/images/flag/img-02.png" alt="img description"> United States</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="canada" type="checkbox" name="description" value="company">
                                                            <label for="canada"> <img src="{{asset('/')}}assets/images/flag/img-03.png" alt="img description"> Canada</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="england" type="checkbox" name="description" value="company">
                                                            <label for="england"> <img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description"> England</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="emirates" type="checkbox" name="description" value="company">
                                                            <label for="emirates"> <img src="{{asset('/')}}assets/images/flag/img-05.png" alt="img description"> United Emirates</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="wt-description1" type="checkbox" name="description" value="company">
                                                            <label for="wt-description1"> <img src="{{asset('/')}}assets/images/flag/img-01.png" alt="img description"> Australia</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="us1" type="checkbox" name="description" value="company">
                                                            <label for="us1"> <img src="{{asset('/')}}assets/images/flag/img-02.png" alt="img description"> United States</label>
                                                        </span>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>Hourly Rate</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <form class="wt-formtheme wt-formsearch">
                                                <fieldset>
                                                    <div class="wt-checkboxholder wt-verticalscrollbar">
                                                        <span class="wt-checkbox">
                                                            <input id="rate1" type="checkbox" name="description" value="company" checked>
                                                            <label for="rate1">$10 and below</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="rate2" type="checkbox" name="description" value="company">
                                                            <label for="rate2"> $10 - $30</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="rate3" type="checkbox" name="description" value="company">
                                                            <label for="rate3"> $30 - $60</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="rate4" type="checkbox" name="description" value="company">
                                                            <label for="rate4"> $60 - $90</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="rate5" type="checkbox" name="description" value="company">
                                                            <label for="rate5"> $90 &amp;above</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="rate2v" type="checkbox" name="description" value="company">
                                                            <label for="rate2v">$10 and below</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="rate3v" type="checkbox" name="description" value="company">
                                                            <label for="rate3v"> $10 - $30</label>
                                                        </span>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>Freelancer Type</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <form class="wt-formtheme wt-formsearch">
                                                <fieldset>
                                                    <div class="wt-checkboxholder">
                                                        <span class="wt-checkbox">
                                                            <input id="proindependent" type="checkbox" name="description" value="company" checked>
                                                            <label for="proindependent">Pro Independent Freelancers</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="proagency" type="checkbox" name="description" value="company">
                                                            <label for="proagency"> Pro Agency Freelancers</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="independent" type="checkbox" name="description" value="company">
                                                            <label for="independent"> Independent Freelancers</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="agency" type="checkbox" name="description" value="company">
                                                            <label for="agency">Agency Freelancers</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="rising" type="checkbox" name="description" value="company">
                                                            <label for="rising"> New Rising Talent</label>
                                                        </span>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>English level</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <form class="wt-formtheme wt-formsearch">
                                                <fieldset>
                                                    <div class="wt-checkboxholder">
                                                        <span class="wt-checkbox">
                                                            <input id="basic" type="checkbox" name="description" value="company" checked>
                                                            <label for="basic">Basic</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="conversational" type="checkbox" name="description" value="company">
                                                            <label for="conversational"> Conversational</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="fluent" type="checkbox" name="description" value="company">
                                                            <label for="fluent"> Fluent</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="native" type="checkbox" name="description" value="company">
                                                            <label for="native"> Native or bilingual</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="professional" type="checkbox" name="description" value="company">
                                                            <label for="professional"> Professional</label>
                                                        </span>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>Languages</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <form class="wt-formtheme wt-formsearch">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input type="text" name="fullname" class="form-control" placeholder="Search Language">
                                                        <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="wt-checkboxholder wt-verticalscrollbar">
                                                        <span class="wt-checkbox">
                                                            <input id="chinese" type="checkbox" name="description" value="company" checked>
                                                            <label for="chinese">Chinese</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="spanish" type="checkbox" name="description" value="company">
                                                            <label for="spanish">Spanish</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="english" type="checkbox" name="description" value="company">
                                                            <label for="english">English</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="arabic" type="checkbox" name="description" value="company">
                                                            <label for="arabic">Arabic</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="russian" type="checkbox" name="description" value="company">
                                                            <label for="russian">Russian</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="chinese1" type="checkbox" name="description" value="company">
                                                            <label for="chinese1">Chinese</label>
                                                        </span>
                                                        <span class="wt-checkbox">
                                                            <input id="spanish1" type="checkbox" name="description" value="company">
                                                            <label for="spanish1">Spanish</label>
                                                        </span>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-applyfilters-holder">
                                        <div class="wt-widgetcontent">
                                            <div class="wt-applyfilters">
                                                <span>Click “Apply Filter” to apply latest<br> changes made by you.</span>
                                                <a href="javascript:void(0);" class="wt-btn">Apply Filters</a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div> --}}
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-12 float-left">
                                <div class="wt-userlistingholder wt-userlisting wt-haslayout">
                                    <div class="wt-userlistingtitle">
                                        {{-- <span>01 - 48 of 57143 results for <em>"Logo Design"</em></span> --}}
                                        <span>Results for <em>"{{$searchedKeyword}}"</em></span>
                                    </div>
                                    {{-- <div class="wt-filterholder">
                                        <ul class="wt-filtertag">
                                            <li class="wt-filtertagclear">
                                                <a href="javascrip:void(0)"><i class="fa fa-times"></i> <span>Clear All Filter</span></a>
                                            </li>
                                            <li class="alert alert-dismissable fade in">
                                                <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Graphic Design</span></a>
                                            </li>
                                            <li class="alert alert-dismissable fade in">
                                                <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Hourly Rate</span></a>
                                            </li>
                                            <li class="alert alert-dismissable fade in">
                                                <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Freelancer Type</span></a>
                                            </li>
                                            <li class="alert alert-dismissable fade in">
                                                <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Chinese</span></a>
                                            </li>
                                            <li class="alert alert-dismissable fade in">
                                                <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>English</span></a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                    {{-- <div class="wt-userlistinghold wt-featured">
                                        <span class="wt-featuredtag"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                        <figure class="wt-userlistingimg">
                                            <img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="usersingle.html"><i class="fa fa-check-circle"></i> Alfredo Bossard
                                                    </a>
                                                    <h2>Classifieds Posting, Data Entry, Typing</h2>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
                                                    <li><span><img src="{{asset('/')}}assets/images/flag/img-02.png" alt="img description">  United States</span></li>
                                                    <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-rightarea">
                                                <span class="wt-starsvtwo">
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                </span>
                                                <span class="wt-starcontent">4.5/<sub>5</sub> <em>(860 Feedback)</em></span>
                                            </div>
                                        </div>
                                        <div class="wt-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris...</p>
                                        </div>
                                        <div class="wt-tag wt-widgettag">
                                            <a href="javascript:void(0);">PHP</a>
                                            <a href="javascript:void(0);">HTML</a>
                                            <a href="javascript:void(0);">JavaScript</a>
                                            <a href="javascript:void(0);">WordPress</a>
                                            <a href="javascript:void(0);">Team Management</a>
                                            <a href="javascript:void(0);">JQuery</a>
                                            <a href="javascript:void(0);">...</a>
                                        </div>
                                    </div>
                                    <div class="wt-userlistinghold wt-featured">
                                        <span class="wt-featuredtag wt-featuredtagcolor1"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                        <figure class="wt-userlistingimg">
                                            <img src="{{asset('/')}}assets/images/user/userlisting/img-02.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="usersingle.html"><i class="fa fa-check-circle"></i> Marcelene Westerberg</a>
                                                    <h2>SEO/PPC Social Media Marketing Expert</h2>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
                                                    <li><span><img src="{{asset('/')}}assets/images/flag/img-05.png" alt="img description">  United Emirates</span></li>
                                                    <li><a href="javascript:void(0);"><i class="fa fa-heart"></i> Click to Save</a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-rightarea">
                                                <span class="wt-starsvtwo">
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="wt-starcontent">4.5/<sub>5</sub> <em>(860 Feedback)</em></span>
                                            </div>
                                        </div>
                                        <div class="wt-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris...</p>
                                        </div>
                                        <div class="wt-tag wt-widgettag">
                                            <a href="javascript:void(0);">PHP</a>
                                            <a href="javascript:void(0);">HTML</a>
                                            <a href="javascript:void(0);">JavaScript</a>
                                            <a href="javascript:void(0);">WordPress</a>
                                            <a href="javascript:void(0);">Team Management</a>
                                            <a href="javascript:void(0);">JQuery</a>
                                            <a href="javascript:void(0);">...</a>
                                        </div>
                                    </div>
                                    <div class="wt-userlistinghold wt-featured">
                                        <span class="wt-featuredtag wt-featuredtagcolor2"><img src="{{asset('/')}}assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                        <figure class="wt-userlistingimg">
                                            <img src="{{asset('/')}}assets/images/user/userlisting/img-03.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="usersingle.html"><i class="fa fa-check-circle"></i>Vance Applebaum</a>
                                                    <h2>Skilled Full Stack Web Developer</h2>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
                                                    <li><span><img src="{{asset('/')}}assets/images/flag/img-01.png" alt="img description">  Australia</span></li>
                                                    <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-rightarea">
                                                <span class="wt-starsvtwo">
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="wt-starcontent">4.5/<sub>5</sub> <em>(860 Feedback)</em></span>
                                            </div>
                                        </div>
                                        <div class="wt-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris...</p>
                                        </div>
                                        <div class="wt-tag wt-widgettag">
                                            <a href="javascript:void(0);">PHP</a>
                                            <a href="javascript:void(0);">HTML</a>
                                            <a href="javascript:void(0);">JavaScript</a>
                                            <a href="javascript:void(0);">WordPress</a>
                                            <a href="javascript:void(0);">Team Management</a>
                                            <a href="javascript:void(0);">JQuery</a>
                                            <a href="javascript:void(0);">...</a>
                                        </div>
                                    </div>
                                    <div class="wt-userlistinghold">
                                        <figure class="wt-userlistingimg">
                                            <img src="{{asset('/')}}assets/images/user/userlisting/img-01.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="usersingle.html"><i class="fa fa-check-circle"></i> Herlinda Hundley
                                                    </a>
                                                    <h2>Pioneers Of eCommerce Data Entry</h2>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
                                                    <li><span><img src="{{asset('/')}}assets/images/flag/img-04.png" alt="img description">  England</span></li>
                                                    <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-rightarea">
                                                <span class="wt-starsvtwo">
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="wt-starcontent">4.5/<sub>5</sub> <em>(860 Feedback)</em></span>
                                            </div>
                                        </div>
                                        <div class="wt-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris...</p>
                                        </div>
                                        <div class="wt-tag wt-widgettag">
                                            <a href="javascript:void(0);">PHP</a>
                                            <a href="javascript:void(0);">HTML</a>
                                            <a href="javascript:void(0);">JavaScript</a>
                                            <a href="javascript:void(0);">WordPress</a>
                                        </div>
                                    </div>
                                    <div class="wt-userlistinghold">
                                        <figure class="wt-userlistingimg">
                                            <img src="{{asset('/')}}assets/images/user/userlisting/img-04.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="usersingle.html"><i class="fa fa-check-circle"></i> Valentine Mehring</a>
                                                    <h2>SEO Expert &amp; Consultant</h2>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
                                                    <li><span><img src="{{asset('/')}}assets/images/flag/img-03.png" alt="img description">  Canada</span></li>
                                                    <li><a href="javascript:void(0);"><i class="fa fa-heart"></i> Click to Save</a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-rightarea">
                                                <span class="wt-starsvtwo">
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star fill"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="wt-starcontent">4.5/<sub>5</sub> <em>(860 Feedback)</em></span>
                                            </div>
                                        </div>
                                        <div class="wt-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris...</p>
                                        </div>
                                        <div class="wt-tag wt-widgettag">
                                            <a href="javascript:void(0);">PHP</a>
                                            <a href="javascript:void(0);">HTML</a>
                                            <a href="javascript:void(0);">Team Management</a>
                                            <a href="javascript:void(0);">JQuery</a>
                                        </div>
                                    </div>
                                    <div class="wt-userlistinghold">
                                        <figure class="wt-userlistingimg">
                                            <img src="{{asset('/')}}assets/images/user/userlisting/img-05.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="usersingle.html"><i class="fa fa-check-circle"></i> Herlinda Hundley</a>
                                                    <h2>Pioneers Of eCommerce Data Entry</h2>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
                                                    <li><span><img src="{{asset('/')}}assets/images/flag/img-02.png" alt="img description">  United States</span></li>
                                                    <li><a href="javascript:void(0);"><i class="fa fa-heart"></i> Click to Save</a></li>
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
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris...</p>
                                        </div>
                                        <div class="wt-tag wt-widgettag">
                                            <a href="javascript:void(0);">PHP</a>
                                            <a href="javascript:void(0);">HTML</a>
                                            <a href="javascript:void(0);">JQuery</a>
                                        </div>
                                    </div> --}} -->
                                    @foreach($sellers as $seller)
                                    <div class="wt-userlistinghold">
                                        <figure class="wt-userlistingimg">
                                            <a href="{{route('gig-details',['id'=>$seller->id])}}"><img src="{{asset('/')}}assets/images/user/userlisting/img-06.jpg" alt="image description"></a>
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title ">
                                                    <a href="{{route('gig-details',['id'=>$seller->id])}}"><i class="fa fa-check-circle"></i> {{$seller->name}}
                                                        <h2>{{$seller->gig_title}}</h2>
                                                    </a>
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
                                        @endforeach
                                        
                                    </div>
                                    {{-- <nav class="wt-pagination">
                                        <ul>
                                            {{ $sellers->links() }}
                                        </ul>
                                    </nav> --}}
                                </div>
                                 
                                {{  $sellers->appends(Request::all())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Listing End-->
                <!--  </div>
                </main> -->
            </div>
            <br>
            
            
            @endsection