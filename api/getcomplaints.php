<?php


include '../skglfunction/db_connector.php';


$a = array();
$b = array();

$sql = "select * from tbl_complaint order by cpl_id";

$result = mysql_query($sql) or die(mysql_error());

if(mysql_num_rows($result) > 0)
{
	
	 while($row = mysql_fetch_array($result))	
	 {
	 $b["cpl_id"] = $row['cpl_id'];
	 $b["cpl_no"] = $row['cpl_no'];
	 $b["username"] = $row['username'];
	 $b["cpl_person"] = $row['cpl_person'];
	 $b["mobileno"] = $row['mobileno'];
	 $b["cpl_title"] = $row['cpl_title'];
	 $b["cpl_desc"] = htmlspecialchars($row['cpl_desc']);
	 $b["cpl_date"] = $row['cpl_date'];
	 $b["location"] = $row['location'];
	 $b["machine"] = $row['machno_or_name'];
	 
	 array_push($a, $b);
	 
	 }
}

echo json_encode($a);

?>