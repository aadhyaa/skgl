<?php

include '../skglfunction/db_connector.php';

$a = array();
$b = array();

$sql = "select distinct category from tbl_product order by prod_id";

$result = mysql_query($sql) or die(mysql_error());

if(mysql_num_rows($result) > 0)
{
	
	 while($row = mysql_fetch_array($result))	
	 {
	 
      $b["category"] = $row['category'];
	 
	   array_push($a, $b);
	 
	 }
}

echo json_encode($a);



?>