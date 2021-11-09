<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use MyHelper;

class ExperienceType extends Model
{
    /**
     * Get ExperienceType
     */
    public static function getExperienceType($data)
    { 
        $result = DB::select('sp_ExperienceType_Get '.MyHelper::generateQM($data),$data); 
        return $result;
    }    
}


/* End of file ExperienceType.php 
 * Location: app/Models/ExperienceType.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */

 