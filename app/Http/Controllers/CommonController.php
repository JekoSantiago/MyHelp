<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Session;
use MyHelper; 
use App\Models\Common;
use App\Models\Department;
use App\Models\TicketCategory;
use App\Models\TicketSubCategory;
use Illuminate\Support\Facades\DB;
class CommonController extends Controller
{
   
    public function getDepartment(Request $request)
    { 
        $result = Department::getDepartment();
        return response()->json($result, 200); 
    }

    public function getTicketCategory(Request $request)
    {
        $departmentID = $request->input('departmentID') ? : 0;
        $result = TicketCategory::getTicketCategory($departmentID);
        return response()->json($result, 200); 
    } 

    public function getTicketSubCategory(Request $request)
    {
        $ticketCategoryID = $request->input('ticketCategoryID') ? : 0;
        $result = TicketSubCategory::getTicketSubCategory($ticketCategoryID);
        return response()->json($result, 200); 
    } 

    public function getTicketStatus(Request $request)
    { 
        $result = TicketStatus::getTicketStatus();
        return response()->json($result, 200); 
    } 
}

/* End of file CommonController.php 
 * Location: app/Http/Controllers/CommonController.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */