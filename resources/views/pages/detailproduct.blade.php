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
							 <img src="{{$product->image ? asset('storage/' . $product->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />
                                {{-- <img src="assets/images/about/ab1.jpg" alt="about"> --}}
                            </div><!--/.about-history-img-->
                        </div><!--/.single-about-history-->
                    </div><!--/.col-->
                    <div class="col-md-4">
                            <div class="blog-right">
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
                </div><!--/.row-->
            </div><!--/.about-history-content-->
        </div><!--/.container-->

    </div><!--/.about-history-->
    <!--about-history end-->

    <!--hm-footer start-->
    <section class="hm-footer">
        <div class="container">
            <div class="hm-footer-details">
                <div class="row">
                    <div class="col-md-8">
                        <div class=row>
                             <div class=" col-md-4 col-sm-6 col-xs-12">
                                <div class="hm-footer-widget">
                                    {{-- <div class="hm-foot-title">
                                        <h4>Useful Links</h4>
                                    </div><!--/.hm-foot-title--> --}}
                                    <div class="footer-menu ">	  
                                        <ul class="">
                                            <li><a href="index.html" >Millgae</a></li>
                                            <li><a href="about.html">CC</a></li>
                                            <li><a href="services.html">Model</a></li>
                                            <li><a href="portfolio.html">Engine</a></li>
                                            <li><a href="blog.html">wheel</a></li>
                                            <li><a href="contact.html">type</a></li> 
                                        </ul>
                                    </div><!-- /.footer-menu-->
                                </div><!--/.hm-footer-widget-->
                            </div><!--/.col-->
                            <div class=" col-md-4 col-sm-6 col-xs-12">
                                <div class="hm-footer-widget">
                                     <div class="footer-menu ">	  
                                        <ul class="">
                                            <li><a href="index.html" >Millgae</a></li>
                                            <li><a href="about.html">CC</a></li>
                                            <li><a href="services.html">Model</a></li>
                                            <li><a href="portfolio.html">Engine</a></li>
                                            <li><a href="blog.html">wheel</a></li>
                                            <li><a href="contact.html">type</a></li> 
                                        </ul>
                                    </div><!-- /.footer-menu-->
                                </div><!--/.hm-footer-widget-->
                            </div><!--/.col-->
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6  col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4> Our Newsletter</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-para">
                                <p class="para-news">
                                    Subscribe to our newsletter to get the latest News and offers..
                                </p>
                            </div><!--/.hm-foot-para-->
                            <div class="hm-foot-email">
                                <div class="foot-email-box">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div><!--/.foot-email-box-->
                                <div class="foot-email-subscribe">
                                    <button type="button" >go</button>
                                </div><!--/.foot-email-icon-->
                            </div><!--/.hm-foot-email-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.hm-footer-details-->
        </div><!--/.container-->

    </section><!--/.hm-footer-details-->
    <!--hm-footer end-->


 @endsection