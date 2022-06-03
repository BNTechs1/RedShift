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

    <!--pricing start -->
		<section id="pricing" class="pricing">
			<div class="container">
				<div class="pricing-details">
					<div class="section-header text-center">
						<h2 class="price-head">Available Products</h2>
						<p>
							olore eu fugiat nulla pariatur. 
						</p>
					</div><!--/.section-header-->
					<div class="pricing-content">
                        <div class="row">
                            <div class="col-md-4">
								<div class="blog-right">
									<div class="blogs-widget">
										<form>
											<input type="text" class="form-control" placeholder="Search">
										</form><!--/.form-->
										<div class="blog-search-icon">
											<a href="#">
												<span class="lnr lnr-magnifier">
													
												</span>
											</a>
										</div><!--/.blog-search-icon-->
									</div><!--/.blog-widget-->

									<div class="blogs-widget">
										<h2>categories</h2>
										<div class="blog-categories-list">
											<ul>
												<li><a href="#">all</a></li>
												<li><a href="#">busisness</a></li>
												<li><a href="#">consultency</a></li>
												<li><a href="#">corporate</a></li>
												<li><a href="#">politics</a></li>
												<li><a href="#">marketing</a></li>
												<li><a href="#">lifestyle</a></li>
											</ul>
										</div><!--/.blog-categories-list-->
									</div><!--/.blog-widget-->

									<div class="blogs-widget">
										<h2>popular tags</h2>
										<div class="blog-tags">
											<button type="button" class="btn btn-default">busisness</button>
											<button type="button" class="btn btn-default">consultency</button>
											<button type="button" class="btn btn-default">market</button><br />
											<button type="button" class="btn btn-default">sales</button>
											<button type="button" class="btn btn-default">corporate</button>
											<button type="button" class="btn btn-default">politics</button>
										</div><!--/.blog-tags-->
									</div><!--/.blog-widget-->

								</div><!--/.blog-right-->

							</div><!--/.col-->
                            <div class="col-md-8 col-sm-6">
                                <div class="row">
                                    <?php $count = 0; ?>
                                    @foreach ($products as $product=>$value)
                                    <?php if($count == 6) break; ?>
                                    <a class="col-md-4 col-sm-6"  href="/products/{{$value->id}}/detail">
                                    {{-- <div class="col-md-4 col-sm-6" > --}}
                                        <div class="pricing-box">
                                            <div class="pricing-header">
                                                <img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />
                                            
                                            </div><!--/.pricing-header-->
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
                                                
                                        </div><!--/.pricing-box-->
                                    {{-- </div><!--/.col--> --}}
                                    </a>
                                    <?php $count++; ?>
                                    @endforeach
                                    

                                </div><!--/.row-->
                            </div>
                        </div>
					</div><!--/.pricing-content-->
				</div><!--/.pricing-details-->
			</div><!--/.container-->

		</section><!--/.pricing-->
		<!--pricing end-->
        
     

   	
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



