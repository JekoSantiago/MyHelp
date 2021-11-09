<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ URL::to('resources/templates/assets/images/alfa-lady-logo.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{env('APP_NAME')}}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ URL::to('/home') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Home</div>
            </a> 
        </li>   
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-book-bookmark"></i>
                </div>
                <div class="menu-title">Ticket</div>
            </a>
            <ul>
                <li> <a href="{{ URL::to('/ticket/my-ticket') }}"><i class="bx bx-clipboard"></i>My Ticket</a>
                </li>
                <li> <a href="{{ URL::to('/ticket/other-ticket') }}"><i class="bx bx-file-find"></i>Other Ticket</a>
                </li> 
            </ul>
        </li>  
        <li>
            <a href="{{ URL::to('/dashboard') }}">
                <div class="parent-icon"><i class='bx bx-line-chart-down'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a> 
        </li>
        <li>
            <a href="{{ URL::to('/contact') }}">
                <div class="parent-icon"><i class='bx bx-phone-call'></i>
                </div>
                <div class="menu-title">Contact</div>
            </a> 
        </li> 
        <li>
            <a href="{{ URL::to('/reports') }}">
                <div class="parent-icon"><i class='bx bx-file-blank'></i>
                </div>
                <div class="menu-title">Reports</div>
            </a> 
        </li> 
        <li>
            <a href="{{ URL::to('/maintenance') }}">
                <div class="parent-icon"><i class='bx bx-wrench'></i>
                </div>
                <div class="menu-title">Maintenance</div>
            </a> 
        </li>  
    </ul>
    
    <!--end navigation-->
</div>