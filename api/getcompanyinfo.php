<?php

include '../skglfunction/db_connector.php';

$a = array();
$b = array();

$sql = "select * from tbl_companyinfo";

$result = mysql_query($sql) or die(mysql_error());

if(mysql_num_rows($result) > 0)
{
	
  $row = mysql_fetch_array($result);	
	
  $b["company_name"] = $row['company_name'];
  $b["sub_name"] = $row['sub_name'];
  $b["tag_line"] = htmlspecialchars($row['tag_line']);
  $b["company_desc"] = htmlspecialchars($row['company_desc']);
  $b["photo"] = $row['photo'];
  $b["video_url"] = $row['video_url'];
  $b["company_add1"] = $row['company_add1'];
  $b["company_add2"] = $row['company_add2'];
  $b["company_add3"] = $row['company_add3'];
  $b["company_add4"] = $row['company_add4'];
  $b["telephone_no"] = $row['telephone_no'];
  $b["company_url"] = $row['company_url'];
  $b["company_email_id"] = $row['company_email_id']; 
  
  array_push($a, $b);
	
}

echo json_encode($a);

?>