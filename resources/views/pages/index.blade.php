@extends('layoutU')


@section('content')

    <!-- header-slider-area start -->
    <section class="header-slider-area">
      <div
        id="carousel-example-generic"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li
            data-target="#carousel-example-generic"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="single-slide-item slide-1">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="single-slide-item-content d-flex flex-col ailgn-items-end">
                      <h2>
                        Red Shift
                      </h2>
                      <p>
                       Redshift corp is a company that operates in different sectors. With over seven years of combined experience, we thrive to bring quality and value to the different sectors we are involved in.
                      </p>
                      <button type="button" class="slide-btn">
                        View more
                      </button>
                    </div>
                    <!-- /.single-slide-item-content-->
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
              </div>
              <!-- /.container-->
            </div>
            <!-- /.single-slide-item-->
          </div>
          <!-- /.item .active-->
          <div class="item ">
            <div class="single-slide-item slide-2">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="single-slide-item-content d-flex flex-col ailgn-items-end">
                      <h2>
                        Red Shift
                      </h2>
                      <p>
                       Redshift corp is a company that operates in different sectors. With over seven years of combined experience, we thrive to bring quality and value to the different sectors we are involved in.
                      </p>
                      <button type="button" class="slide-btn">
                        View more
                      </button>
                    </div>
                    <!-- /.single-slide-item-content-->
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
              </div>
              <!-- /.container-->
            </div>
            <!-- /.single-slide-item-->
          </div>
          <!-- /.item .active-->
          <div class="item">
            <div class="single-slide-item slide-3">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="single-slide-item-content">
                      <h2>
                        Red Shift
                      </h2>
                      <p>
                       Redshift corp is a company that operates in different sectors. With over seven years of combined experience, we thrive to bring quality and value to the different sectors we are involved in.
                      </p>
                     
                      <button type="button" class="slide-btn">
                        view more
                      </button>
                    </div>
                    <!-- /.single-slide-item-content-->
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
              </div>
              <!-- /.container-->
            </div>
            <!-- /.single-slide-item-->
          </div>
          <!-- /.item .active-->
        </div>
        <!-- /.carousel-inner-->

        <!-- Controls -->
        <a
          class="left carousel-control"
          href="#carousel-example-generic"
          role="button"
          data-slide="prev"
        >
          <span class="lnr lnr-chevron-left"></span>
        </a>
        <a
          class="right carousel-control"
          href="#carousel-example-generic"
          role="button"
          data-slide="next"
        >
          <span class="lnr lnr-chevron-right"></span>
        </a>
      </div>
      <!-- /.carousel-->
    </section>
    <!-- /.header-slider-area-->
    <!-- header-slider-area end -->

   
  <!-- ======= About Section ======= -->
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

  <!-- ======= Services Section ======= -->
    <!--news start -->
    <section class="news">
      <div class="container">
        <div class="news-details">
        <div class="section-header text-center">
          <h1>Our Services</h1>
          {{-- <p>
          Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum
          dolore eu fugiat nulla pariatur.
          </p> --}}
        </div>
        <!--/.section-header-->
        <div class="news-card news-card-pb-25">
          <div class="row">
          <?php $count = 0; ?>
            @foreach ($services as $service=>$value)
            <?php if($count == 3) break; ?>
          <div class="col-md-4 col-sm-6">
            <div class="single-news-box">
            <div class="news-box-bg">
                          <img src="{{ $value->image}}" alt="blog image" />
              
              {{-- <img src="assets/images/p36kj8dg@2x.png" alt="blog image" /> --}}
              <div class="isotope-overlay">
              <a href="blog_single.html">
                <span class="lnr lnr-link"></span>
              </a>
              </div>
            </div>
            <!--/.team-box-bg-->
            <div class="news-box-inner">
              <div id="h3">{{$value->name}}</div>
              <h3>
              <a>
                {{$value->description}}
              </a>
              </h3>
              <div class="project-btn text-center">  
                <a href="/services/{{$value->id}}/detail" class="service-view">read more </a>
                </div>
              <!-- <a href="#" class="learn-btn">
                            learn more
                          </a> -->
            </div>
            <!--/.news-box-inner-->
            </div>
            <!--/.single-news-box-->
          </div>
          <!--.col-->
          <?php $count++; ?>
            @endforeach
          
          <!--/.row-->
          <!--/.project-btn-->
        </div>
        <!--/.news-card-->
        <div class="project-btn text-center">
          <a href="/services" class="project-view">read more </a>
          </div>
        </div>
        <!--/news-details-->
      </div>
      <!--/.container-->
    </section>
    <!--/news-->
    <!--news end-->

  <!-- ======= Products Section ======= -->
    <!--we-do start -->
    <section class="we-do">
      <div class="container">
        <div class="we-do-details">
          <div class="section-header text-center">
            {{-- <p>Pallamco laboris nisi ut aliquip</p> --}}
            <h2>Available Products</h2>
          </div>
          <!--/.section-header-->
        <div class="news-card news-card-pb-25">
          <div class="row">
          <?php $count = 0; ?>
          @foreach ($products as $product=>$value)
          <?php if($count == 4) break; ?>
            <div class="col-md-6 col-sm-6">
              <div class="we-do-box">
                <div class="news-box-bg">
                  <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <div class="we-do-img img">
                      {{-- {{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}} --}}
                        <img src="{{ $value->image}}" alt="blog image" />
                        {{-- <img src="assets/images/dtegku1i@2x.png" alt="blog image" /> --}}
                        <div class="isotope-overlay">
                        <a href="blog_single.html">
                              <span class="lnr lnr-link"></span>
                            </a>
                          </div>
                        </div>    
                     </div>
                      <div class="col-sm-6 col-md-6" >
                        <div id="info">
                          <div id="p">Registered 2016</div>
                          <div id="h3">{{$value->name}}</div>
                          <div id="row_">
                            <div id="btn">
                              <div id="price">{{$value->price}}ETB</div>
                            </div>
                          </div>
                          <div id="row">
                          <x-products-tags :tagsCsv="$value->tag" />
                          </div>
                        </div> 
                       
                        <!--/.news-box-inner-->
                      </div>
                  </div>
                </div>        
              </div>
              <!--/.single-news-box-->
              
            </div>
            <?php $count++; ?>
          @endforeach
          </div>
          <!--/.row-->
			</div>
        </div>
        <div class="project-btn text-center">
          <a href="/products" class="project-view">view all </a>
        </div>    
        <!--/.we-do-details-->
      </div>
      <!--/.container-->
    </section>
    <!--/.we-do-->
    <!--we-do end-->

  <!-- ======= News Section ======= -->
    <!-- new-project start -->
    <section  id="new-project" class="new-project">
            <div class="container">
                <div class="new-project-details">
                    <div class="row">
                        <div class="col-md-10 col-sm-8">
                            <div class="single-new-project">
                                <h3>
                checkout our latest news and blogs
                                </h3>
                            </div><!-- /.single-new-project-->	
                        </div><!-- /.col-->	
                        <div class="col-md-2 col-sm-4">
                            <div class="single-new-project">
                                <a href="/news" class="slide-btn">
                                    Blogs
                                </a>
                            </div><!-- /.single-new-project-->	
                        </div><!-- /.col-->	
                    </div><!-- /.row-->	
                </div><!-- /.new-project-details-->	
            </div><!-- /.container-->	

    </section><!-- /.new-project-->	
    <!-- new-project end -->


  <!-- ======= Portfolio Section ======= -->
    	<!--service start-->
		<section  class="service">
				<div class="container">
					<div class="service-details">
						<div class="section-header text-center">
							<h1>Portfolios</h1>
							
						</div><!--/.section-header-->
						<div class="service-content-one">
							<div class="row">
							  	<?php $count = 0; ?>
								@foreach ($portfolios as $portfolio=>$value)
								<?php if($count == 3) break; ?>
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											  <img src="{{ $value->image}}" alt="blog image" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">{{$value->name}}</a>
											</h2>
										</div><!--/.service-txt-->
									</div><!--/.service-single-->
								</div><!--/.col-->
								<?php $count++; ?>
          						@endforeach
							</div><!--/.row-->
						</div><!--/.service-content-one-->
					</div><!--/.service-details-->
            <div class="project-btn text-center">
          <a href="/portfolios" class="project-view">view all </a>
        </div>    
				</div><!--/.container-->
		</section><!--/.service-->
		<!--service end-->

