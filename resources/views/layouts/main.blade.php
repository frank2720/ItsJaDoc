<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>@yield('title')</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="assets/img/logo.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{route('home')}}" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{route('home')}}" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="{{route('home')}}">Home</a>
							</li>

							@auth
							@if (auth()->user()->user_type=='Doctor')
							<li>
                                <a href="{{route('doctor.home')}}">Doctor Dashboard</a>
                            </li>
							@endif

							@if (auth()->user()->user_type=='Common')
							<li class="has-submenu">
								<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="{{route('patient.search')}}">Search Doctor</a></li>
									<li><a href="{{route('patient.home')}}">Patient Dashboard</a></li>
									<li><a href="{{route('patient.favourites')}}">Favourites</a></li>
									<li><a href="{{route('patient.chats')}}">Chat</a></li>
								</ul>
							</li>
							@endif

							@if (auth()->user()->user_type=='Admin')
							<li>
								<a href="{{route('admin.home')}}">Admin</a>
							</li>
							@endif
							@else
							<li><a href="{{route('patient.search')}}">Search Doctor</a></li>
							@endauth

                            <li>
                                <a href="{{route('calendar')}}">Calendar</a>
                            </li>
							
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact us</p>
								<p class="contact-info-header"> +254 782 165 602</p>
							</div>
						</li>

						<ul class="nav header-navbar-rht">
						@if (Route::has('login'))
							@auth
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								@if (auth()->user()->user_type=='Admin')
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Darren Elder">
								</span>
								@elseif(auth()->user()->user_type=='Common')
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/patients/patient.jpg" width="31" alt="Darren Elder">
								</span>
								@elseif(auth()->user()->user_type=='Doctor')
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Darren Elder">
								</span>
								@endif
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										@if (auth()->user()->user_type=='Admin')
										<span class="user-img">
											<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Darren Elder">
										</span>
										@elseif(auth()->user()->user_type=='Common')
										<span class="user-img">
											<img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" width="31" alt="Darren Elder">
										</span>
										@elseif(auth()->user()->user_type=='Doctor')
										<span class="user-img">
											<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Darren Elder">
										</span>
										@endif
									</div>
									<div class="user-text">
										<h6>{{auth()->user()->name}}</h6>
										<p class="text-muted mb-0">{{auth()->user()->user_type=='Common'?'Patient':auth()->user()->user_type}}</p>
									</div>
								</div>
								@if (auth()->user()->user_type=='Common')
								<a class="dropdown-item" href="{{route('patient.home')}}">Dashboard</a>
								@elseif(auth()->user()->user_type=='Doctor')
								<a class="dropdown-item" href="{{route('doctor.home')}}">Dashboard</a>
								@elseif(auth()->user()->user_type=='Admin')
								<a class="dropdown-item" href="{{route('admin.home')}}">Dashboard</a>
								@endif
								<a class="dropdown-item" href="">Profile Settings</a>
								<a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" >Logout</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST">
									@csrf
								</form>
							</div>
						</li>
						<!-- /User Menu -->
							@else
							<li class="register-btn">
								<a href="{{route('register')}}" class="btn reg-btn"><i class="feather-user"></i>Register</a>
							</li>

							<li class="register-btn">
								<a href="{{route('login')}}" class="btn btn-primary log-btn"><i class="feather-lock"></i>Login</a>
							</li>
							@endauth
						@endif
						</ul>
					</ul>
				</nav>
			</header>
			<!-- /Header -->

            @yield('page')
			
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/logo.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>It is important to take care of the patient, to be followed by the patient, but it will happen at such a time that there is a lot of work and pain. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>

							@auth
								@if (auth()->user()->user_type=='Common')
								<div class="col-lg-3 col-md-6">
							
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h2 class="footer-title">For Patients</h2>
										<ul>
											<li><a href=""><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
											<li><a href=""><i class="fas fa-angle-double-right"></i> Booking</a></li>
											<li><a href=""><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
										</ul>
									</div>
									<!-- /Footer Widget -->
									
								</div>
								@elseif(auth()->user()->user_type=='Doctor')
								<div class="col-lg-3 col-md-6">
							
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h2 class="footer-title">For Doctors</h2>
										<ul>
											<li><a href=""><i class="fas fa-angle-double-right"></i> Appointments</a></li>
											<li><a href=""><i class="fas fa-angle-double-right"></i> Chat</a></li>
											<li><a href=""><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
										</ul>
									</div>
									<!-- /Footer Widget -->
									
								</div>
								@endif
							@endauth
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 0722  Zimmerman, Roysambu,<br> Nairobi</p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+254 782 165 602
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											jaredojwang00@gmail.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
			</footer>
			<!-- /Footer -->
        </div>
        <!-- /Main Wrapper -->

        @yield('calls')
		

		<!-- Add Event Modal -->
		<div id="add_event" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Event</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Event Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Event Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input class="form-control datetimepicker" type="text">
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Event Modal -->
		
		<!-- Add Event Modal -->
		<div class="modal custom-modal fade none-border" id="my_event">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Event</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer justify-content-center">
						<button type="button" class="btn btn-success save-event submit-btn">Create event</button>
						<button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Event Modal -->
		
		<!-- Add Category Modal -->
		<div class="modal custom-modal fade" id="add_new_event">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Category Name</label>
								<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
							</div>
							<div class="form-group">
								<label>Choose Category Color</label>
								<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
									<option value="success">Success</option>
									<option value="danger">Danger</option>
									<option value="info">Info</option>
									<option value="primary">Primary</option>
									<option value="warning">Warning</option>
									<option value="inverse">Inverse</option>
								</select>
							</div>
							<div class="submit-section text-center">
								<button type="button" class="btn btn-primary save-category submit-btn" data-dismiss="modal">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Category Modal -->
	
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Full Calendar JS -->
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
        <script src="assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>