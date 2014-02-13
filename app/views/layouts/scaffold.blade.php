<?php
/**
 * @author lioxca
 * @copyright 2012
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>He Thong</title>

        <!-- Bootstrap Styles -->
        <link href="<?php echo asset('user/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('user/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">

        <!-- Font Icons -->
        <link rel="stylesheet" href="<?php echo asset('user/css/font-awesome.min.css'); ?>" />

        <!-- Google Fonts -->


        <!-- Main Styles -->
        <link rel="stylesheet" href="<?php echo asset('user/css/styles.css'); ?>" />


        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo asset('user/img/apple-touch-icon-144-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo asset('user/img/apple-touch-icon-114-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo asset('user/img/apple-touch-icon-72-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo asset('user/img/apple-touch-icon-57-precomposed.png'); ?>">
        <link rel="shortcut icon" href="<?php echo asset('user/img/favicon.png'); ?>">

        <!-- Modernizr Feature Detection  -->
        <script src="<?php echo asset('user/js/libraries/modernizr.min.js'); ?>"></script>
    </head>

    <body>

        <!-- ============================  Dropdown Info Start ============================ -->
		<section class="dropdown-info">
		    <div class="container">
		        <div class="row">
		            <div class="span10">
		                <div class="contact-info-widget pull-right">
		                    <a href="#" id="info-activator"><i class="icon-angle-down"></i></a>
		                    <ul class="unstyled inline">
		                        <li><i class="icon-phone icon-large"></i> <span class="info">+84 939 84 81 85</span></li>
		                        <li><i class="icon-envelope-alt icon-large"></i> <span class="info">admin@webctucit.com</span></li>
		                    </ul>
		                </div> <!-- end contact-info-widget -->
		            </div> <!-- end span12 -->
		        </div> <!-- end row -->
		    </div> <!-- end container -->
		</section> <!-- end dropdown-info -->

		<!-- ============================  Dropdown Info End ============================ -->
		<div class="flexslider-container v2 container-fluid">
		    <div class="header-banner">
		        <img src="<?php echo asset('user/img/bg.png');?>" alt="img">
		    </div>
		</div>

		<!-- ============================  Main Nav Start ============================ -->

		<div class="main-nav ">
		    <div class="navbar">
		        <div class="navbar-inner">
		            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </a>

		            <!-- Everything you want hidden at 940px or less, place within here -->
		            <div class="nav-collapse collapse">
		                <ul class="nav pull-left">
		                    <li>
		                        <a href="">
		                            <i class="icon-home"></i>
		                            Home  
		                        </a>
		                    </li>
		                   
		                        <li class="dropdown">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">AD <i class="icon-angle-down"></i></a>
		                            <ul class="dropdown-menu">
		                                <li><span class="list-circle"></span> <a href="about-us.html">About Us</a></li>
		                                <li><span class="list-circle"></span> <a href="services.html">Services</a></li>
		                                <li><span class="list-circle"></span> <a href="shortcodes.html">Shortcodes</a></li>
		                                <li><span class="list-circle"></span> <a href="404.html">404 Error</a></li>
		                            </ul>
		                        </li>
		                       
		                        <li class="dropdown">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">QL <i class="icon-angle-down"></i></a>
		                            <ul class="dropdown-menu">
		                                <li><span class="list-circle"></span> <a href="about-us.html">About Us</a></li>
		                                <li><span class="list-circle"></span> <a href="services.html">Services</a></li>
		                                <li><span class="list-circle"></span> <a href="shortcodes.html">Shortcodes</a></li>
		                                <li><span class="list-circle"></span> <a href="404.html">404 Error</a></li>
		                            </ul>
		                        </li>
 
		                        <li class="dropdown">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CB <i class="icon-angle-down"></i></a>
		                            <ul class="dropdown-menu">
		                                <li><span class="list-circle"></span> <a href="about-us.html">About Us</a></li>
		                                <li><span class="list-circle"></span> <a href="services.html">Services</a></li>
		                                <li><span class="list-circle"></span> <a href="shortcodes.html">Shortcodes</a></li>
		                                <li><span class="list-circle"></span> <a href="404.html">404 Error</a></li>
		                            </ul>
		                        </li>
		                 
		                  
		                </ul><!-- end nav -->
		            </div> <!-- end nav-collapse -->
		        </div> <!-- end navbar-inner -->
		    </div> <!-- end navbar -->
		</div> <!-- end main-nav -->

		<!-- ============================  Main Nav End ============================ -->

        <!-- ============================  Main Tagline Start ============================ -->
        <div class="row-fluid">
            <div class="blog-inner-container">
                <div class="span8">
					@yield('main')
					</div> <!--end row-fluid-->
            </div> <!--end span8-->
            <div class="span2">
                <div class="blog-inner-container">
                     
                </div>
            </div>
        </div>  

        <!-- ============================  Main Tagline Ends ============================ -->

        <div class="row-fluid">
            <footer>
			    <div class="container">
			        <div class="row">
			            <div class="span3 offset1">
			                <div class="footer-widget">
			                    <h5 class="title">TEXT WIDGET</h5>
			                    <p class="content">Brownie candy ice cream. Jelly chupa chups chupa chups toocake. Dessert apple pie lemon drops. </p>
			                    <p class="content">Candy canes tiramisu wypa gummies jujubes macaroon Sweet roll biscuiti apple pie sweet.</p>
			                </div> <!-- end footer-widget -->
			            </div> <!-- end span3 -->

			            <div class="span3">
			                <div class="footer-widget">
			                    <h5 class="title">SUBSCRIBE US</h5>
			                    <p class="content">Jelly beans tootsie roll oat cake dingo pie wafer sweet roll. Sweet gerbread halvah.</p>
			                    <form action="" class='subscribe-form'>
			                        <div class="input-append">
			                            <input class="input-large" id="appendedInput" type="text">
			                            <span class="add-on"><i class="icon-envelope-alt"></i></span>
			                        </div>
			                    </form> <!-- end subscribe-form -->
			                </div> <!-- end footer-widget -->
			            </div> <!-- end span3 -->

			            <div class="span4">
			                <div class="footer-widget">
			                    <h5 class="title">LATEST TWEETS</h5>
			                    <ul class="unstyled twitter-timeline">
			                        <li>@ Brownie candy ice cream. Jelly chupa chups chupa chups toocake. <p><small>7 Hours ago</small></p></li>
			                        <li>@Brownie candy ice cream. Jelly chupa chups chupa chups toocake. <p><small>7 Hours ago</small></p></li>
			                    </ul>

			                </div> <!-- end footer-widget -->
			            </div> <!-- end span3 -->



			        </div> <!-- end row -->
			    </div> <!-- end container -->
			</footer>
			<section class="subfooter">
			    <div class="container">
			        <div class="row">
			            <div class="span7 offset1">
			                <p class="rights">Copyright &copy; 2013 Rohit Creations. All rights reserved.
			                </p>

			            </div> <!-- end row-->
			        </div> <!--end container -->
			</section> <!-- end subfooter --> 
        </div>
        <div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="<?php echo asset('/user/js/libraries/jquery.min.js');?>"><\/script>')</script> 
			<script src="<?php echo asset('/user/js/bootstrap.min.js');?>"></script>
			<script src="<?php echo asset('/user/js/libraries/plugins.js');?>"></script>
			<script src="<?php echo asset('/user/js/main.js');?>"></script>

        </div>
    </body>
</html>