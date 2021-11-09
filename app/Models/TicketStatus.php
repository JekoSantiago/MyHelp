<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;

class TicketStatus extends Model
{
    /**
     * Get TicketStatus
     */
    public static function getTicketStatus()
    { 
        $result = DB::select('sp_TicketStatus_Get'); 
        return $result;
    }    
}


/* End of file TicketStatus.php 
 * Location: app/Models/TicketStatus.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */

 