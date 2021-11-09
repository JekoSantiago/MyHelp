<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;

class TicketCategory extends Model
{
    /**
     * Get TicketCategory
     */
    public static function getTicketCategory($departmentID)
    { 
        $result = DB::select('sp_TicketCategory_Get ?',[$departmentID]); 
        return $result;
    }  

     
}


/* End of file TicketCategory.php 
 * Location: app/Models/TicketCategory.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */

 