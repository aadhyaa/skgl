<?php


include '../skglfunction/db_connector.php';

$user_name = htmlspecialchars($_POST['user_name']);


$a = array();
$b = array();

$sql = "select * from tbl_order where username = '$user_name'";

$result = mysql_query($sql);


if(mysql_num_rows($result) > 0)
{


 while($row = mysql_fetch_array($result))
 {
 $b["prod_name"] = $row['prod_name'];
 $b["model_no"] = $row['model_no'];
 $b["category"] = $row['category'];
 $b["qty"] = $row['qty'];
 $b["tot_amount"] = $row['tot_amount'];

 array_push($a, $b);

}

}

echo json_encode($a);


?>