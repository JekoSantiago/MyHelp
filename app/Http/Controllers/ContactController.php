<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['title'] = "MyHelp | Contact";   
           
        return view('pages.contact.index', $data);
    }  
}


/* End of file ContactController.php 
 * Location: app/Http/Controllers/ContactController.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */