@extends('layoutU')


@section('content')
	<!--about-part start-->

    <section class="about-part service-part">
        <div class="container">
            <div class="about-part-details text-left"> 
                <h2>{{$service->name}} service</h2>
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
							<img src="{{ $service->image}}" alt="blog image" />
							 {{-- <img src="{{$service->image ? asset('storage/' . $service->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /> --}}
                                {{-- <img src="assets/images/about/ab1.jpg" alt="about"> --}}
                            </div><!--/.about-history-img-->
                        </div><!--/.single-about-history-->
                    </div><!--/.col-->

                    <div class="col-md-offset-1 col-md-6 col-sm-12">
                        <div class="single-about-history">
                            <div class="about-history-txt">
                                <h2>{{$service->name}}</h2>
                                <p>
                                    {{$service->description}}
                                </p>

                               
                            </div><!--/.about-history-txt-->
                        </div><!--/.single-about-history-->
                    </div><!--/.col-->

                </div><!--/.row-->
                {{-- <div class="row">

                    <div class="about-vission-content">

                        <div class="col-md-6 col-sm-12">
                            <div class="single-about-history">
                                <div class="about-history-txt">
                                    <h2>vision and mission</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adiping elit, sed do eiusmod tempor incidd ut labore rhei  et dolore magna aliqua. Ut enim ad  veniam, quis laboris nisi ut aliquip ex ea commodo. Duis aute irure dolor in repre voluptate in the velit esse.
                                    </p>

                                    <div class="main-timeline  xtra-timeline">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="timeline timeline-ml-20">
                                                    
                                                    <div class="timeline-content">
                                                        <h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
                                                        
                                                        <ul class="description">
                                                            <li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>

                                                        </ul>
                                                    </div><!--/.timeline-content-->
                                                </div><!--/.timeline-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="timeline timeline-ml-20">
                                                    
                                                    <div class="timeline-content">
                                                        <h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
                                                        
                                                        <ul class="description">
                                                            <li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>

                                                        </ul>
                                                    </div><!--/.timeline-content-->
                                                </div><!--/.timeline-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="timeline timeline-ml-20">
                                                    
                                                    <div class="timeline-content">
                                                        <h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
                                                        
                                                        <ul class="description">
                                                            <li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>

                                                        </ul>
                                                    </div><!--/.timeline-content-->
                                                </div><!--/.timeline-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                    </div><!--.main-timeline-->
                                </div><!--/.about-history-txt-->
                            </div><!--/.single-about-history-->
                        </div><!--/.col-->

                        <div class="col-md-offset-1 col-md-5 col-sm-12">
                            <div class="single-about-history">
                                <div class="about-history-img">
                                    <img src="assets/images/about/ab2.jpg" alt="about">
                                </div><!--/.about-history-img-->
                            </div><!--/.single-about-history-->
                        </div><!--/.col-->
                    </div><!--/.about-vission-content-->
                </div><!--/.row--> --}}
                {{-- <div class="row">

                    <div class="about-vission-content">
                        
                        <div class="col-md-offset-1 col-md-5 col-sm-12">
                            <div class="single-about-history">
                                <div class="about-history-img">
                                    <img src="assets/images/about/ab2.jpg" alt="about">
                                </div><!--/.about-history-img-->
                            </div><!--/.single-about-history-->
                        </div><!--/.col-->
                        <div class="col-md-6 col-sm-12">
                            <div class="single-about-history">
                                <div class="about-history-txt">
                                    <h2>vision and mission</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adiping elit, sed do eiusmod tempor incidd ut labore rhei  et dolore magna aliqua. Ut enim ad  veniam, quis laboris nisi ut aliquip ex ea commodo. Duis aute irure dolor in repre voluptate in the velit esse.
                                    </p>

                                    <div class="main-timeline  xtra-timeline">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="timeline timeline-ml-20">
                                                    
                                                    <div class="timeline-content">
                                                        <h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
                                                        
                                                        <ul class="description">
                                                            <li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>

                                                        </ul>
                                                    </div><!--/.timeline-content-->
                                                </div><!--/.timeline-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="timeline timeline-ml-20">
                                                    
                                                    <div class="timeline-content">
                                                        <h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
                                                        
                                                        <ul class="description">
                                                            <li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>

                                                        </ul>
                                                    </div><!--/.timeline-content-->
                                                </div><!--/.timeline-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="timeline timeline-ml-20">
                                                    
                                                    <div class="timeline-content">
                                                        <h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
                                                        
                                                        <ul class="description">
                                                            <li>Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu ugiat nulla pariatur cupiat non proident.</li>

                                                        </ul>
                                                    </div><!--/.timeline-content-->
                                                </div><!--/.timeline-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                    </div><!--.main-timeline-->
                                </div><!--/.about-history-txt-->
                            </div><!--/.single-about-history-->
                        </div><!--/.col-->
                    </div><!--/.about-vission-content-->
                </div><!--/.row--> --}}
            </div><!--/.about-history-content-->
        </div><!--/.container-->

    </div><!--/.about-history-->
    <!--about-history end-->
 @endsection