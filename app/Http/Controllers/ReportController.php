<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $data['title'] = "MyHelp | Report";   
           
        return view('pages.report.index', $data);
    }  
}


/* End of file ReportController.php 
 * Location: app/Http/Controllers/ReportController.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */