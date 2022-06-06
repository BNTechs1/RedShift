@extends("layoutU")		

@section('content')
			<!--about-part start-->
		<section class="about-part service-part">
			<div class="container">
				<div class="about-part-details text-left"> 
					<h2>Portfolio</h2>
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->
		
		<!--project start-->
		<section id="project" class="project">
			<div class="container">
				<div class="project-details">
				<div class="project-header text-center">
					<h2>Our Latest Projects</h2> 
					<!-- <p>Pallamco laboris nisi ut aliquip ex ea commodo consequat.</p> --> 
				</div>
				<!--/.project-header-->
				<div class="project-content">
					<div class="gallery-content">
						<div class="isotope">
							<div class="row">
								<!-- /.col -->
								<div class="col-md-12 col-sm-12">
									<div class="row">
										 <?php $count = 0; ?>
										@foreach ($portfolios as $portfolio=>$value)
										<div class="col-sm-4 col-xs-12">
											<div class="item">
											  <img src="{{ $value->image}}" alt="blog image" />

                        					{{-- <img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /> --}}

											{{-- <img
											src="assets/images/project/project2.jpg"
											alt="portfolio image"
											/> --}}
											<div class="isotope-overlay">
											<a href="project.html">
											<span class="lnr lnr-link"></span>
											</a>
											<h3>
											<a href="project.html"> {{$value->name}}</a>
											</h3>
											<p>{{$value->description}}</p>
											</div>
											<!-- /.isotope-overlay -->
											</div>
											<!-- /.item -->
										</div>
										<!-- /.col -->
										<?php $count++; ?>
         								 @endforeach
									</div>
								</div>		
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>
						<!--/.isotope-->
					</div>
					<!--/.gallery-content-->
				</div>
				<!--/.project-content-->
				</div>
				<!--/.project-details-->
				{{-- <div class="project-btn text-center">
				<a href="project.html" class="project-view">view all </a>
				</div> --}}
				<!--/.project-btn-->
			</div>
		<!--/.container-->
		</section>
		<!--/.project-->
		<!--project end-->
		
	<!--clients start-->
		<section class="clients">
			<div class="container">
				<div class="clients-area">
				<div class="owl-carousel owl-theme" id="client">
					<div class="item">
					<a href="#">
						 <img src="assets/images/img/landlock.png" class="img-fluid" alt="">
					</a>
					</div>
					<!--/.item-->
					<div class="item">
					<a href="#">
						<img src="assets/images/img/bn-logo1.png" class="img-fluid" alt="">
					</a>
					</div>
					<!--/.item-->
					<div class="item">
					<a href="#">
						 <img src="assets/images/img/tolo.png" class="img-fluid" alt="">
					</a>
					</div>
					<!--/.item-->
				</div>
				<!--/.owl-carousel-->
				</div>
				<!--/.clients-area-->
			</div>
			<!--/.container-->
		</section>
		<!--/.clients-->
		<!--clients end-->
@endsection