@extends('layoutU')


@section('content')
	<!--about-part start-->

    <section class="about-part service-part">
        <div class="container">
            <div class="about-part-details text-left"> 
                <h2>{{$product->name}} Product</h2>
            </div><!--/.about-part-details-->	
        </div><!--/.container-->

    </section><!--/.about-part-->
    <!--about-part end-->


    <!--about-history start-->
    <div class="about-history">
        <div class="container">
            <div class="about-history-content">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="single-about-history">
                            <div class="about-history-img">
											  <img src="{{ $product->image}}" alt="blog image" />

							 {{-- <img src="{{$product->image ? asset('storage/' . $product->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /> --}}
                                {{-- <img src="assets/images/about/ab1.jpg" alt="about"> --}}
                            </div><!--/.about-history-img-->
                        </div><!--/.single-about-history-->
                    </div><!--/.col-->
                    <div class="col-md-4">
                            <div class=row>
                             <div class=" px-4">
                                <div class="hm-footer-widget">
                                    <div class="product-data">	  
                                        <ul class="">
                                            <li>
                                                <h6>Brand</h6>
                                                <h3>Toyota</h3>
                                                {{-- <a  >Millgae:  {{$product->name}}</a> --}}
                                            </li>
                                            <li>
                                                <h6>Brand</h6>
                                                <h3>Toyota</h3>
                                                {{-- <a  >Millgae:  {{$product->name}}</a> --}}
                                            </li>
                                            <li>
                                                <h6>Brand</h6>
                                                <h3>Toyota</h3>
                                                {{-- <a  >Millgae:  {{$product->name}}</a> --}}
                                            </li>
                                            <li>
                                                <h6>Brand</h6>
                                                <h3>Toyota</h3>
                                                {{-- <a  >Millgae:  {{$product->name}}</a> --}}
                                            </li>
                                        </ul>
                                    </div><!-- /.footer-menu-->
                                </div><!--/.hm-footer-widget-->
                            </div><!--/.col-->
                        </div>
                            {{-- <div class="blog-right">
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

                                

                            </div><!--/.blog-right--> --}}

                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.about-history-content-->
        </div><!--/.container-->

    </div><!--/.about-history-->
    <!--about-history end-->

   


 @endsection