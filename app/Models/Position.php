<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;
class Position extends Model
{
     
    /**
     * Get Employee Position
     */
    public static function getPosition($data)
    {
        $result = DB::select('ATPI_HR.dbo.sp_Position_Get '.MyHelper::generateQM($data),$data); 
        return $result;
    }
 
}


/* End of file Position.php 
 * Location: app/Models/Position.php  
 * Author: Melvin A. De Asis
 * Created Date: Oct 10, 2021
 * Last Update: 
 * Project Name : MyHelp
 */