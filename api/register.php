<?php

//include '../skglfunction/db_connector.php';

require_once 'db_functions.php';

require_once 'config.php';

$db = new db_functions();

$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);
$mobile_no = htmlspecialchars($_POST['mobileno']);

$password = hash('sha256', USER_SALT . hash('sha256', $pass) );

$response = array("error" => FALSE);

if($db->isUserExisted($username)) 
{
  
 $response["error"] = TRUE;
 $response["error_msg"] = "User already existed with " . $username;
 echo json_encode($response);
 
}
else
{

$sql = "insert into tbl_register(fname,username,password,mobileno) values('$name','$username','$password','$mobile_no')";

$result = @mysql_query($sql);

$response["error"] = FALSE;

echo json_encode($response);


}


?>