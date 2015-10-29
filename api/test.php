<?php


require_once 'db_functions.php';
$db = new db_functions();

if ($db->isUserExisted("sahan")) {
	
	$response["error"] = TRUE;
 $response["error_msg"] = "User already existed with " . $username;
 echo json_encode($response);
 
}
else
{
	
	  $response["error"] = FALSE;
echo json_encode($response);
}

?>