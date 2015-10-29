<?php

include '../skglfunction/db_connector.php';

$a = array();
$b = array();


$sql = "select * from tbl_gallery order by gallery_id";

$result = mysql_query($sql) or die(mysql_error());

if(mysql_num_rows($result) > 0)
{
	
	 while($row = mysql_fetch_array($result))	
	 {
	 $b["gallery_id"] = $row['gallery_id'];
	 $b["title"] = $row['title'];
	 $b["photo"] = $row['photo'];
	 
	 array_push($a, $b);
	 
	 }
}

echo json_encode($a);

?>