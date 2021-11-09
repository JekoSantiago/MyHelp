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
            
            <div class="row">
                <div class="col-sm-12 d-flex align-items-center">
                    <h6 class="page-title">Home</h6>  
                         
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