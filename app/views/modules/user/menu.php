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
		                    
		                    <?php
					            if(Auth::check()){
					            	switch (Auth::user()->ma_quyen) {
					                    case 1:  
					                        ?>
					                        <li class="dropdown">
						                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">AD <i class="icon-angle-down"></i></a>
						                            <ul class="dropdown-menu">
						                                <li><span class="list-circle"></span> <a href="about-us.html">About Us</a></li>
						                                <li><span class="list-circle"></span> <a href="services.html">Services</a></li>
						                                <li><span class="list-circle"></span> <a href="shortcodes.html">Shortcodes</a></li>
						                                <li><span class="list-circle"></span> <a href="404.html">404 Error</a></li>
						                            </ul>
						                    </li>
					                        <?php
					                        break;
					                    case 2:  
					                        ?>
					                        <li class="dropdown">
						                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CB <i class="icon-angle-down"></i></a>
						                            <ul class="dropdown-menu">
						                                <li><span class="list-circle"></span> <a href="about-us.html">About Us</a></li>
						                                <li><span class="list-circle"></span> <a href="services.html">Services</a></li>
						                                <li><span class="list-circle"></span> <a href="shortcodes.html">Shortcodes</a></li>
						                                <li><span class="list-circle"></span> <a href="404.html">404 Error</a></li>
						                            </ul>
						                    </li>
					                        <?php
					                        break;
					                    
					                }
					            }
					            ?>
		                        
		                       
		                 
		                  
		                </ul><!-- end nav -->
		            </div> <!-- end nav-collapse -->
		        </div> <!-- end navbar-inner -->
		    </div> <!-- end navbar -->
		</div> <!-- end main-nav -->

		<!-- ============================  Main Nav End ============================ -->