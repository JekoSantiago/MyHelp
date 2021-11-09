<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;
class ModuleRole extends Model
{
    /**
     * Get Department
     */
    public static function getDepartment($data)
    {
        $result = DB::select('sp_Department_Get '.MyHelper::generateQM($data),$data);
        return $result;
    }

    /**
     * Get Employee Position
     */
    public static function getPosition($data)
    { 
        $result = DB::select('sp_Position_Get '.MyHelper::generateQM($data),$data);
        return $result;
    }

    /**
     * Get Location
     */
    public static function getLocation($data)
    { 
        $result = DB::select('sp_StoreSearch_Get '.MyHelper::generateQM($data),$data);
        return $result;
    }  

    /**
     * Get Employee
     */ 
    public static function getEmployee($data)
    { 
        $result = DB::select('sp_Emp_Get '.MyHelper::generateQM($data),$data); 
        return $result;
    }  

    /**
     * Get User Module Role
     */ 
    public static function getUserModuleRole($data)
    { 
        $result = DB::select('UserMgt.dbo.sp_User_ModuleRole_Get '.MyHelper::generateQM($data),$data); 
        return $result;
    }  
 
}


/* End of file ModuleRole.php 
 * Location: app/Models/ModuleRole.php  
 * Author: Melvin A. De Asis
 * Created Date: Oct 10, 2021
 * Last Update: 
 * Project Name : MyHelp
 */