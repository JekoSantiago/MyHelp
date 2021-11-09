<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 
use Session;
use MyHelper;  
use App\Models\Ticket;
use App\Models\TicketCategory;
use App\Models\TicketSubCategory;
use App\Models\Department;
use App\Models\TicketStatus;
class TicketController extends Controller
{
    public function index()
    {
        $data['title'] = "MyHelp | Ticket"; 
 
        $ticketParams[] = 0;    #ticketID
        $ticketParams[] = '';   #ticketNumber
        $ticketParams[] = 0;    #ticketStatusID
        $ticketParams[] = Session::get("Employee_ID");    #userEmpID
        $data['tickets'] = Ticket::getTicket($ticketParams);

        return view('pages.ticket.index', $data);
    }  

    public function viewInsertTicket()
    {
        $data['title']          = "MyHelp | Ticket";    
        $data['categories']     = TicketCategory::getTicketCategory(0);
        $data['departments']    = Department::getDepartment(); 
        $data['subCategories']  = TicketSubCategory::getTicketSubCategory(0); 
        return view('pages.ticket.insert-ticket', $data);
    }  

    public function viewTicketDetails(Request $request, $ticketID)
    {
        $data['title'] = "MyHelp | Ticket";   
         
        $ticketParams[] = $ticketID;    #ticketID
        $ticketParams[] = '';   #ticketNumber
        $ticketParams[] = 0;    #ticketStatusID
        $ticketParams[] = 0;    #userEmpID
        $tickets = Ticket::getTicket($ticketParams);
        if(count($tickets) == 0)
            return  redirect('/ticket/my-ticket');
        
        $data['ticket']         = $tickets[0]; 
        $data['departments']    = Department::getDepartment();     
        $data['categories']     = TicketCategory::getTicketCategory($data['ticket']->Department_ID);
        $data['subCategories']  = TicketSubCategory::getTicketSubCategory($data['ticket']->TicketCategory_ID); 
         
        return view('pages.ticket.ticket-details', $data);
    }  
 
    public function insertTicket(Request $request)
    {      
        $experienceTypeID    = $request->input('experienceType'); 
        $departmentID        = $request->input('department'); 
        $ticketCategoryID    = $request->input('ticketCategory'); 
        $ticketSubCategoryID = $request->input('ticketSubCategory'); 
        $description       = $request->input('description'); 
        $ticket_files        = $request->file('ticket_files');

        if($experienceTypeID == '')     return response()->json(array('FIELD_ID'=>'experienceType','RETURN'=>-101,'MESSAGE'=>'Who Experience the Problem? field is required'), 200);
        if($departmentID == '')         return response()->json(array('FIELD_ID'=>'department','RETURN'=>-102,'MESSAGE'=>'Department field is required'), 200);
        if($ticketCategoryID == '')     return response()->json(array('FIELD_ID'=>'ticketCategory','RETURN'=>-103,'MESSAGE'=>'Category field is required'), 200);
        if($ticketSubCategoryID == '')  return response()->json(array('FIELD_ID'=>'ticketSubCategory','RETURN'=>-104,'MESSAGE'=>'Sub Category field is required'), 200);
        if($description == '')          return response()->json(array('FIELD_ID'=>'description','RETURN'=>-105,'MESSAGE'=>'Description field field is required'), 200);
         
        $ticketParams[] = $ticketSubCategoryID;
        $ticketParams[] = Session::get("Location_ID")?:'1';
        $ticketParams[] = $experienceTypeID;
        $ticketParams[] = $description;
        $ticketParams[] = Session::get("Employee_ID"); 
        $resTicket      = Ticket::insertTicket($ticketParams);  
 
        if(count($resTicket) > 0):
            if($resTicket[0]->RETURN):
                if(isset($ticket_files)):   
                    foreach($ticket_files as $file): 
                        Storage::putFileAs('public/uploads/ticket/'.$resTicket[0]->RETURN,$file,$file->getClientOriginalName());  
                    endforeach;
                endif;
            endif;
        endif;
        $resTicket = $resTicket[0];
         return response()->json($resTicket, 200);
    }

    public function updateTicket(Request $request)
    {      
        $ticketID            = $request->input('ticketID');
        $experienceTypeID    = $request->input('experienceType'); 
        $departmentID        = $request->input('department'); 
        $ticketCategoryID    = $request->input('ticketCategory'); 
        $ticketSubCategoryID = $request->input('ticketSubCategory'); 
        $description         = $request->input('description'); 
        $ticket_files        = $request->file('ticket_files');
 
        if($experienceTypeID == '')     return response()->json(array('FIELD_ID'=>'experienceType','RETURN'=>-101,'MESSAGE'=>'Who Experience the Problem? field is required'), 200);
        if($departmentID == '')         return response()->json(array('FIELD_ID'=>'department','RETURN'=>-102,'MESSAGE'=>'Department field is required'), 200);
        if($ticketCategoryID == '')     return response()->json(array('FIELD_ID'=>'ticketCategory','RETURN'=>-103,'MESSAGE'=>'Category field is required'), 200);
        if($ticketSubCategoryID == '')  return response()->json(array('FIELD_ID'=>'ticketSubCategory','RETURN'=>-104,'MESSAGE'=>'Sub Category field is required'), 200);
        if($description == '')          return response()->json(array('FIELD_ID'=>'description','RETURN'=>-105,'MESSAGE'=>'Description field field is required'), 200);
        if($ticketID == '')             return response()->json(array('FIELD_ID'=>'ticketID','RETURN'=>-101,'MESSAGE'=>'Invalid Ticket ID'), 200);
 
        $ticketParams[] = $ticketID;
        $ticketParams[] = $ticketSubCategoryID;
        $ticketParams[] = Session::get("Location_ID")?:'1';
        $ticketParams[] = $experienceTypeID;
        $ticketParams[] = $description;
        $ticketParams[] = Session::get("Employee_ID"); 
        $resTicket      = Ticket::updateTicket($ticketParams);  
 
        if(count($resTicket) > 0):
            if($resTicket[0]->RETURN):
                if(isset($ticket_files)):   
                    foreach($ticket_files as $file): 
                        Storage::putFileAs('public/uploads/ticket/'.$resTicket[0]->RETURN,$file,$file->getClientOriginalName());  
                    endforeach;
                endif;
            endif;
        endif;
        $resTicket = $resTicket[0];
         return response()->json($resTicket, 200);
    }

    public function deleteFile(Request $request)
    {
        $ticketID    = $request->input('ticketID');
        $fileName    = $request->input('fileName');  
        if(unlink(storage_path('app\\public\\uploads\\ticket\\'.$ticketID.'\\'.$fileName))):
            return response()->json(array('RETURN'=>1,'MESSAGE'=>'Successfully deleted attached file.'), 200);
        else:
            return response()->json(array('RETURN'=>-1,'MESSAGE'=>'Failed to delete attached file.'), 200);
        endif;
    }
}


/* End of file TicketController.php 
 * Location: app/Http/Controllers/TicketController.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */