<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Netfix Telecommunications LTD</title>
		<link rel="icon" type="image/icon" href="images/logo.png" />
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
		                    <img src="images/logo-hosting.png" alt="" style="width:50px;height:50px;">
		                </a>
		                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
						</button>
		                <div class="collapse navbar-collapse" id="navbars-host">
		                    <ul class="navbar-nav ml-auto">
		                        <li class="nav-item active"><a class="nav-link" href="<?php echo $_SERVER['PHP_SELF']; ?>">Home</a></li>
		                        <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
		                        <li class="nav-item"><a class="nav-link" href="internet-installation.php">Internet Installation</a></li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Telecom Services</a>

		                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
		                                <a class="dropdown-item" href="hosting.php">Telecom Services</a>
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
                                        <h2><strong>NetFix Communcations </strong> LTD</h2>
                                        <p class="lead"><small>5g Communications LTD is currently operating within coastal KENYA, We offer fast , cheap internet to our clients who are located anywhere in coastal Kenya.We are WISP , we use Cambium Radio which uses smart beams hence very reliable. </small></p>
                                        <a href="hosting.php" class="btn btn-info"><span><font color="white">Our Solutions</font></span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="contact-us.php" class="btn btn-info"><span><font color ="white" >Contact Us</font></span></a>
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
                                            <bold>We offer vast range of of Telecommunication Serives i.e </bold><small> *Site Design* Site construction* BTS intergration* Site Commisioning</small></p>
                                        <a href="hosting.php" class="btn btn-info"><span><strong><font color="white">Our Solutions</font></strong></span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="contact.php" class="btn btn-infos"><span><font color="white"> Contact Us</font></span></a>
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
                                        <a href="hosting.php" class="btn btn-info"><span><font color ="white">Our Solutions</font></span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="contact.php" class="btn btn-info"><span><font color ="white">Contact Us</font></span></a>
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
                         --></div>
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
                    <h3>About</h3>
                    <p class="lead">Welcome to Netfix Telecommunications LTD. We offer fast realible, cheap internet services to all our clients in Mombasa KE.</p>
                </div>
            </div>
            <!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>NetFix Telecommunication LTD</h4>
                        <h2>TOWER CONSTRUCTION AND COMMISIONING</h2>
                        <p>We have a Technical team which is rich of active Engineers and Technicians who are skilled in there roles.The procedures involved in Construction and commisioning of sites includes</p>
                        <p>Site Acquisition</p>
                        <p>Site Design</p>
                        <p>Site Construction</p>
                        <p>Site Commisioning</p>
                        <p> We have several projects that we have done. For your quotation and further information contact us via our mail: five@gcomms.com or our tel: +254778352193 </p>

                        <!--<a href="#" class="hover-btn-new"><span>Learn More</span></a>-->
                    </div>
                    <!-- end messagebox -->
                </div>
                <!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>BTS MAINTENACE </h2>

                        <p> Our Maintenance services includes: Power Backups, Network Optimization, Tower Stability check, Alarm system, and General cleaning of the Site</p>

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

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>Here are the views of some of our clients, feel free to inqure more about us in our social media platforms and via all our official forums </p>
            </div>
            <!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>Musa Moyez</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-rounded">
                                <h4>Maina Edward</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid ">
                                <h4>Niko Makoni</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Good Time Managers</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_05.png" alt="" class="img-fluid">
                                <h4>Soud Mohamoud</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Satisfying</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_06.png" alt="" class="img-fluid">
                                <h4>Simon Kaniu</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_04.png" alt="" class="img-fluid">
                                <h4>Kennedy Wabuge</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
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