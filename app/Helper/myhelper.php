<?php  
use Illuminate\Support\Facades\Session;
class Myhelper
{ 

  public static function timeAgo($time_ago)
  {
      $time_ago = strtotime($time_ago);
      $cur_time   = time();
      $time_elapsed   = $cur_time - $time_ago;
      $seconds    = $time_elapsed ;
      $minutes    = round($time_elapsed / 60 );
      $hours      = round($time_elapsed / 3600);
      $days       = round($time_elapsed / 86400 );
      $weeks      = round($time_elapsed / 604800);
      $months     = round($time_elapsed / 2600640 );
      $years      = round($time_elapsed / 31207680 );
      // Seconds
      if($seconds <= 60){
          return "just now";
      }
      //Minutes
      else if($minutes <=60){
          if($minutes==1){
              return "one minute ago";
          }
          else{
              return "$minutes minutes ago";
          }
      }
      //Hours
      else if($hours <=24){
          if($hours==1){
              return "an hour ago";
          }else{
              return "$hours hrs ago";
          }
      }
      //Days
      else if($days <= 7){
          if($days==1){
              return "yesterday";
          }else{
              return "$days days ago";
          }
      }
      //Weeks
      else if($weeks <= 4.3){
          if($weeks==1){
              return "a week ago";
          }else{
              return "$weeks weeks ago";
          }
      }
      //Months
      else if($months <=12){
          if($months==1){
              return "a month ago";
          }else{
              return "$months months ago";
          }
      }
      //Years
      else{
          if($years==1)
          {
              return "one year ago";
          }else{
              return "$years years ago";
          }
      }
  }
    public static function generateQM($data)
    {
      $totalParams = count($data);
      if($totalParams == 0):
        return ''; 
      else:
        $param = '';
          foreach($data as $d):
            $param.='?,';
          endforeach;
        return substr($param, 0, -1);
      endif;
    }
    public static function encrypt($data)
    { 
      $hashKey = 'atp_dev';   
      
      $METHOD = 'aes-256-cbc'; 
      $IV = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0); 
      $key = substr(hash('sha256', $hashKey, true), 0, 32); 
      $encrypt= base64_encode(openssl_encrypt($data,$METHOD,$key, OPENSSL_RAW_DATA, $IV)); 
      
      return $encrypt; 
    } 
      
    public static function decrypt($data)
    { 
      $hashKey = 'atp_dev';
          
      $METHOD = 'aes-256-cbc'; 
      $IV = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0); 
      $key = substr(hash('sha256', $hashKey, true), 0, 32);  
      $decrypted = openssl_decrypt(base64_decode($data),$METHOD, $key, OPENSSL_RAW_DATA, $IV); 
      
      return $decrypted;
    }

    public static function createJsonDataTable($data)
    {
        $draw         = $data['draw'];
        $start        = $data['start'];
        $length       = $data['length']; 
        $records      = $data['records'];
        $pageSize     = ($length != null ? $length :0);
        $skip         = ($start != null ? $start : 0);   
        $recordsTotal = count($records);   
        $data = array_slice($records,$skip,$pageSize);
        return '{"draw":"'.$draw.'","recordsFiltered":'.$recordsTotal.',"recordsTotal":'.$recordsTotal.',"data":'.json_encode($data).'}';  
    }

    public static function passwordEncrypt($username,$password)
    { 
        $method = 'aes-256-cbc'; 
        // Must be exact 32 chars (256 bit)
        $hashed = substr(hash('sha256', $password, true), 0, 32); 
        // IV must be exact 16 chars (128 bit)
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) .
              chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) .
              chr(0x0) .chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) .
              chr(0x0);  
        // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
        $password = base64_encode(openssl_encrypt($username, $method, $hashed, OPENSSL_RAW_DATA, $iv));
    
        return $password;
    }
 
    public static function checkUserAccess($arrayActionID)
    {     
       if(!Session::has('UserAccess')):
        return false;
        echo "no user access";
       endif;

       $userAccessArray = Session::get('UserAccess'); 
        foreach($userAccessArray['UserAccess'] as $access): 
          if($access['Action_ID']  ==  $actionIDs && 
              $access['Module_ID'] == $userAccessArray['moduleID']):  
            return true;
          endif; 
        endforeach; 
      return false;
    }

    public static function decryptMyHub($encrypted){ 
        $password = 'atp_dev';
            
        $method = 'aes-256-cbc';
        // Must be exact 32 chars (256 bit)
        $$password = substr(hash('sha256', $password, true), 0, 32); 
        // IV must be exact 16 chars (128 bit)
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) .
              chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) .
              chr(0x0) .chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) .
              chr(0x0);  
            
        // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
        $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $password, OPENSSL_RAW_DATA, $iv);
        
        return $decrypted;
      }  
}

 
