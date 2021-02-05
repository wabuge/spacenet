<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>Netfix Telecommunications LTD</title>
<link rel="icon" type="image/icon" href="images/logo.png" />
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
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
<!--boostrap notification -->

<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
    <div class="toast-header">
        <svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        <rect fill="#007aff" width="0%" height="100%" /></svg>
        <strong class="mr-auto"> <font color="red" >COVID-19 </font>Message From <font color="blue"> WHO </font> </strong>
        <!--script for showing time-->
        <large>
            <font color="green"><strong><script type="text/javascript"> 
        function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
        }
        
        function display_ct() {
        var x = new Date()
        document.getElementById('ct').innerHTML = x;
        display_c();
         }
        </script>
        </head>
        
        <body onload=display_ct();>
        <span id='ct' ></span>
        </strong></large>
        </font>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
        <font color="red">
            <large><strong>Hello,Our Esteemed clients, This is about COVID-19, Please USE SANITISERS, WASH YOUR HANDS FREQUENTLY, FOLLOW GOVERNMENT DIRECTIVES, KEEP SOCIAL DISTANCE(1.5M) LISTEN TO LOCAL NEWS</strong> </large>
        </font>
    </div>
</div>

<body class="host_version">

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Login Or Register Here</h4>
                </div>
                <div class="modal-body customer-box">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li><a class="active" a href='/logout' data-toggle="tab">Logout</a></li>
                        <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email1" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
                                        <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="Registration">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="password" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                <a class="navbar-brand" href="home.html">
                    <img src="images/logo-hosting.png" alt="" style="width:50px;height:50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="features.html">Internet Installation</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Telecom Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="hosting.html">Telecom Services</a>
                                <!--
								<a class="dropdown-item" href="hosting.html">WordPress Hosting </a>
								<a class="dropdown-item" href="hosting.html">Cloud Server </a>
								<a class="dropdown-item" href="hosting.html">Reseller Package </a>
								<a class="dropdown-item" href="hosting.html">Dedicated Hosting </a>
                            -->
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="domain.html">I.T </a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li> -->
                        <li class="nav-item active"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nave-link" href="users/logout">
                                <font color="white">Logout</font>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <div class="all-title-box">
        <div class="container text-center">
            <h1>Contact Us<span class="m_1">Email: lite@comms.com, Tel:+254725201768</span></h1>
        </div>
    </div>

    <div id="support" class="section wb">
        <div class="container-fulid">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">Let us give you more details about our services, Please fill out the form below. <br>We have hundreds of clients who are satisfied with our services</p>
            </div>
            <!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="#" name="contactform" method="post">
                            <fieldset class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- end col -->
                <!--
				<div class="col-xl-6 col-md-12 col-sm-12">
					<div class="map-box">
						<div id="custom-places" class="small-map"></div>
					</div>
				</div>
                end of inactive div
            -->

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
                </div>
            -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p>Netfix Telecommunications LTD is currently operating within coastal KENYA, We offer fast , cheap internet to our clients who are located anywhere in coastal Kenya.</p>
                        <p>We are WISP , we use Cambium Radio which uses smart beams hence very reliable.</p>
                    </div>
                    <!-- end clearfix -->
                </div>
                <!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="home.html">Home</a></li>
                            <li><a href="#">Technology News</a></li>
                            <li><a href="#">Data Plans</a></li>
                            <li><a href="#">About</a></li>
                            <!-- <li><a href="#">Faq</a></li> -->
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <!-- end links -->
                    </div>
                    <!-- end clearfix -->
                </div>
                <!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 30 -80100 Digo Road Mombasa KE </li>
                            <li>+254 725-201-768 Or +254 711-806-059</li>
                        </ul>
                        <!-- end links -->
                    </div>
                    <!-- end clearfix -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">LiTE Labs</a> Design By : <a href="https://html.design/">LiTE Labs Mombasa KE</a></p>
                </div>

                <div class="footer-right">
                    <ul class="footer-links-soi">
                        <li><a href="https://www.facebook.com/foxComm254/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://github.com/wabuge/"><i class="fa fa-github"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                    <!-- end links -->
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
    <!-- Mapsed JavaScript -->
    <script src="js/mapsed.js"></script>
    <script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>

</html>