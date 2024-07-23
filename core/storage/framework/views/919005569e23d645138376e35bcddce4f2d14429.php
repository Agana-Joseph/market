<?php
    $contact = content('contact.content');
    $footersociallink = element('footer.element');
?>  

<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
				<header id="rs-header" class="rs-header header-style1 header-modify1">
					<!-- Menu Start -->
					<div class="menu-area menu-sticky">
						<div class="container">
							<div class="row-table">
								<div class="col-cell header-logo">                                  
								    <div class="logo-area">
								        <a href="/">
								            <img class="normal-logo" src="assets/images/logo-dark.png" alt="logo">  
								            <img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
								        </a>
								    </div>
								</div>
								<div class="col-cell">
								
								
								
								
								
									<div class="rs-menu-area">
										<div class="main-menu">
											<nav class="rs-menu hidden-md">
												<ul class="nav-menu">
												
												<li>
														<a href="/">Home</a>
													</li>
													
													<li>
														<a href="about">About</a>
													</li>
													
													<li>
														<a href="plans">Plans</a>
													</li>
													
													<li>
														<a href="/bots">Bots</a>
													</li>
													<li>
														<a href="contact">Contact Us</a>
													</li>
												
												</ul> <!-- //.nav-menu -->
											</nav>
										</div> <!-- //.main-menu -->
									</div>
								</div>
								<div class="col-cell">
									<div class="expand-btn-inner">
										<ul>
                                            <li class="btn-quote"><a class="readon slide-started" href="">Account</a></li>
											<li class="humburger">
											    <a id="nav-expander" class="nav-expander bar" href="#">
											        <div class="bar">
											            <span class="dot1"></span>
											            <span class="dot2"></span>
											            <span class="dot3"></span>
											            <span class="dot4"></span>
											            <span class="dot5"></span>
											            <span class="dot6"></span>
											            <span class="dot7"></span>
											            <span class="dot8"></span>
											            <span class="dot9"></span>
											        </div>
											    </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Menu End -->

					<!-- Canvas Mobile Menu start -->
					<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
					    <div class="close-btn">
					        <a id="nav-close2" class="nav-close">
					            <div class="line">
					                <span class="line1"></span>
					                <span class="line2"></span>
					            </div>
					        </a>
					    </div>
					    <ul class="nav-menu">
						
						<li>
					    		<a href="/">Home</a>
					    	</li>
							<li>
					    		<a href="about">About</a>
					    	</li>
							<li>
					    		<a href="plans">Plans</a>
					    	</li>
							<li>
					    		<a href="/bots">Bots</a>
					    	</li>
							<li>
					    		<a href="contact">Contact Us</a>
					    	</li>
					    	
					    	<li>
					    		<a href="/login">Login</a>
					    	</li>
					    	
					    	<li>
					    		<a href="/register">Register</a>
					    	</li>
						
						
						
					    	<!--<li class="menu-item-has-children current-menu-item">
					    		<a href="/">Home</a>
					    		<ul class="sub-menu">
					    			<li class="menu-item-has-children current-menu-item">
					    				<a href="/">Multipages</a>
					    				<ul class="sub-menu">
					    					<li class="active"><a href="/">Home 1</a></li>
					    					<li><a href="/2">Home 2</a></li>
					    					<li><a href="/3">Home 3</a></li>
					    					<li><a href="/4">Home 4</a></li>
					    					<li><a href="/5">Home 5</a></li>
					    				</ul> 
					    			</li>
					    			<li class="menu-item-has-children">
					    				<a href="onepage1">Onepages</a>
					    				<ul class="sub-menu">
					    					<li><a href="onepage1">Onepage 1</a></li>
					    					<li><a href="onepage2">Onepage 2</a></li>
					    					<li><a href="onepage3">Onepage 3</a></li>
					    					<li><a href="onepage4">Onepage 4</a></li>
					    					<li><a href="onepage5">Onepage 5</a></li>
					    				</ul>  
					    			</li>
					    		</ul>
					    	</li>
					    	<li>
					    		<a href="about">About</a>
					    	</li>
					    	<li class="menu-item-has-children">
					    		<a href="services1">Services</a>
					    		<ul class="sub-menu">
					    			<li><a href="services1">Services 1</a></li>
					    			<li><a href="services2">Services 2</a></li>
					    			<li class="last-item menu-item-has-children">
					    			    <a href="business-planning">Services Single</a>
					    			    <ul class="sub-menu">
					    			        <li><a href="business-planning">Business Planning</a></li>
					    			        <li><a href="financial-advices">Financial Advices</a></li>
					    			        <li><a href="business-analysis">Business Analysis</a></li>
					    			        <li><a href="reports-analysis">Reports Analysis</a></li>
					    			        <li><a href="fintech-analysis">Fintech Analysis</a></li>
					    			        <li><a href="project-reporting">Project Reporting</a></li>
					    			    </ul>
					    			</li>
					    		</ul>
					    	</li>
					    	<li class="menu-item-has-children">
					    		<a href="#">Pages</a>
					    		<ul class="sub-menu">
					    			<li class="last-item menu-item-has-children">
					    			    <a href="team-style1">Team</a>
					    			    <ul class="sub-menu">
					    			        <li><a href="team-style1">Team Style 1</a></li>
					    			        <li><a href="team-style2">Team Style 2</a></li>
					    			        <li><a href="team-style3">Team Style 3</a></li>
					    			        <li><a href="team-style4">Team Style 4</a></li>
											<li><a href="team-single">Team Single</a></li>
					    			    </ul>
					    			</li>
					    			<li class="last-item menu-item-has-children">
					    			    <a href="portfolios-style1">Portfolios</a>
					    			    <ul class="sub-menu">
					    			        <li><a href="portfolios-style1">Portfolios Style 1</a></li>
					    			        <li><a href="portfolios-style2">Portfolios Style 2</a></li>
					    			        <li><a href="portfolios-style3">Portfolios Style 3</a></li>
					    			        <li><a href="portfolios-style4">Portfolios Style 4</a></li>
					    			        <li><a href="portfolios-style5">Portfolios Style 5</a></li>
					    			        <li><a href="portfolios-style6">Portfolios Style 6</a></li>
					    			        <li><a href="portfolios-filter">Portfolios Filter</a></li>
					    			        <li><a href="portfolios-single">Portfolios Single</a></li>
					    			    </ul>
					    			</li>
					    			<li class="last-item menu-item-has-children">
					    			    <a href="shop">Shop</a>
					    			    <ul class="sub-menu">
					    			        <li><a href="shop">Shop</a></li>
					    			        <li><a href="shop-single">Shop Single</a></li>
					    			        <li><a href="cart">Cart</a></li>
					    			        <li><a href="checkout">Checkout</a></li>
					    			        <li><a href="my-account">My Account</a></li>
					    			    </ul>
					    			</li>
					    			<li><a href="appointment">Appointment</a></li>
					    			<li class="last-item menu-item-has-children">
					    			    <a href="careers">Careers</a>
					    			    <ul class="sub-menu">
					    			        <li><a href="careers">Careers</a></li>
					    			        <li><a href="careers-single">Careers Single</a></li>
					    			    </ul>
					    			</li>
					    			<li><a href="partners">Partners</a></li>
					    			<li><a href="pricing-plans">Pricing Plans</a></li>
					    			<li><a href="faq">Faq</a></li>     
					    		</ul>
					    	</li>
					    	<li class="menu-item-has-children">
					    		<a href="blog">Blog</a>                                                        
					    		<ul class="sub-menu">  
					    			<li><a href="blog">Blog</a></li>
					    			<li><a href="blog-single"> Blog Single</a></li>
					    		</ul>
					    	</li>
					    	<li class="menu-item-has-children">
					    		<a href="contact1">Contact</a>                                                        
					    		<ul class="sub-menu">  
					    			<li><a href="contact1">Contact 1</a></li>
					    			<li><a href="contact2">Contact 2</a></li>
					    		</ul>
					    	</li>-->
					    </ul> <!-- //.nav-menu -->
					    <!-- //.nav-menu -->
					   
					    <!-- //.nav-menu -->
					    <div class="canvas-contact">
					          <div class="address-area">
					              <!--<div class="address-list">
					                  <div class="info-icon">
					                      <i class="flaticon-location"></i>
					                  </div>
					                  <div class="info-content">
					                      <h4 class="title">Address</h4>
					                      <em>05 kandi BR. New York</em>
					                  </div>
					              </div>-->
					              <div class="address-list">
					                  <div class="info-icon">
					                      <i class="flaticon-email"></i>
					                  </div>
					                  <div class="info-content">
					                      <h4 class="title">Support Email</h4>
					                      <em><a href="mailto:support@5f1ehvr86nbm.com">support@5f1ehvr86nbm.com</a></em>
					                  </div>
					              </div>
					              <!--<div class="address-list">
					                  <div class="info-icon">
					                      <i class="flaticon-call"></i>
					                  </div>
					                  <div class="info-content">
					                      <h4 class="title">Phone</h4>
					                      <em>+019988772</em>
					                  </div>
					              </div>-->
					          </div>
					    </div>
					</nav>
					<!-- Canvas Menu end -->                             
				</header>
				<!--Header End-->
			</div>
			<!--Full width header End-->

  
 <?php /**PATH /home/statynyb/public_html/core/resources/views/theme5/layout/header.blade.php ENDPATH**/ ?>