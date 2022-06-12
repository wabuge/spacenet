<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spacenet Telecommunications LTD</title>
    <link rel="icon" type="image/icon" href="images/logo.svg" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
		      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		    <![endif]-->

</head>

<?php include 'inc/info-header.php'; ?>

<body class="host_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index">
                    <img src="images/logo-hosting.svg" alt="" style="width:50px;height:50px;"><font color="white"><STRONG>Spacenet Telecommunications LTD</STRONG></font>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo $_SERVER['PHP_SELF']; ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.php">Who Are We</a></li>
                        <li class="nav-item"><a class="nav-link" href="internet-installation.php">Internet Installation</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Telecom Services</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="telecommunication-services.php">Telecom Services</a>
                                <!--
										<a class="dropdown-item" href="hosting.html">Tower Construction  </a>
										<a class="dropdown-item" href="hosting.html">C</a>
										<a class="dropdown-item" href="hosting.html">Reseller Package </a>
										<a class="dropdown-item" href="hosting.html">Dedicated Hosting </a>
									</div>
								-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="domain.php">I.T</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="big-tagline">
                                        <h2><strong>Spacenet Telecommunication </strong> LTD</h2>
                                        <p class="lead"><small>Spacenet Telecommunications LTD a leading ICT Company Based in Kenya providing specialized Integrated ICT Business Solutions and Services to the growing market. </small></p>
                                        <a href="telecommunication-services.php" class="btn btn-info"><span>
                                                <font color="white">Our Solutions</font>
                                            </span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="contact-us.php" class="btn btn-info"><span>
                                                <font color="white">Contact Us</font>
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </div>
                </div>
                <!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight">Telecommunication <strong>Services</strong></h2>
                                        <p class="lead" data-animation="animated fadeInLeft">
                                            <bold>We offer vast range of of Telecommunication Serives i.e </bold><small> *Site Design* Site construction* BTS intergration* Site Commisioning</small>
                                        </p>
                                        <a href="telecommunication-services.php class=" btn btn-info"><span><strong>
                                                    <font color="white">Our Solutions</font>
                                                </strong></span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="contact-us.php" class="btn btn-infos"><span>
                                                <font color="white"> Contact Us</font>
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </div>
                </div>
                <!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight"><strong>Information Technology </strong> Services</h2>
                                        <p class="lead" data-animation="animated fadeInLeft">For Information Technology Services we are a reliable solution</p>
                                        <a href="telecommunication-services.php" class="btn btn-info"><span>
                                                <font color="white">Our Solutions</font>
                                            </span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="contact-us.php" class="btn btn-info"><span>
                                                <font color="white">Contact Us</font>
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </div>
                </div>
                <!-- end section -->
            </div>
            <!-- Left Control -->
            <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--
	<div id="domain" class="section wb">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <form class="checkdomain form-inline">
                        <div class="checkdomain-wrapper">
                            <div class="form-group">
                                <label class="sr-only" for="domainnamehere">Domain name</label>
                                <input type="text" class="form-control" id="domainnamehere" placeholder="Enter domain name here..">
                                <button type="submit" class="btn btn-primary grd1"><i class="fa fa-search"></i></button>
                            </div>
                            <hr>
                            <div class="clearfix"></div>
                            <div class="checkbox checkbox-warning">
                                <input id="domaincom" type="checkbox" class="styled" checked>
                                <label for="domaincom">.com</label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="domainnet" type="checkbox" class="styled" checked>
                                <label for="domainnet">.net</label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="domainorg" type="checkbox" class="styled">
                                <label for="domainorg">.org</label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="domaintv" type="checkbox" class="styled">
                                <label for="domaintv">.tv</label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="domaininfo" type="checkbox" class="styled">
                                <label for="domaininfo">.info</label>
                         -->
    </div>
    </div>
    <!-- end checkdomain-wrapper -->
    <!-- Start of deactivation </form>
                </div>
				<div class="col-lg-12">
                    <div class="customwidget text-center">
                        <h1>Find Your Domain</h1>
                        <p>With our awesome domain name search form, you can search any domain names with tons of extensions.</p>
						<p> 5G Communication is your real partner in this modern world. we promise dedicated internet connectivity which is reliable and zero buffering. .</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-check"></i> Over 20 new clients last month</li>
                            <li><i class="fa fa-check"></i> Over 10 new resselers</li>
                       -->
    </ul>
    <!-- end list -->
    <!--  <a href="#" class="hover-btn-new"><span>Hosting Packages</span></a>
                    </div>
                </div>
              end of deaction-->
    <!-- end col -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end section -->

    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Who Are We</h3>
                    <p class="lead">Welcome to Spacenet Telecommunications LTD. We offer fast and realible internet services to all our clients.</p>
                </div>
            </div>
            <!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>
                            <font color=" green">Spacenet Telecommunication LTD</font>
                        </h4>
                        <h2>WHO ARE WE</h2>
                        <p>We have a Technical team which is rich of active Engineers and Technicians who are skilled in there roles.</p>
                        <p>High speed internet Connectivity</p>
                        <p>Project Managemt & General Contractor</p>
                        <p>Systems Intergration</p>
                        <p>CCTV Installation</p>
                        <p>Website/WebApps/Android app Design Development</p>
                        <p>Managed Services </p>
                        <p>ICT infrastructure design and development</p>
                        <p>Staffing and Consultancy</p>
                        <p> We have several projects that we have done. For your quotation and further information contact us via our mail: info@Spacenet.co.ke or our tel:+254 770 222333 </p>

                        <!--<a href="#" class="hover-btn-new"><span>Learn More</span></a>-->
                    </div>
                    <!-- end messagebox -->
                </div>
                <!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.svg" alt="" class="img-fluid img-rounded">
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/customercare01.svg" alt="" class="img-fluid img-rounded">
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>CUSTOMER CARE SERVICES</h2>

                        <p>
                            <large> Spacenet Telecommunications has active and supportive customer cares who offers 24/7 support
                        </p>

                        <!--  <a href="#" class="hover-btn-new"><span>Learn More</span></a> -->
                    </div>
                    <!-- end messagebox -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section -->

    <?php include "testimonials.php"; ?>
                        <!-- end testimonial -->
                    </div>
                    <!-- end carousel -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section -->
    <!--
    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div> -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end section -->


    <?php include "inc/footer.php"; ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>