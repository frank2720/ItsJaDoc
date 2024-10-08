@extends('layouts.main')
@section('title')
	{{__('favourite doctors')}}
@endsection
@section('page')
	<!-- Breadcrumb -->
	<div class="breadcrumb-bar">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-12 col-12">
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Favourites</li>
						</ol>
					</nav>
					<h2 class="breadcrumb-title">Favourites</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- /Breadcrumb -->
	
	<!-- Page Content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				@include('patient.sidebar')
				<div class="col-md-7 col-lg-8 col-xl-9">
					<div class="row row-grid">
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Ruby Perrin</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<span class="d-inline-block average-rating">(17)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 300 - Ksh. 1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Darren Elder</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(35)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 50 - Ksh. 300 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Deborah Angel</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(27)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 100 - Ksh. 400 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Sofia Brient</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(4)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 150 - Ksh. 250 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Marvin Campbell</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(66)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Kenya, Nairobi
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 50 - Ksh. 700 
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Katharine Berthold</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(52)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 100 - Ksh. 500 
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Linda Tobin</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(43)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 100 - Ksh. 1000 
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-08.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Paul Richard</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(49)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 100 - Ksh. 400 
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-09.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Dr. John Gibbs</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(112)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 500 - Ksh. 2500 
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-10.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Dr. Olga Barlow</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(65)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 75 - Ksh. 250 
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-11.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Dr. Julia Washington</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MBBS, MD - General Medicine, DM - Endocrinology</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(5)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 275 - Ksh. 450 
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{route('doctor.profile')}}">
										<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-12.jpg">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="{{route('doctor.profile')}}">Dr. Shaun Aponte</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MBBS, MS - ENT, Diploma in Otorhinolaryngology (DLO)</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(5)</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> Nairobi, Kenya
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> Ksh. 150 - Ksh. 350 
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="{{route('doctor.profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
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