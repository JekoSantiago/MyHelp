<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;

class UserDetails extends Model
{
    /**
     * Get User Details 
     */
    public static function getUserDetails($id)
    {
        $result = DB::select('sp_UserInfo_Get ?', [$id]);
        return $result;
    }  
}


/* End of file UserDetails.php 
 * Location: app/Models/UserDetails.php
 * 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp
 *
 */

 