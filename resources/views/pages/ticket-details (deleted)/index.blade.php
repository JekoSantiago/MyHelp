@extends('layouts.main')
@section('css')  
    <link href="{{URL::asset('resources/templates/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('resources/templates/profile/assets/css/font-awesome.min.css')}}">  
    <link rel="stylesheet" href="{{URL::asset('resources/templates/profile/cropper/cropper.css')}}"> 
    <link rel="stylesheet" href="{{URL::asset('resources/customs/css/global.css')}}">
    <link rel="stylesheet" href="{{URL::asset('resources/customs/css/details.css')}}">
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
        <!--end breadcrumb-->
        <div class="container card">
            <div class="main-body">
                <br />
                <div class="row">
                    <div class="col-sm-8">
                         <div class="card"> 
                             <div class="card-body">
                                 <h5 class="card-title">Card title</h5>
                                 @include('pages.ticket.modal.ticket-modal') 
                             </div> 
                         </div>
                     </div> 
                     <div class="col-sm-4">
                         <div class="card">
                             <div class="card-header">
                                 <h5 class="mb-1 font-weight-bold">Juan Dela Cruz</h5>
                                 <div class="list-inline d-sm-flex mb-0 d-none"> <a href="javascript:;" class="list-inline-item d-flex align-items-center text-secondary"><small class='bx bxs-circle me-1 chart-online'></small>Active Now</a>
                                     <a href="javascript:;" class="list-inline-item d-flex align-items-center text-secondary"></a>  
                                 </div>
                             </div>
                             <div class="card-body chat-message"> 
                                 <div class="">
                                    <div class="chat-content-leftside">
                                        <div class="d-flex">  
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 chat-time"><i class='bx bx-user'></i> Harvey, 2:35 PM</p>
                                                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-rightside">
                                        <div class="d-flex ms-auto">
                                            <div class="flex-grow-1 me-2">
                                                <p class="mb-0 chat-time text-end"><i class='bx bx-user'></i> you, 2:37 PM</p>
                                                <p class="chat-right-msg">I am in USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-leftside">
                                        <div class="d-flex"> 
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 chat-time"><i class='bx bx-user'></i> Harvey, 2:35 PM</p>
                                                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-rightside">
                                        <div class="d-flex ms-auto">
                                            <div class="flex-grow-1 me-2">
                                                <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                                                <p class="chat-right-msg">I am in USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-leftside">
                                        <div class="d-flex">
                                            
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 chat-time">Harvey, 2:35 PM</p>
                                                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-rightside">
                                        <div class="d-flex ms-auto">
                                            <div class="flex-grow-1 me-2">
                                                <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                                                <p class="chat-right-msg">I am in USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-leftside">
                                        <div class="d-flex">
                                            
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 chat-time">Harvey, 2:35 PM</p>
                                                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-rightside">
                                        <div class="d-flex ms-auto">
                                            <div class="flex-grow-1 me-2">
                                                <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                                                <p class="chat-right-msg">I am in USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-leftside">
                                        <div class="d-flex">
                                            
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 chat-time">Harvey, 2:35 PM</p>
                                                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-rightside">
                                        <div class="d-flex ms-auto">
                                            <div class="flex-grow-1 me-2">
                                                <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                                                <p class="chat-right-msg">I am in USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-leftside">
                                        <div class="d-flex">
                                            
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 chat-time">Harvey, 2:35 PM</p>
                                                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-rightside">
                                        <div class="d-flex ms-auto">
                                            <div class="flex-grow-1 me-2">
                                                <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                                                <p class="chat-right-msg">I am in USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-leftside">
                                        <div class="d-flex">
                                            
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 chat-time">Harvey, 2:35 PM</p>
                                                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-rightside">
                                        <div class="d-flex ms-auto">
                                            <div class="flex-grow-1 me-2">
                                                <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                                                <p class="chat-right-msg">I am in USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-leftside">
                                        <div class="d-flex">
                                            
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0 chat-time">Harvey, 2:35 PM</p>
                                                <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-content-rightside">
                                        <div class="d-flex ms-auto">
                                            <div class="flex-grow-1 me-2">
                                                <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                                                <p class="chat-right-msg">I am in USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div> 
                             <div class="card-footer">
                                <div class="input-groups">	 
                                    <textarea type="text" class="form-control" placeholder="Type a message" rows="1"></textarea>
                                </div> 
                             </div>
                         </div>
                     </div> 
                 </div> 
            </div>
        </div>
    </div>
</div> 
  
    @section('chat-js')  
        <script> 
            new PerfectScrollbar('.chat-message');
        </script>
    @endsection
    
    @include('pages.ticket.modal.ticket-modal') 
    @section('js')  
        <script src="{{URL::asset('resources/templates/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	    <script src="{{URL::asset('resources/templates/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script> 
        <script src="{{URL::asset('resources/customs/js/global.js')}}"></script>
        <script src="{{URL::asset('resources/customs/js/ticket.js')}}"></script>
        <script src="{{URL::asset('resources/templates/assets/js/app.js')}}"></script>
    @endsection
    @stop 