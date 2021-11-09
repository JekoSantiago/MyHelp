@extends('layouts.main')
@section('css')
    <link href="{{URL::asset('resources/templates/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('resources/templates/profile/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/templates/profile/cropper/cropper.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/customs/css/global.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/templates/assets/plugins/c3/c3.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/templates/assets/plugins/datetimepicker/css/classic.css')}}">

@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title "><i class="bx bx-book-bookmark"></i> Dashboard</div>
                <div class="ps-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="filter_apply_fdate">Date From</label>
                        <input id="filter_apply_fdate" name="filter_apply_fdate" type="date" class="form-control filter-flatpickr" value="{{ $datenow }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="filter_apply_tdate">Date To</label>
                        <input id="filter_apply_tdate" name="filter_apply_tdate" type="date" class="form-control filter-flatpickr" value="{{ $datenow }}">
                    </div>
                </div>
			</div><!--end row-->
            <hr />
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
					<div class="card">
						<div class="card-body">
                            <div class="col-lg-12 mb-3">
                                <div class="card-box h-100">
                                    <h4 class="header-title mb-3">Tickets Per Department</h4>
                                    <div id="ticket_pie" dir="ltr">
                                        <div class="alert alert-warning bg-warning text-white border-0" role="alert">
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


    @include('pages.ticket.modal.ticket-modal')
    @section('js')
        <script src="{{URL::asset('resources/templates/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	    <script src="{{URL::asset('resources/templates/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{URL::asset('resources/customs/js/global.js')}}"></script>
        <script src="{{URL::asset('resources/customs/js/dashboard.js')}}"></script>
        <script src="{{URL::asset('resources/templates/assets/plugins/c3/c3.min.js')}}"></script>
        <script src="{{URL::asset('resources/templates/assets/plugins/d3/d3.min.js')}}"></script>
        <script src="{{URL::asset('resources/templates/assets/plugins/datetimepicker/js/picker.js')}}"></script>

    @endsection
    @stop
