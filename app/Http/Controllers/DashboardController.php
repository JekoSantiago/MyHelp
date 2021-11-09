<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = "MyHelp | Dashboard";   
           
        return view('pages.dashboard.index', $data);
    }  
}



/* End of file DashboardController.php 
 * Location: app/Http/Controllers/DashboardController.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */