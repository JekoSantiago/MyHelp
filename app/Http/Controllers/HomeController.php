<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = "MyHelp | Ticket";   
           
        return view('pages.home.index', $data);
    }  
}


/* End of file HomeController.php 
 * Location: app/Http/Controllers/HomeController.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */