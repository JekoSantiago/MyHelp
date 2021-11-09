<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;

class Ticket extends Model
{
    /**
     * Get Ticket
     */
    public static function getTicket($data)
    { 
       
        $result = DB::select('sp_Ticket_Get '.MyHelper::generateQM($data),$data); 
        return $result;
    }  

    /**
     * Insert Ticket
     */
    public static function insertTicket($data)
    { 
        $result = DB::select('sp_Ticket_Insert '.MyHelper::generateQM($data),$data); 
        return $result;
    }  


    /**
     * Update Ticket
     */
    public static function updateTicket($data)
    { 
        $result = DB::select('sp_Ticket_Update '.MyHelper::generateQM($data),$data); 
        return $result;
    }  
}


/* End of file Ticket.php 
 * Location: app/Models/Ticket.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */

 