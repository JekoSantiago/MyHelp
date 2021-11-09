@extends('layouts.main')
@section('css')  
    <link href="{{URL::asset('resources/templates/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('resources/templates/profile/assets/css/font-awesome.min.css')}}">  
    <link rel="stylesheet" href="{{URL::asset('resources/templates/profile/cropper/cropper.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/customs/css/global.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/customs/css/ticket.css')}}">
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title "><i class="bx bx-book-bookmark"></i> Ticket</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><i class="bx bx-clipboard"></i> My Ticket</li>
                        </ol>
                    </nav>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="card radius-10 overflow-hidden bg-secondary">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white">Total Request</p>
                                    <h5 class="mb-0 text-white">867</h5>
                                </div>
                                <div class="ms-auto text-white">	<i class='bx bx-message-detail font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="chart1"></div>
                    </div>
                </div>
			    <div class="col-sm-2">
						<div class="card radius-10 overflow-hidden bg-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Closed</p>
										<h5 class="mb-0 text-white">867</h5>
									</div>
									<div class="ms-auto text-white">	<i class='bx bx-check-double font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart1"></div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="card radius-10 overflow-hidden bg-primary">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Fixed</p>
										<h5 class="mb-0 text-white">52,945</h5>
									</div>
									<div class="ms-auto text-white">	<i class='bx bx-check font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart2"></div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="card radius-10 overflow-hidden bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">FRA</p>
										<h5 class="mb-0 text-white">24.5K</h5>
									</div>
									<div class="ms-auto text-white">
                                        <i class='bx bx-door-open font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart3"></div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="card radius-10 overflow-hidden bg-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Open</p>
										<h5 class="mb-0 text-white">869</h5>
									</div>
									<div class="ms-auto text-white">	<i class='bx bx-chat font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart4"></div>
						</div>
					</div>
                    <div class="col-sm-2">
						<div class="card radius-10 overflow-hidden bg-default">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">New</p>
										<h5 class="mb-0 text-dark">869</h5>
									</div>
									<div class="ms-auto text-dark">	<i class='bx bx-chat font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart4"></div>
						</div>
					</div>
			  </div><!--end row-->
            <div class="row">
                <div class="col-sm-12 d-flex align-items-center">
                    <h6 class="page-title">List of Tickets</h6>  
                        <button type="button" class="btn btn-outline-secondary ms-auto" onclick="showTicketFormInsert()"><i class='bx bx-plus me-0'></i> Create New Ticket</button> 
                </div> 
            </div>
            <hr />
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body"> 
					<div class="card">
						<div class="card-body"> 
							
						</div>
					</div>
                </div>
            </div>
        </div>
    </div> 

   
    @include('pages.ticket.modal.ticket-modal') 
    @section('js')  
        <script src="{{URL::asset('resources/templates/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	    <script src="{{URL::asset('resources/templates/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script> 
        <script src="{{URL::asset('resources/customs/js/global.js')}}"></script>
        <script src="{{URL::asset('resources/customs/js/ticket.js')}}"></script>
    @endsection
    @stop 