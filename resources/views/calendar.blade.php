@extends('layouts.main')
@section('title')
	{{__('calendar')}}
@endsection
@section('page')
    <!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Calendar</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Calendar</h2>
						</div>
						<div class="col-auto text-right float-right ml-auto">
							<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_event">Create Event</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						
						<!-- Calendar Events -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Drag & Drop Event</h4>
								</div>
								<div class="card-body">
									<div id="calendar-events" class="mb-3">
										<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle text-info"></i> My Event One</div>
										<div class="calendar-events" data-class="bg-success"><i class="fas fa-circle text-success"></i> My Event Two</div>
										<div class="calendar-events" data-class="bg-danger"><i class="fas fa-circle text-danger"></i> My Event Three</div>
										<div class="calendar-events" data-class="bg-warning"><i class="fas fa-circle text-warning"></i> My Event Four</div>
									</div>
									<div class="checkbox mb-3">
										<input id="drop-remove" type="checkbox">
										<label for="drop-remove">
											Remove after drop
										</label>
									</div>
									<a href="#" data-toggle="modal" data-target="#add_new_event" class="btn btn-primary btn-block">
										<i class="fas fa-plus"></i> Add Category
									</a>
								</div>
							</div>
						</div>
						<!-- /Calendar Events -->
						
						<!-- Calendar -->
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div id="calendar"></div>
								</div>
							</div>
						</div>
						<!-- /Calendar -->
						
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
@endsection