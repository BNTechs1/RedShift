@extends('layoutU')


@section('content')
		<!--about-part start-->

		<section class="about-part service-part">
			<div class="container">
				<div class="about-part-details text-left"> 
					<h2>service</h2>
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

			<!--service start-->
		<section  class="service">
				<div class="container">
					<div class="service-details">
						<div class="section-header text-center">
							<h2>our services</h2>
							<p>
								Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div><!--/.section-header-->
						<div class="service-content-one">
							<div class="row">
							  <?php $count = 0; ?>
								@foreach ($services as $service=>$value)
								<?php if($count == 4) break; ?>
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
								            {{-- <img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /> --}}
											<img src="assets/images/service/service1.png" alt="image of service" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">{{$value->name}}</a>
											</h2>
											<p>
												{{$value->description}}
											</p>
											<a href="/services/{{$value->id}}/detail" class="service-btn">
												learn more
											</a>
										</div><!--/.service-txt-->
									</div><!--/.service-single-->
								</div><!--/.col-->
								  <?php $count++; ?>
          							@endforeach
				
							</div><!--/.row-->
						</div><!--/.service-content-one-->
					</div><!--/.service-details-->
				</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

			<!--about-history start-->
			{{-- <div class="about-history">
				<div class="container">
					<div class="about-history-content">
	
						<div class="row">
	
							<div class="col-md-5 col-sm-12">
								<div class="single-about-history">
									<div class="about-history-img">
										<img src="assets/images/about/ab1.jpg" alt="about">
									</div><!--/.about-history-img-->
								</div><!--/.single-about-history-->
							</div><!--/.col-->
	
							<div class="col-md-offset-1 col-md-6 col-sm-12">
								<div class="single-about-history">
									<div class="about-history-txt">
										<h2>our history</h2>
										<p>
											Lorem ipsum dolor sit amet, consectetur adiping elit, sed do eiusmod tempor incidd ut labore rhei  et dolore magna aliqua. Ut enim ad  veniam, quis laboris nisi ut aliquip ex ea commodo. Duis aute irure dolor in repre voluptate in the velit esse.
										</p>
	
										<div class="main-timeline">
	
											<div class="row">
												<div class="col-md-2 col-sm-2">
													<div class="experience-time">
														<h3>2002</h3>
													</div><!--/.experience-time-->
												</div><!--/.col-->
												<div class="col-md-10 col-sm-10">
													<div class="timeline">
														
														<div class="timeline-content">
															<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
															
															<ul class="description">
																<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
	
															</ul>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->
	
											<div class="row">
												<div class="col-md-2 col-sm-2">
													<div class="experience-time">
														<h3>2007</h3>
													</div><!--/.experience-time-->
												</div><!--/.col-->
												<div class="col-md-10 col-sm-10">
													<div class="timeline">
														
														<div class="timeline-content">
															<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
															
															<ul class="description">
																<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
															</ul>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->
	
											<div class="row">
												<div class="col-md-2 col-sm-2">
													<div class="experience-time">
														<h3>2012</h3>
													</div><!--/.experience-time-->
												</div><!--/.col-->
												<div class="col-md-10 col-sm-10">
													<div class="timeline">
														
														<div class="timeline-content">
															<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
															
															<ul class="description">
																<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
	
															</ul>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->
	
											<div class="row">
												<div class="col-md-2 col-sm-2">
													<div class="experience-time">
														<h3>2016</h3>
													</div><!--/.experience-time-->
												</div><!--/.col-->
												<div class="col-md-10 col-sm-10">
													<div class="timeline">
														
														<div class="timeline-content">
															<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
															
															<ul class="description">
																<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
															</ul>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->
										</div><!--.main-timeline-->
									</div><!--/.about-history-txt-->
								</div><!--/.single-about-history-->
							</div><!--/.col-->
	
						</div><!--/.row-->
						<div class="row">
	
							<div class="about-vission-content">
	
								<div class="col-md-6 col-sm-12">
									<div class="single-about-history">
										<div class="about-history-txt">
											<h2>vision and mission</h2>
											<p>
												Lorem ipsum dolor sit amet, consectetur adiping elit, sed do eiusmod tempor incidd ut labore rhei  et dolore magna aliqua. Ut enim ad  veniam, quis laboris nisi ut aliquip ex ea commodo. Duis aute irure dolor in repre voluptate in the velit esse.
											</p>
	
											<div class="main-timeline  xtra-timeline">
	
												<div class="row">
													<div class="col-sm-12">
														<div class="timeline timeline-ml-20">
															
															<div class="timeline-content">
																<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
																
																<ul class="description">
																	<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
	
																</ul>
															</div><!--/.timeline-content-->
														</div><!--/.timeline-->
													</div><!--/.col-->
												</div><!--/.row-->
	
												<div class="row">
													<div class="col-sm-12">
														<div class="timeline timeline-ml-20">
															
															<div class="timeline-content">
																<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
																
																<ul class="description">
																	<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
	
																</ul>
															</div><!--/.timeline-content-->
														</div><!--/.timeline-->
													</div><!--/.col-->
												</div><!--/.row-->
	
												<div class="row">
													<div class="col-sm-12">
														<div class="timeline timeline-ml-20">
															
															<div class="timeline-content">
																<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
																
																<ul class="description">
																	<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
	
																</ul>
															</div><!--/.timeline-content-->
														</div><!--/.timeline-->
													</div><!--/.col-->
												</div><!--/.row-->
											</div><!--.main-timeline-->
										</div><!--/.about-history-txt-->
									</div><!--/.single-about-history-->
								</div><!--/.col-->
	
								<div class="col-md-offset-1 col-md-5 col-sm-12">
									<div class="single-about-history">
										<div class="about-history-img">
											<img src="assets/images/about/ab2.jpg" alt="about">
										</div><!--/.about-history-img-->
									</div><!--/.single-about-history-->
								</div><!--/.col-->
							</div><!--/.about-vission-content-->
						</div><!--/.row-->
						<div class="row">
	
							<div class="about-vission-content">
								
								<div class="col-md-offset-1 col-md-5 col-sm-12">
									<div class="single-about-history">
										<div class="about-history-img">
											<img src="assets/images/about/ab2.jpg" alt="about">
										</div><!--/.about-history-img-->
									</div><!--/.single-about-history-->
								</div><!--/.col-->
								<div class="col-md-6 col-sm-12">
									<div class="single-about-history">
										<div class="about-history-txt">
											<h2>vision and mission</h2>
											<p>
												Lorem ipsum dolor sit amet, consectetur adiping elit, sed do eiusmod tempor incidd ut labore rhei  et dolore magna aliqua. Ut enim ad  veniam, quis laboris nisi ut aliquip ex ea commodo. Duis aute irure dolor in repre voluptate in the velit esse.
											</p>
	
											<div class="main-timeline  xtra-timeline">
	
												<div class="row">
													<div class="col-sm-12">
														<div class="timeline timeline-ml-20">
															
															<div class="timeline-content">
																<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
																
																<ul class="description">
																	<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
	
																</ul>
															</div><!--/.timeline-content-->
														</div><!--/.timeline-->
													</div><!--/.col-->
												</div><!--/.row-->
	
												<div class="row">
													<div class="col-sm-12">
														<div class="timeline timeline-ml-20">
															
															<div class="timeline-content">
																<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
																
																<ul class="description">
																	<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
	
																</ul>
															</div><!--/.timeline-content-->
														</div><!--/.timeline-->
													</div><!--/.col-->
												</div><!--/.row-->
	
												<div class="row">
													<div class="col-sm-12">
														<div class="timeline timeline-ml-20">
															
															<div class="timeline-content">
																<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
																
																<ul class="description">
																	<li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>
	
																</ul>
															</div><!--/.timeline-content-->
														</div><!--/.timeline-->
													</div><!--/.col-->
												</div><!--/.row-->
											</div><!--.main-timeline-->
										</div><!--/.about-history-txt-->
									</div><!--/.single-about-history-->
								</div><!--/.col-->
							</div><!--/.about-vission-content-->
						</div><!--/.row-->
					</div><!--/.about-history-content-->
				</div><!--/.container-->
	
			</div><!--/.about-history--> --}}
			<!--about-history end-->
		
	
		
	<!--clients start-->
	<section class="clients">
		<div class="container">
			<div class="clients-area">
			<div class="owl-carousel owl-theme" id="client">
				<div class="item">
				<a href="#">
					<img src="assets/images/client/client1.png" alt="brand-image" />
				</a>
				</div>
				<!--/.item-->
				<div class="item">
				<a href="#">
					<img src="assets/images/client/client2.png" alt="brand-image" />
				</a>
				</div>
				<!--/.item-->
				<div class="item">
				<a href="#">
					<img src="assets/images/client/client3.png" alt="brand-image" />
				</a>
				</div>
				<!--/.item-->
				<div class="item">
				<a href="#">
					<img src="assets/images/client/client4.png" alt="brand-image" />
				</a>
				</div>
				<!--/.item-->
				<div class="item">
				<a href="#">
					<img src="assets/images/client/client5.png" alt="brand-image" />
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