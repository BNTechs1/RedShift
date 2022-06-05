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

    <!--about-us start -->
    <section class="about-us">

      <div class="container">
        <div class="about-us-content">
          <div class="row">
            <div class="col-sm-6">
              <div class="single-about-us">
                <div class="about-us-img">
                  <img
                    src="assets/images/about/7.jpg"
                    alt="about images"
                  />
                </div>
                <!--/.about-us-img-->
              </div>
              <!--/.single-about-us-->
            </div>
            <!--/.col-->
            <div class="col-sm-6">
              <div class="single-about-us">
                <div class="about-us-txt">
                  <h2>about us</h2>
                  <p>
                    Redshift corp is a company that operates in different sectors. With over seven years of combined experience, we thrive to bring quality and value to the different sectors we are involved in. Currently, our focus areas are construction, manufacturing, and consultancy.
            We have upcoming projects varying from restaurants to startup hubs where we help you transform your ideas into a real product.</p>
                  </p>
                  <div class="project-btn">
                    <a href="/about" class="project-view">learn more </a>
                  </div>
                  <!--/.project-btn-->
                </div>
                <!--/.about-us-txt-->
              </div>
              <!--/.single-about-us-->
            </div>
           
          </div>
          <!--/.row-->
        </div>
        <!--/.about-us-content-->
      </div>
      <!--/.container-->
    </section>
    <!--/.about-us-->
    <!--about-us end -->

	<!--news start -->
	<section class="news">
		<div class="container">
		  <div class="news-details">
			<div class="section-header text-center">
			  <h2>Our Services</h2>
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
          <?php if($count == 4) break; ?>
				<div class="col-md-4 col-sm-6">
				  <div class="single-news-box">
					<div class="news-box-bg">
            <img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />
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
						<a href="blog_single.html">
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
                        <img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />
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
                              <div id="price">{{$value->price}}</div>
                            </div>
                          </div>
                          <div id="row">
                            <span> {{$value->tag}}</span>
                            <span> Petrol</span>
                            <span> Mannual</span>
                          </div>
                        </div> 
                        <a  href="/products/{{$value->id}}/detail" class=" service-btn ">
												Details
											</a>    
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

    <!--project start-->
    <section id="project"  class="project">
        <div class="container">
            <div class="project-details">
                <div class="project-header text-left">
                    <h2>Gallery Of Products</h2>
                    {{-- <p>
                        Pallamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p> --}}
                </div><!--/.project-header-->
                <div class="project-content">
                    <div class="gallery-content">
                        <div class="isotope">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                    <?php $count = 0; ?>
                    @foreach ($products as $product=>$value)
                    <?php if($count == 4) break; ?>
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="item">
                    <img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />
                                                {{-- <img src="assets/images/1.jpg" alt="portfolio image"/> --}}
                                                <div class="isotope-overlay">
                                                    <a href="project.html">
                                                        <span class="lnr lnr-link"></span>
                                                        
                                                    </a>
                                                    <h3>
                                                        <a href="project.html">
                                                            aquisition plan
                                                        </a>
                                                    </h3>
                                                    <p>busisness planning</p>
                                                </div><!-- /.isotope-overlay -->
                                            </div><!-- /.item -->
                                        </div><!-- /.col -->
                    <?php $count++; ?>
                            @endforeach
                                    </div><!-- /.row-->
                                    

                                </div><!-- /.col -->
                            </div><!-- /.row -->
                            
                        </div><!--/.isotope-->
                    </div><!--/.gallery-content-->
                </div><!--/.project-content-->
            </div><!--/.project-details-->
        </div><!--/.container-->

    </section><!--/.project-->
    <!--project end-->

    <!--project start-->
    <section id="project" class="project">
        <div class="container">
            <div class="project-details">
            <div class="project-header text-center">
                {{-- <p class="text-center">out latest projects</p> --}}

                <h2>Portfolios</h2> 
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
                                    <?php if($count == 4) break; ?>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="item">
                                        <img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />

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
            <div class="project-btn text-center">
            <a href="/portfolios" class="project-view">view all </a>
            </div>
            <!--/.project-btn-->
        </div>
        <!--/.container-->
    </section>
	<!--project end-->

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