<!-- ======= Clients Section ======= -->
	<!--clients start-->
	<section class="clients">
		<div class="container">
			<div class="clients-area">
			<div class="owl-carousel owl-theme" id="client">
				<div class="item">
				<a href="#">
					<img src="assets/images/img/landlock.png" alt="brand-image" />
				</a>
				</div>
				<!--/.item-->
				<div class="item">
				<a href="#">
					<img src="assets/images/img/bn-logo1.png" alt="brand-image" />
				</a>
				</div>
				<!--/.item-->
				<div class="item">
				<a href="#">
					<img src="assets/images/img/tolo.png" alt="brand-image" />
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



     <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="clearfix">
      <div class="container" data-aos="fade-up">

         <div class="project-header text-left">
                    <h2>Gallery Of Products</h2>
                  
                </div><!--/.project-header-->
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/images/img/tricycle.jpg" class="img-fluid zoom-in-zoom-out" alt="">
              <div class="portfolio-info">
                <h4><a href="manufacturing.html">Manufacturing</a></h4>
                <p>Model- GAS 101RA CA/21</p>
                <div>
                  <a href="assets/images/img/tricycle.jpg" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="manufacturing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/images/img/tricycle1.jpg" class="img-fluid zoom-in-zoom-out" alt="">
              <div class="portfolio-info">
                <h4><a href="manufacturing.html">Manufacturing</a></h4>
                <p>Model- GAS 101RA CA/21</p>
                <div>
                  <a href="assets/images/img/tricycle1.jpg" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="manufacturing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/images/img/tricycle2.jpg" class="img-fluid zoom-in-zoom-out" alt="">
              <div class="portfolio-info">
                <h4><a href="manufacturing.html">Manufacturing</a></h4>
                <p>Model- GAS 101RA CA/21</p>
                <div>
                  <a href="assets/images/img/tricycle2.jpg" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="manufacturing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/images/img/bluecar1.jpg" class="img-fluid zoom-in-zoom-out" alt="">
              <div class="portfolio-info">
                <h4><a href="manufacturing.html">Manufacturing</a></h4>
                <p>Model -GAS 102RA CA /21</p>
                <div>
                  <a href="assets/images/img/bluecar1.jpg" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="manufacturing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/images/img/bluecar2.jpg" class="img-fluid zoom-in-zoom-out" alt="">
              <div class="portfolio-info">
                <h4><a href="manufacturing.html">Manufacturing</a></h4>
                <p>Model -GAS 102RA CA /21</p>
                <div>
                  <a href="assets/images/img/bluecar2.jpg" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="manufacturing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/images/img/redcar.jpg" class="img-fluid zoom-in-zoom-out" alt="">
              <div class="portfolio-info">
                <h4><a href="manufacturing.html">Manufacturing</a></h4>
                <p></p>
                <div>
                  <a href="assets/images/img/redcar.jpg" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="manufacturing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/images/img/bluecar2.jpg" class="img-fluid zoom-in-zoom-out" alt="">
              <div class="portfolio-info">
                <h4><a href="manufacturing.html">Manufacturing</a></h4>
                <p>Model -GAS 102RA CA /21</p>
                <div>
                  <a href="assets/images/img/bluecar2.jpg" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="manufacturing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/images/img/redcar.jpg" class="img-fluid zoom-in-zoom-out" alt="">
              <div class="portfolio-info">
                <h4><a href="manufacturing.html">Manufacturing</a></h4>
                <p></p>
                <div>
                  <a href="assets/images/img/redcar.jpg" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="manufacturing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section --> --}}