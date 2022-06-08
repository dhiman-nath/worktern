@extends('front.master')

@section('body')

<main id="wt-main" class="wt-main wt-haslayout">
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
							<figure><img src="{{asset('/')}}assets/images/categories/img-04.png" alt="image description"></figure>
							<div class="wt-cattitle">
								<h3><a href="javascrip:void(0);">{{$category->name}}</a></h3>
							</div>
							<div class="wt-categoryslidup">
								<p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
								<a href="{{route('category-sellers',['id'=>$category->id])}}">Explore <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					@endforeach
									<!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
										<div class="wt-categorycontent">
											<figure><img src="{{asset('/')}}assets/images/categories/img-08.png" alt="image description"></figure>
											<div class="wt-cattitle">
												<h3><a href="javascrip:void(0);">Digital Marketing</a></h3>
											</div>
											<div class="wt-categoryslidup">
												<p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
												<a href="javascript:void(0);">Explore <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
										<div class="wt-categorycontent">
											<figure><img src="{{asset('/')}}assets/images/categories/img-02.png" alt="image description"></figure>
											<div class="wt-cattitle">
												<h3><a href="javascrip:void(0);">Writing &amp; Translation</a></h3>
											</div>
											<div class="wt-categoryslidup">
												<p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
												<a href="javascript:void(0);">Explore <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
										<div class="wt-categorycontent">
											<figure><img src="{{asset('/')}}assets/images/categories/img-03.png" alt="image description"></figure>
											<div class="wt-cattitle">
												<h3><a href="javascrip:void(0);">Video &amp; Animation</a></h3>
											</div>
											<div class="wt-categoryslidup">
												<p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
												<a href="javascript:void(0);">Explore <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
										<div class="wt-categorycontent">
											<figure><img src="{{asset('/')}}assets/images/categories/img-04.png" alt="image description"></figure>
											<div class="wt-cattitle">
												<h3><a href="javascrip:void(0);">Music &amp; Audio</a></h3>
											</div>
											<div class="wt-categoryslidup">
												<p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
												<a href="javascript:void(0);">Explore <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
										<div class="wt-categorycontent">
											<figure><img src="{{asset('/')}}assets/images/categories/img-05.png" alt="image description"></figure>
											<div class="wt-cattitle">
												<h3><a href="javascrip:void(0);">Programming &amp; Tech</a></h3>
											</div>
											<div class="wt-categoryslidup">
												<p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
												<a href="javascript:void(0);">Explore <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
										<div class="wt-categorycontent">
											<figure><img src="{{asset('/')}}assets/images/categories/img-06.png" alt="image description"></figure>
											<div class="wt-cattitle">
												<h3><a href="javascrip:void(0);">Business</a></h3>
											</div>
											<div class="wt-categoryslidup">
												<p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
												<a href="javascript:void(0);">Explore <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
										<div class="wt-categorycontent">
											<figure><img src="{{asset('/')}}assets/images/categories/img-07.png" alt="image description"></figure>
											<div class="wt-cattitle">
												<h3><a href="javascrip:void(0);">Fun &amp; Lifestyle</a></h3>
											</div>
											<div class="wt-categoryslidup">
												<p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
												<a href="javascript:void(0);">Explore <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div> -->
									<!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
										<div class="wt-btnarea">
											<a href="javascript:void(0)" class="wt-btn">View All</a>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</section>
				</main>
				<!--Categories End-->

				@endsection