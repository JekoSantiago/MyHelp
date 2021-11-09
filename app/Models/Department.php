<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;
class Department extends Model
{
    /**
     * Get Department
     */
    public static function getDepartment()
    {
        $result = DB::select('sp_Department_Get');
        return $result;
    }
 
}


/* End of file Department.php 
 * Location: app/Models/Department.php  
 * Author: Melvin A. De Asis
 * Created Date: Oct 10, 2021
 * Last Update: 
 * Project Name : MyHelp
 */