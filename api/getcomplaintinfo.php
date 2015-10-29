<?php


include '../skglfunction/db_connector.php';

$complaint_id = htmlspecialchars($_POST['complaint_id']);


$a = array();
$b = array();


$sql = "select * from tbl_complaint where cpl_id = '$complaint_id'";

$result = mysql_query($sql);


if(mysql_num_rows($result) > 0)
{


 $row = mysql_fetch_array($result);	

 $b["cpl_title"] = $row['cpl_title'];
 $b["cpl_desc"] = htmlspecialchars($row['cpl_desc']);


 array_push($a, $b);

}


echo json_encode($a);


?>