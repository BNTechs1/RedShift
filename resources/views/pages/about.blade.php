@extends('layoutU')

@section('content')
		<!--about-part start-->
		<section class="about-part">
			<div class="container">
				<div class="about-part-details text-left"> 
					<h2>about </h2>
					
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

		 <!--we-do start -->
		<section  class="we-do">
			<div class="container">
				<div class="we-do-details">
					<div class="section-header text-center">
						<h2>About Us</h2>
					 <p class="about"style="text-align : Center">
                    Redshift corp is a company that operates in different sectors. With over seven years of combined experience, we thrive to bring quality and value to the different sectors we are involved in. Currently, our focus areas are construction, manufacturing, and consultancy.
            	We have upcoming projects varying from restaurants to startup hubs where we help you transform your ideas into a real product.</p>
                  </p>
					</div><!--/.section-header-->
					<div class="we-do-carousel">
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
											<div class="we-do-topics">
												<h2>
													<a href="#">
													  Mission
													</a>
												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment " style="text-align : Center">
											<p>
  											Our company's mission is to provide high-quality services to out customers.
											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
										
											<div class="we-do-topics">
												<h2>
                        
													<a href="#">
														Vision
													</a>
												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment">
											<p>
											Our vision is to be the top provider of these services in our region and beyond. 

											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
										
											<div class="we-do-topics">
												<h2>
													<a href="#">
														Goal
													</a>
                          

												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment" style="text-align : Center">
											<p>
												Our goal is to provide excellent customer service while maintaining a high level of quality in everything we do.

											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
						</div><!--/.row-->
					</div><!--/.we-do-carousel-->
				</div><!--/.we-do-details-->
			</div><!--/.container-->
     		 <div class="project-btn text-center">  
              <a href="/about" class="service-view">read more </a>
              </div>

		</section><!--/.we-do-->
		<!--we-do end-->
			

		</section><!--/.we-do-->
		<!--we-do end-->

			
		<!--about-history start-->
		<div class="about-history">
			<div class="container">
				<div class="about-history-content">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="single-about-history">
								<div class="about-history-img">
									<img src="assets/images/logo.jpg" alt="about">
								</div><!--/.about-history-img-->
							</div><!--/.single-about-history-->
						</div><!--/.col-->

						<div class="col-md-offset-1 col-md-6 col-sm-12">
							<div class="single-about-history">
								<div class="about-history-txt">
									<p> We have been a leading company in the construction business and contributed to the fast growth of our country by...</p>
										<div class="timeline">			
											<div class="timeline-content">
												<div class="description">
												<h2 class="title"><span><i class="fa fa-circle-o" aria-hidden="true"></i></span>Construction</h2>

														<div class="icon-box" data-aos="fade-up" data-aos-delay="100">

													<p class="description">Recently we’ve partnered with a well-known American paving and Road construction company called Landlock.</p>
													</div>
												</div>
											</div><!--/.timeline-content-->
										</div><!--/.timeline-->
										<div class="timeline">	
											<div class="timeline-content">
												<h2 class="title"><span><i class="fa fa-circle-o" aria-hidden="true"></i></span>Import and Export</h2>
												<div class="description">
													<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
													<p class="description">Importing and exporting goods in and out of the country</p>
													</div>
												</div>
											</div><!--/.timeline-content-->
										</div><!--/.timeline-->
										<div class="timeline">	
											<div class="timeline-content">
												<h2 class="title"><span><i class="fa fa-circle-o" aria-hidden="true"></i></span>Selling Cars</h2>
												<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
												<p class="description">Designing and building, iconic buildings in different cities.</p>
												</div>
											</div><!--/.timeline-content-->
										</div><!--/.timeline-->
								</div><!--/.about-history-txt-->
							</div><!--/.single-about-history-->
						</div><!--/.col-->

					</div><!--/.row-->
				</div><!--/.about-history-content-->
			</div><!--/.container-->

		</div><!--/.about-history-->
		<!--about-history end-->
		
		 

		<!--team start -->
		<section id="team" class="team  team-main">
			<div class="container">
				<div class="team-details">
					<div class="project-header team-header team-head text-center">
						<h2>Our expert team</h2>
						<p>
							Pallamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
					</div><!--/.project-header-->
					<div class="team-card">
						<div class="container">
							<div class="row">
								<div class="owl-carousel  team-carousel">
								 	<?php $count = 0; ?>
									@foreach ($teams as $team=>$value)
									<?php if($count == 4) break; ?>
									<div class="col-sm-3 col-xs-12">
										<div class="single-team-box single-team-card">
											  <img src="{{ $value->image}}" alt="blog image" />

                        						{{-- <img class="team-box-bg-1" src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /> --}}
											<div class="team-box-inner">
												<h3>{{$value->name}}</h3>
												<p class="team-meta">{{$value->description}}/p>
												<a href="team.html" class="learn-btn">
													learn more
												</a>
											</div><!--/.team-box-inner-->

										</div><!--/.single-team-box-->
									</div><!--.col-->
									<?php $count++; ?>
          							@endforeach
								</div><!--/.team-carousel-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.team-card-->
				</div><!--/.team-details-->
			</div><!--/.container-->
			
		</section><!--/.team-->
		<!--team end-->
		
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