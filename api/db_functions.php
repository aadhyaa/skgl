<?php

class db_functions{


 function __construct() {
	 
	 require_once '../skglfunction/db_connector.php';
 }

 public function isUserExisted($user) 
 {
	 
	$sql = "select count(*) as cnt from tbl_register where username = '$user'";

    $result = mysql_query($sql);

    $rowcnt = mysql_fetch_row($result);

    if($rowcnt[0] > 0)
    {
	
	  return true;
    
	}
   else
   {
	
	 return false;
   }
   
   
 }
 
 public function CheckLogin($user,$password) 
 {

   $sql = "select count(*) as cnt from tbl_register where username = '$user' and password = '$password'";

   $result = mysql_query($sql);

   $rowcnt = mysql_fetch_row($result);

   if($rowcnt[0] > 0)
   {
 
     return true;
	 
   }
   else
   {
	  
     return false;	  
	   
   }

}
}
?>