<?php


include '../skglfunction/db_connector.php';

$product_id = htmlspecialchars($_POST['product_id']);


$a = array();
$b = array();

$sql = "select * from tbl_product where prod_id = '$product_id'";

$result = mysql_query($sql);


if(mysql_num_rows($result) > 0)
{


 $row = mysql_fetch_array($result);	

 $b["prod_name"] = $row['prod_name'];
 $b["category"] = $row['category'];
 $b["model_no"] = $row['model_no'];
 $b["manf_date"] = $row['manf_date'];
 $b["img_url"] = $row['img_url'];
 $b["video_url"] = $row['video_url'];
 $b["prod_desc"] = htmlspecialchars($row['prod_desc']);
 $b["prod_price"] = $row['prod_price'];
 $b["offer_price"] = $row['offer_price'];


 array_push($a, $b);

}



echo json_encode($a);


?>