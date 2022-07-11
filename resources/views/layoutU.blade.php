<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- META DATA -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />


    <!-- TITLE OF SITE -->
    <title>Red Shift</title>



    <!-- for title img -->
    <link
      rel="shortcut icon"
      type="image/icon"
      href="assets/images/logo/favicon.png"
    />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--linear icon css-->
    <link
      rel="stylesheet"
      href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css"
    />

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css" />

    <!--hover.css-->
    <link rel="stylesheet" href="assets/css/hover-min.css" />

    <!--vedio player css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />

    <!-- bootsnav -->
    <link href="assets/css/bootsnav.css" rel="stylesheet" />

    <!--style.css-->
    <link rel="stylesheet" href="/assets/css/style.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="/assets/css/responsive.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <!--menu start-->
		<section id="menu">
        <div class="container">
          <div class="menubar">
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1"
              aria-expanded="false"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <img src="assets/images/logo/logo1.png" alt="logo" /> 
              {{-- <h1 style="color: red">Red Shift</h1> --}}
            </a>
            </div>
            <!--/.navbar-header -->
      
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
            class="collapse navbar-collapse"
            id="bs-example-navbar-collapse-1"
            >
            <ul class="nav navbar-nav navbar-right">
              @auth
              <li><a> Welcome {{auth()->user()->name}}</a></li>
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/manageProduct">Dashboard</a></li>
              {{-- <li><a  href="#" onclick="location.href='@Url.Action('/logout')'">Logout</a></li> --}}
                <li>
                <a>
                  <form action="/logout" method="POST"> 
                  @csrf
                  <li type="submit">Logout</li>
                  </form>
                </a>
              </li>
              @else
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/services">Service</a></li>
              <li><a href="/portfolios">Portfolio</a></li>
              <li><a href="/news">Blog</a></li>
              <li><a href="/products">Products</a></li>
              <li><a href="/contact">Contact</a></li>
              
              @endauth

            </ul>
            <!-- / ul -->
            </div>
            <!-- /.navbar-collapse -->
          </nav>
          <!--/nav -->
          </div>
          <!--/.menubar -->
        </div>
        <!-- /.container -->
    </section>
        <!--/#menu-->
        <!--menu end-->
    @yield('content')

    <!--contact start-->
    <section class="contact">
      <div class="container">
        <div class="contact-details">
          <div class="section-header contact-head text-center">
            <h2>contact us</h2>
           
          </div>
          <!--/.section-header-->
          <div class="contact-content">
            <div class="row">
              <div class="col-sm-offset-1 col-sm-5">
                <div class="single-contact-box">
                  <div class="contact-right">
                    <div class="contact-adress">
                      <div class="contact-office-address">
                        <h3>contact info</h3>
                        <p>Town Square Building, <br>Ethiopia, Addis Ababa , Bole Subcity</p>
                        <div class="contact-online-address">
                          <div class="single-online-address">
                            <i class="fa fa-phone"></i>
                            +251 910599719
                          </div>
                          <!--/.single-online-address-->

                          <div class="single-online-address">
                            <i class="fa fa-envelope-o"></i>
                            <span>info@redshiftcorp.com</span>
                          </div>
                          <!--/.single-online-address-->
                        </div>
                        <!--/.contact-online-address-->
                      </div>
                      <!--/.contact-office-address-->
                      <div class="contact-office-address">
                        <h3>social partner</h3>
                        <div class="contact-icon">
                          <ul>
                            <li>
                              <a href="#"
                                ><i
                                  class="fa fa-facebook"
                                  aria-hidden="true"
                                ></i
                              ></a>
                            </li>
                            <!--/li-->
                            <li>
                              <a href="#"
                                ><i
                                  class="fa fa-google-plus"
                                  aria-hidden="true"
                                ></i
                              ></a>
                            </li>
                            <!--/li-->
                            <li>
                              <a href="#"
                                ><i
                                  class="fa fa-linkedin"
                                  aria-hidden="true"
                                ></i
                              ></a>
                            </li>
                            <!--/li-->
                            <li>
                              <a href="#"
                                ><i class="fa fa-twitter" aria-hidden="true"></i
                              ></a>
                            </li>
                            <!--/li-->
                          </ul>
                          <!--/ul-->
                        </div>
                        <!--/.contact-icon-->
                      </div>
                      <!--/.contact-office-address-->
                    </div>
                    <!--/.contact-address-->
                  </div>
                  <!--/.contact-right-->
                </div>
                <!--/.single-contact-box-->
              </div>
              <!--/.col-->
              <div class="col-sm-5">
                <div class="single-contact-box">
                  <div class="contact-form">
                    <h3>Leave us a Massage Here</h3>
                    <form method="POST" action="/contact-us">
                      @csrf
                      <div class="row">
                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder="Name"
                              name="name"
                            />
                          </div>
                          <!--/.form-group-->
                        </div>
                        <!--/.col-->
                     
                      </div>
                      <!--/.row-->
                      <div class="row">
                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              placeholder="Email"
                              name="email"
                            />
                          </div>
                          <!--/.form-group-->
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              id="phone"
                              placeholder="Phone"
                              name="phone_number"
                            />
                          </div>
                          <!--/.form-group-->
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                      <div class="row">
                         <div class="col-sm-12 col-xs-12">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              id="subject"
                              placeholder="Subject"
                              name="subject"
                            />
                          </div>
                          <!--/.form-group-->
                        </div>
                        <!--/.col-->
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea
                              class="form-control"
                              rows="7"
                              id="comment"
                              placeholder="Message"
                              name="message"
                            ></textarea>
                          </div>
                          <!--/.form-group-->
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="single-contact-btn pull-right">
                            <button class="contact-btn" type="submit">
                              send message
                            </button>
                          </div>
                          <!--/.single-single-contact-btn-->
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                    </form>
                    <!--/form-->
                  </div>
                  <!--/.contact-form-->
                </div>
                <!--/.single-contact-box-->
              </div>
              <!--/.col-->
            </div>
            <!--/.row-->
          </div>
          <!--/.contact-content-->
        </div>
        <!--/.contact-details-->
      </div>
      <!--/.container-->
    </section>
    <!--/.contact-->

    
    <!-- jaquery link -->

    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    ></script>

    <!--bootstrap.min.js-->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!-- for manu -->
    <script
      src="assets/js/jquery.hc-sticky.min.js"
      type="text/javascript"
    ></script>

    <!-- vedio player js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
    ></script>

    <!--owl.carousel.js-->
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--Custom JS-->
    <script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
  </body>

  </html>