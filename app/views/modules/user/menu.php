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
		                        <a href="<?php echo asset('/') ?>">
		                            <i class="icon-home"></i>
		                            <span>Home</span>  
		                        </a>
		                    </li>
		                    <li>
		                        <a href="">
		                            <i class="icon-edit"></i>
		                            <span>Tin Tức</span>  
		                        </a>
		                    </li>
		                    <?php
					            if(Auth::check()){
					            	
					            	switch (Auth::user()->PhanQuyen_Id) {
					                    case 1:  
					                        ?>
					                        <li >
						                            <a href="<?php echo asset('tai_khoans'); ?>"><i class="icon-edit"></i>Trang Quản Trị</a>
						                    </li>
					                        <?php
					                        break;
					                    case 2:  
					                        ?>
					                        
					                        <?php
					                        break;
				                        case 3:  
				                        ?>
				                        
				                        <?php
				                        break;
				                        case 4:  
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