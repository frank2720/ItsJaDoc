@extends('layouts.main')
@section('title')
	{{__('Doctor dashboard')}}
@endsection
@section('page')
	<!-- Breadcrumb -->
	<div class="breadcrumb-bar">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-12 col-12">
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						</ol>
					</nav>
					<h2 class="breadcrumb-title">Dashboard</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- /Breadcrumb -->
	
	<!-- Page Content -->
	<div class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
					
					@include('doctor.sidebar')
					
				</div>
				
				<div class="col-md-7 col-lg-8 col-xl-9">

					<div class="row">
						<div class="col-md-12">
							<div class="card dash-card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-4">
											<div class="dash-widget dct-border-rht">
												<div class="circle-bar circle-bar1">
													<div class="circle-graph1" data-percent="75">
														<img src="assets/img/icon-01.png" class="img-fluid" alt="patient">
													</div>
												</div>
												<div class="dash-widget-info">
													<h6>Total Patient</h6>
													<h3>1500</h3>
													<p class="text-muted">Till Today</p>
												</div>
											</div>
										</div>
										
										<div class="col-md-12 col-lg-4">
											<div class="dash-widget dct-border-rht">
												<div class="circle-bar circle-bar2">
													<div class="circle-graph2" data-percent="65">
														<img src="assets/img/icon-02.png" class="img-fluid" alt="Patient">
													</div>
												</div>
												<div class="dash-widget-info">
													<h6>Today Patient</h6>
													<h3>160</h3>
													<p class="text-muted">06, Nov 2019</p>
												</div>
											</div>
										</div>
										
										<div class="col-md-12 col-lg-4">
											<div class="dash-widget">
												<div class="circle-bar circle-bar3">
													<div class="circle-graph3" data-percent="50">
														<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
													</div>
												</div>
												<div class="dash-widget-info">
													<h6>Appoinments</h6>
													<h3>85</h3>
													<p class="text-muted">06, Apr 2019</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<h4 class="mb-4">Patient Appoinment</h4>
							<div class="appointment-tab">
							
								<!-- Appointment Tab -->
								<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
									<li class="nav-item">
										<a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Upcoming</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#today-appointments" data-toggle="tab">Today</a>
									</li> 
								</ul>
								<!-- /Appointment Tab -->
								
								<div class="tab-content">
								
									<!-- Upcoming Appointment Tab -->
									<div class="tab-pane show active" id="upcoming-appointments">
										<div class="card card-table mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>Patient Name</th>
																<th>Appt Date</th>
																<th>Purpose</th>
																<th>Type</th>
																<th class="text-center">Paid Amount</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image"></a>
																		<a href="">Richard Wilson <span>#PT0016</span></a>
																	</h2>
																</td>
																<td>11 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
																<td>General</td>
																<td>New Patient</td>
																<td class="text-center">$150</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
																		<a href="">Charlene Reed <span>#PT0001</span></a>
																	</h2>
																</td>
																<td>3 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
																<td>General</td>
																<td>Old Patient</td>
																<td class="text-center">$200</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
																		<a href="">Travis Trimble  <span>#PT0002</span></a>
																	</h2>
																</td>
																<td>1 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
																<td>General</td>
																<td>New Patient</td>
																<td class="text-center">$75</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
																		<a href="">Carl Kelly <span>#PT0003</span></a>
																	</h2>
																</td>
																<td>30 Oct 2019 <span class="d-block text-info">9.00 AM</span></td>
																<td>General</td>
																<td>Old Patient</td>
																<td class="text-center">$100</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
																		<a href="">Michelle Fairfax <span>#PT0004</span></a>
																	</h2>
																</td>
																<td>28 Oct 2019 <span class="d-block text-info">6.00 PM</span></td>
																<td>General</td>
																<td>New Patient</td>
																<td class="text-center">$350</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image"></a>
																		<a href="">Gina Moore <span>#PT0005</span></a>
																	</h2>
																</td>
																<td>27 Oct 2019 <span class="d-block text-info">8.00 AM</span></td>
																<td>General</td>
																<td>Old Patient</td>
																<td class="text-center">$250</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>		
												</div>
											</div>
										</div>
									</div>
									<!-- /Upcoming Appointment Tab -->
							   
									<!-- Today Appointment Tab -->
									<div class="tab-pane" id="today-appointments">
										<div class="card card-table mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>Patient Name</th>
																<th>Appt Date</th>
																<th>Purpose</th>
																<th>Type</th>
																<th class="text-center">Paid Amount</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient6.jpg" alt="User Image"></a>
																		<a href="">Elsie Gilley <span>#PT0006</span></a>
																	</h2>
																</td>
																<td>14 Nov 2019 <span class="d-block text-info">6.00 PM</span></td>
																<td>Fever</td>
																<td>Old Patient</td>
																<td class="text-center">$300</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient7.jpg" alt="User Image"></a>
																		<a href="">Joan Gardner <span>#PT0006</span></a>
																	</h2>
																</td>
																<td>14 Nov 2019 <span class="d-block text-info">5.00 PM</span></td>
																<td>General</td>
																<td>Old Patient</td>
																<td class="text-center">$100</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient8.jpg" alt="User Image"></a>
																		<a href="">Daniel Griffing <span>#PT0007</span></a>
																	</h2>
																</td>
																<td>14 Nov 2019 <span class="d-block text-info">3.00 PM</span></td>
																<td>General</td>
																<td>New Patient</td>
																<td class="text-center">$75</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient9.jpg" alt="User Image"></a>
																		<a href="">Walter Roberson <span>#PT0008</span></a>
																	</h2>
																</td>
																<td>14 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
																<td>General</td>
																<td>Old Patient</td>
																<td class="text-center">$350</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient10.jpg" alt="User Image"></a>
																		<a href="">Robert Rhodes <span>#PT0010</span></a>
																	</h2>
																</td>
																<td>14 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
																<td>General</td>
																<td>New Patient</td>
																<td class="text-center">$175</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient11.jpg" alt="User Image"></a>
																		<a href="">Harry Williams <span>#PT0011</span></a>
																	</h2>
																</td>
																<td>14 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
																<td>General</td>
																<td>New Patient</td>
																<td class="text-center">$450</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>		
												</div>	
											</div>	
										</div>	
									</div>
									<!-- /Today Appointment Tab -->
									
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>		
	<!-- /Page Content -->
@endsection