
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->
	
		<!-- Start Ecorik Navbar Area -->
		<div class="eorik-nav-style fixed-top">
			<div class="navbar-area">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="index.html" class="logo">
						<img src="asset/img/pbl/pbl.png" alt="Logo" style="width: 2rem; height: 2rem;">
					</a>
				</div>
				<!-- Menu For Desktop Device -->
				<div class="main-nav">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container">
							<a class="navbar-brand" href={{url('/')}}>
								<img src="asset/img/pbl/pbl.png" alt="Logo" style="width: 4rem; height: 4rem;">
							</a>
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle active">
											Home
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href={{url('/')}} class="">Home One</a>
											</li>
											
										</ul>
									</li>
									<li class="nav-item">
										<a href="" class="nav-link dropdown-toggle">
											Pages
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="" class="nav-link">About Us</a>
											</li>
											<li class="nav-item">
												<a href="" class="nav-link">Team</a>
											</li>
											<li class="nav-item">
												<a href="" class="nav-link">Pricing</a>
											</li>
											<li class="nav-item">
												<a href="" class="nav-link">FAQ</a>
											</li>
											<li class="nav-item">
												<a href="index.html#" class="nav-link dropdown-toggle">
													Shop
													<i class='bx bx-chevron-down'></i>
												</a>
												<ul class="dropdown-menu">
													<li class="nav-item">
														<a href="" class="nav-link">Product Grid</a>
													</li>
													<li class="nav-item">
														<a href="" class="nav-link">Checkout</a>
													</li>
													<li class="nav-item">
														<a href="" class="nav-link">Cart</a>
													</li>
													<li class="nav-item">
														<a href="" class="nav-link">Single Product</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="testimonial.html" class="nav-link">Testimonial</a>
											</li>
											<li class="nav-item">
												<a href="index.html#" class="nav-link dropdown-toggle">
													User
													<i class='bx bx-chevron-down'></i>
												</a>

												<ul class="dropdown-menu">
                                                    @if (Route::has('login'))
													<li class="nav-item">
                                                        @auth
														<a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
                                                        @else
														<a href="{{ route('login') }}" class="nav-link">Log In</a>
                                                        @endauth
													</li>
                                                    @endif

													<li class="nav-item">
														<a href="recover-password.html" class="nav-link">Recover Password</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>


									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle">
											Products
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href={{'fixed-deposit'}} class="nav-link">Fixed Deposit</a>
											</li>
											<li class="nav-item">
												<a href="{{'treasury-bill'}}" class="nav-link">Treasury Bill</a>
											</li>
											<li class="nav-item">
												<a href="service-style-one.html" class="nav-link">CIS</a>
											</li>
											
										</ul>
									</li>
									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle">
											News
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="news-grid.html" class="nav-link">News Grid</a>
											</li>
											<li class="nav-item">
												<a href="news-columns-two.html" class="nav-link">News Columns Two</a>
											</li>
											<li class="nav-item">
												<a href="news-left-sidebar.html" class="nav-link">News Left Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="news-right-sidebar.html" class="nav-link">News Right Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="news-details.html" class="nav-link">News Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle">
											Contacts
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="contact-style-one.html" class="nav-link">Contact Style One</a>
											</li>
											<li class="nav-item">
												<a href="contact-style-two.html" class="nav-link">Contact Style Two</a>
											</li>
										</ul>
									</li>
								</ul>
								<!-- Start Other Option -->
								<div class="others-option">
									<a class="call-us" href="tel:+009-8765-4332">
										<i class="bx bx-phone-call bx-tada"></i>
										+23323800222
									</a>
								</div>
								<!-- End Other Option -->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Ecorik Navbar Area -->

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">  
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="bx bx-x"></i>
								</span>
							</button>
							<h2 class="modal-title" id="myModalLabel2">
								<a href="index.html">
									<img src="asset/img/home-one/logo.jpg" alt="Logo">
								</a>
							</h2>
						</div>
						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">About Us</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus eum laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore voluptate, autem pariatur? Dicta pariatur.</p>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Additional Links</h3>
								<ul>
									<li>
										<a href="log-in.html">Log In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
									</li>
									<li>
										<a href="faq.html">FAQ</a>
									</li>
									<li>
										<a href="index.html#">Logout</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Contact Info</h3>
								<ul class="contact-info">
									<li>
										<i class="bx bx-location-plus"></i>
										Address
										<span>New York - 1060, Str. First 78 Great Western Road</span>
									</li>
									<li>
										<i class="bx bx-envelope"></i>
										Email
										<span>hello@prevoz.com</span>
									</li>
									<li>
										<i class="bx bxs-phone-call"></i>
										Phone
										<span>+502-464-679, +265-497-466</span>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Connect With Us</h3>
								<ul class="social-list">
									<li>
										<a href="index.html#">
											<i class='bx bxl-twitter'></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class='bx bxl-facebook'></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class='bx bxl-instagram'></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class='bx bxl-linkedin'></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class='bx bxl-youtube'></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar Modal -->