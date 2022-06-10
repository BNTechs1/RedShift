@extends('layoutU')


@section('content')
	<!--about-part start-->

    <section class="about-part service-part">
        <div class="container">
            <div class="about-part-details text-left"> 
                <h2>{{$portfolio->name}} Portfolio</h2>
            </div><!--/.about-part-details-->	
        </div><!--/.container-->

    </section><!--/.about-part-->
    <!--about-part end-->


    <!--about-history start-->
    <div class="about-history">
        <div class="container">
            <div class="about-history-content">

                <div class="row">

                    <div class="col-md-5 col-sm-12">
                        <div class="single-about-history">
                            <div class="about-history-img">
							<img src="{{ $portfolio->image}}" alt="blog image" />
							 {{-- <img src="{{$service->image ? asset('storage/' . $service->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /> --}}
                                {{-- <img src="assets/images/about/ab1.jpg" alt="about"> --}}
                            </div><!--/.about-history-img-->
                        </div><!--/.single-about-history-->
                    </div><!--/.col-->

                    <div class="col-md-offset-1 col-md-6 col-sm-12">
                        <div class="single-about-history">
                            <div class="about-history-txt">
                                <h2>{{$portfolio->name}}</h2>
                                <p>
                                    {{$portfolio->description}}
                                </p>

                               
                            </div><!--/.about-history-txt-->
                        </div><!--/.single-about-history-->
                    </div><!--/.col-->

                </div><!--/.row-->
             
            </div><!--/.about-history-content-->
        </div><!--/.container-->

    </div><!--/.about-history-->
    <!--about-history end-->
 @endsection