<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;

class TicketSubCategory extends Model
{
    /**
     * Get TicketSubCategory
     */
    public static function getTicketSubCategory($ticketCategoryID)
    { 
        $result = DB::select('sp_TicketSubCategory_Get ?',[$ticketCategoryID]); 
        return $result;
    }   
}
 
/* End of file TicketSubCategory.php 
 * Location: app/Models/TicketSubCategory.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */

 