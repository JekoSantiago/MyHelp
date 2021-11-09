<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $data['title'] = "MyHelp | Maintenance";   
           
        return view('pages.maintenance.index', $data);
    }  
}


/* End of file MaintenanceController.php 
 * Location: app/Http/Controllers/MaintenanceController.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */