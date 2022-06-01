@extends("layoutU")

@section("content")
   	<!--about-part start-->
		<section class="about-part service-part">
			<div class="container">
				<div class="about-part-details text-left"> 
					<h2>Products</h2>
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->
      
       <!--we-do start -->
    <section class="we-do">
      <div class="container">
        <div class="we-do-details">
          <div class="section-header text-center">
            <p>Pallamco laboris nisi ut aliquip</p>
            <h2>Available Products</h2>
          </div>
          <!--/.section-header-->
        <div class="news-card news-card-pb-25">
          <div class="row">
            <div  class="col-md-4 col-sm-6">
				<ul class="list-group">
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					First checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Second checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Third checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Fourth checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Fifth checkbox
				</li>
				</ul>
				<ul class="list-group">
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					First checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Second checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Third checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Fourth checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Fifth checkbox
				</li>
				</ul>
				<ul class="list-group">
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					First checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Second checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Third checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Fourth checkbox
				</li>
				<li class="list-group-item">
					<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
					Fifth checkbox
				</li>
				</ul>
            </div>
            <div class="col-md-8 col-sm-6">
              <div class="row">
			    <?php $count = 0; ?>
				@foreach ($products as $product=>$value)
				<?php if($count == 6) break; ?>
              <div class="col-md-4 col-sm-6">
                <div class="we-do-box">
                  <div class="news-box-bg">
                    <div class="row">                    
                        <div class="we-do-img img">
						<img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />
                          {{-- <img src="assets/images/dtegku1i@2x.png" alt="blog image" /> --}}
                          <div class="isotope-overlay">
                            <a href="blog_single.html">
                                <span class="lnr lnr-link"></span>
                              </a>
                            </div>
                          </div>    
                        <div id="info">
                          <div id="p">Registered 2016</div>
                             <div id="h3">{{$value->name}}</div>
                            <div id="row_">
                              <div id="btn">
                                <div id="price">{{$value->price}}</div>
                              </div>
                            </div>
                            <div id="row">
                              <span> {{$value->tag}}</span>
                              <span> Petrol</span>
                              <span> Mannual</span>
                            </div>
                          </div>
                        
                    </div>
                        <!--/.news-box-inner-->
                  </div>            
                </div>
                <!--/.single-news-box-->
              </div>
			   <?php $count++; ?>
          @endforeach
              <!--.col-->
              </div>
             
             
          </div>
          <!--/.row-->
			</div>
        </div>
        <div class="project-btn text-center">
          <a href="project.html" class="project-view">view all </a>
        </div>    
        <!--/.we-do-details-->
      </div>
      <!--/.container-->
    </section>
    <!--/.we-do-->
    <!--we-do end-->
        
     

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