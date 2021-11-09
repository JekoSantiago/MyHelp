<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails; 
use App\Models\ModuleRole; 
use Session;
use MyHelper;
use Redirect;

class AuthController extends Controller
{
    public function index()
    {  
        //$userEmpID     = 162; 
        // 161	Branch Manager
        // 162	Area Manager (AM)
        // 163	Area Coordinator (AC)
        // 291	HR - Executive
        // 292	HR - Manger (ES)
        // 293	HR - Manger (ES) Assistant
        // 294	HR - Supervisor (ES)
        // 295	HR - Rank & File (Timekeeping)
        // 443	COO

          $id = $_COOKIE['Emp_Id'];  
           $userEmpID  = MyHelper::decryptMyHub($id);  
       
        //   if($userEmpID == ''):
        //      return  redirect('/error/401');
        //   endif;
        //$userEmpID = 178;
       $userDetails = UserDetails::getUserDetails($userEmpID); 
       
       if(count($userDetails) > 0) 
       {
            $data[] = 0;                        //moduleRoleID
            $data[] = env('APP_ID');            //appID
            $data[] = 0;                        //moduleID
            $data[] = $userDetails[0]->Role_ID; //roleID

            $userAccess = ModuleRole::getUserModuleRole($data); 
            $sessionAccess =[];
            foreach($userAccess as $access):
                array_push($sessionAccess,array(
                'Module_ID'=>$access->Module_ID,
                'ModuleName'=>$access->ModuleName,
                'Action_ID'=>$access->Action_ID,
                'ActionName'=>$access->ActionName)); 
            endforeach;  
            Session::put('UserAccess',      $sessionAccess);
            Session::put('Employee_ID',      $userDetails[0]->Employee_ID);
            Session::put('EmployeeNo',       $userDetails[0]->EmployeeNo);
            Session::put('Role_ID',          $userDetails[0]->Role_ID);
            Session::put('FullName',         $userDetails[0]->FullName); 
            Session::put('Position',         $userDetails[0]->PositionName);
            Session::put('PositionLevel_ID', $userDetails[0]->PositionLevel_ID);
            Session::put('DivisionCode',     $userDetails[0]->DivisionCode);
            Session::put('Division_ID',      $userDetails[0]->Division_ID); 
            Session::put('Department_ID',    $userDetails[0]->Department_ID);
            Session::put('DepartmentCode',   $userDetails[0]->DepartmentCode);
            Session::put('Department',       $userDetails[0]->Department); 
            Session::put('Email',            $userDetails[0]->Email); 
            Session::save(); 
            
            return Redirect::to('/home');  
    
       } 
    }
 
    public function logout()
    {
        Session::flush();  
        return  redirect(env('MYHUB_URL').'/?/logout');
    }
}


/* End of file AuthController.php 
 * Location: app/Http/Controllers/AuthController.php 
 * Author: Melvin A. De Asis
 * Created Date: Oct 20, 2021
 * Last Update: 
 * Project Name : MyHelp 
 */