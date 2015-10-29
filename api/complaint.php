<?php

include '../skglfunction/db_connector.php';

$location = htmlspecialchars($_POST['location']);

$category = htmlspecialchars($_POST['category']);

$modelno_or_machine = htmlspecialchars($_POST['modelno_or_machine']);

$complaint = htmlspecialchars($_POST['complaint']);

$complaint_date = htmlspecialchars($_POST['complaint_date']);

$description = htmlspecialchars($_POST['description']);

$username = htmlspecialchars($_POST['username']);

$cpl_person = htmlspecialchars($_POST['cpl_person']);

$mobileno = htmlspecialchars($_POST['mobileno']);

$response = array("success" => FALSE);


/* Complaint Code Generated Here */

$sqlcpl = "select (cpl_no + 1) as cno from tbl_complaintno";

$resultcpl = mysql_query($sqlcpl);


if(mysql_num_rows($resultcpl) > 0)
{


 $rowcpl = mysql_fetch_array($resultcpl);	

 $cp_no = $rowcpl['cno']; 
 
 $cpl_no = "SKGL".$rowcpl['cno']; 
 
 
 
}

/* End Complaint Code Generated Here */


$sql = "insert into tbl_complaint(cpl_no,username,mobileno,cpl_title,cpl_desc,cpl_date,location,machno_or_name,cpl_person) values('$cpl_no','$username','$mobileno','$complaint','$description','$complaint_date','$location','$modelno_or_machine','$cpl_person')";

$result = @mysql_query($sql);

if($result)
{
    
	/* Update Complaint Code Here */
	
	$sqlcplup = "update tbl_complaintno set cpl_no = '$cp_no'";
	
	$resultup = @mysql_query($sqlcplup);
	
	$response["success"] = TRUE;
  
    $response["success_msg"] = "Your Complaint Registration Success!!";
  
    echo json_encode($response);
	
	
	/* End Update Complaint Code Here */
	
}
 else {
    

    $response["success"] = FALSE;
    $response["success_msg"] = "Your Complaint Registration Failed!!";
 }


?>