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
					</div><!--/.section-header-->
					<div class="pricing-content">
                        <div class="row">
                            <div class="col-md-4">
								<div class="blog-right">
									<div class="blogs-widget">
										<form action="/products">
											<input type="text" name="search" class="form-control" placeholder="Search">
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
												@foreach ($products as $product)
													@php 
													$tags = explode(',',$product->tag)
													@endphp
													@foreach ($tags as $tag)
														<li><a href="/products/?tag={{$tag}}">{{$tag}}</a></li>													
													@endforeach
												@endforeach
											</ul>
										</div><!--/.blog-categories-list-->
									</div><!--/.blog-widget-->

									

								</div><!--/.blog-right-->

							</div><!--/.col-->
                            <div class="col-md-8 col-sm-6">
                                <div class="row">
                                    <?php $count = 0; ?>
                                    @foreach ($products as $product)
                                    <?php if($count == 6) break; ?>
                                    <div class="col-md-4 col-sm-6"  >
                                    {{-- <div class="col-md-4 col-sm-6" > --}}
                                        <div class="pricing-box">
                                            <div class="pricing-header">
                                                <img src="{{$product->image ? asset('storage/' . $product->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />
                                            
                                            </div><!--/.pricing-header-->
                                                <div id="info">
                                                    <div id="p">Registered 2016</div>
                                                    <div id="h3">{{$product->name}}</div>
                                                    <div id="row_">
                                                        <div id="btn">
                                                            <div id="price">{{$product->price}}</div>
                                                        </div>
                                                    </div>
													<div id=row>
                                                    <x-products-tags :tagsCsv="$product->tag" />
													</div>
												
	                                            </div>
									<a href="/products/{{$product->id}}/detail">Details</a>
											
                                        </div><!--/.pricing-box-->
                                    {{-- </div><!--/.col--> --}}

                                    </div>
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



