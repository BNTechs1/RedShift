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
						<h2 class="price-head">our pricing table</h2>
						<p>
							Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						</p>
					</div><!--/.section-header-->
					<div class="pricing-content">
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
                                    </div><!--/.col-->
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



