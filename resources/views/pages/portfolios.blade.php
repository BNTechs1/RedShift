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
		
		<!--service start-->
		<section  class="service">
				<div class="container">
					<div class="service-details">
						<div class="section-header text-center">
							<h1>our Latest projects</h1>
							
						</div><!--/.section-header-->
						<div class="service-content-one">
							<div class="row">
							  	<?php $count = 0; ?>
								@foreach ($portfolios as $portfolio=>$value)
								<?php if($count == 10) break; ?>
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											  <img src="{{ $value->image}}" alt="blog image" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">{{$value->name}}</a>
											</h2>
											<p>
												{{$value->description}}
											</p>
											<a href="/portfolios/{{$value->id}}/detail" class="service-btn">
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