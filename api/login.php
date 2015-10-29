<?php


require_once 'db_functions.php';

require_once 'config.php';

$db = new db_functions();

$username = htmlspecialchars($_POST['username']);

$pass = htmlspecialchars($_POST['password']);

$response = array("error" => FALSE);

$password = hash('sha256', USER_SALT . hash('sha256', $pass) );

if($db->CheckLogin($username,$password))
{

   $response["error"] = FALSE;
   echo json_encode($response);

}
else
{

	$response["error"] = TRUE;
    $response["error_msg"] = "Login credentials are wrong. Please try again!";
    echo json_encode($response);

}	

?>