<?php


include '../skglfunction/db_connector.php';

$user_name = htmlspecialchars($_POST['user_name']);


$a = array();
$b = array();

$sql = "select * from tbl_complaint where username = '$user_name'";

$result = mysql_query($sql);


if(mysql_num_rows($result) > 0)
{


 while($row = mysql_fetch_array($result))	
 {
 $b["cpl_title"] = $row['cpl_title'];
 
 $b["cpl_date"] = $row['cpl_date'];
 
 $b["machine"] = $row['machno_or_name'];
 
 $b["cpl_person"] = $row['cpl_person'];

 array_push($a, $b);

}
}


echo json_encode($a);


?>