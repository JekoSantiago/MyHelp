@extends('layouts.main')
@section('css')  
    <link href="{{URL::asset('resources/templates/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('resources/templates/profile/assets/css/font-awesome.min.css')}}">  
    <link rel="stylesheet" href="{{URL::asset('resources/templates/profile/cropper/cropper.css')}}"> 
    <link rel="stylesheet" href="{{URL::asset('resources/customs/css/global.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/customs/css/ticket-details.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/templates/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title "><i class="bx bx-book-bookmark"></i> My Ticket</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="bx bx-clipboard"></i>Create Ticket</li>
                    </ol>
                </nav>
            </div> 
        </div> 
        <!--end breadcrumb-->
        <div class="container card">
            <div class="main-body">
                <h5 class="card-title mt-2">Create New Ticket</h5>
                @include('pages.ticket.form.insert-ticket-form') 
            </div>
        </div>
    </div>
</div> 
  
    @section('js')   
        <script src="{{URL::asset('resources/templates/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>
        <script src="{{URL::asset('resources/customs/js/global.js')}}"></script>
        <script src="{{URL::asset('resources/customs/js/ticket-details.js')}}"></script>
        <script src="{{URL::asset('resources/templates/assets/js/app.js')}}"></script>
        <script src="{{URL::asset('resources/customs/js/insert-ticket.js')}}"></script>
    @endsection
    @stop 