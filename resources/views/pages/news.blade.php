@extends("layoutU")

@section("content")

    	<!--about-part start-->
		<section class="about-part blog-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>blog</h2>
					<div class="about-part-content
					">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.html">home</a><span>//</span></li>
								  <li><a href="blog.html">blog</a></li>
								</ol><!--/.breadcrumb-->
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

		<!--nwes start -->
		<section  class="news">
			<div class="container">
				<div class="news-details">
					<div class="section-header text-center">
						<h2>our latest news</h2>
						<p>
							Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						</p>
					</div><!--/.section-header-->
					<div class="news-card">
						<div class="row">

							<div class="col-md-8">
								<div class="blog-left">
									 <?php $count = 0; ?>
									@foreach ($newss as $news=>$value)
									<?php if($count == 4) break; ?>
									<div class="col-sm-6">
										<div class="single-news-box news-mb-20">
											<div class="news-box-bg">
									            <img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" />
												{{-- <img src="assets/images/blog/bl2.jpg" alt="blog image"> --}}
												<div class="isotope-overlay">
													<a href="blog_single.html">
														<span class="lnr lnr-link"></span>
														
													</a>
												</div>
											</div><!--/.team-box-bg-->
											<div class="news-box-inner">
												<h3>
													<a href="blog_single.html">
														{{$value->name}}
													</a>
												</h3>
												<!-- <a href="#" class="learn-btn">
													learn more
												</a> -->
											</div><!--/.news-box-inner-->
										</div><!--/.single-news-box-->
									</div><!--.col-->
									<?php $count++; ?>
         							 @endforeach
									<div class="pagination-part text-center">
										<ul class="pagination">
											<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li>
												<a href="#">
													Next
													<span class="fa fa-angle-right">
														
													</span>
												</a>
											</li>
											<li>
												<a href="#" aria-label="Next">
													
												</a>
											</li>
										</ul>
									</div><!--/.pagination-part(&raquo;)-->
								</div><!--/.blog-left-->

							</div><!--/.col-->

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

									

									<div class="blogs-widget
									">
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
					</div><!--/.news-card-->
					
				</div><!--/news-details-->
			</div><!--/.container-->

		</section><!--/news-->
		<!--news end-->

		<!-- new-project start -->
		<section  class="new-project">
				<div class="container">
					<div class="new-project-details">
						<div class="row">
							<div class="col-md-10 col-sm-8">
								<div class="single-new-project">
									<h3>
										Want to start a new project with us? Let’s Start!
									</h3>
								</div><!-- /.single-new-project-->	
							</div><!-- /.col-->	
							<div class="col-md-2 col-sm-4">
								<div class="single-new-project">
									<a href="#" class="slide-btn">
										start now
									</a>
								</div><!-- /.single-new-project-->	
							</div><!-- /.col-->	
						</div><!-- /.row-->	
					</div><!-- /.new-project-details-->	
				</div><!-- /.container-->

		</section><!-- /.new-project-->	
		<!-- new-project end -->



@endsection