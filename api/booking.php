<?php


include '../skglfunction/db_connector.php';

$prod_id = htmlspecialchars($_POST['product_id']);

$prod_name = htmlspecialchars($_POST['prod_name']);

$prod_desc = htmlspecialchars($_POST['prod_desc']);

$category = htmlspecialchars($_POST['category']);

$model_no = htmlspecialchars($_POST['model_no']);

$qty = htmlspecialchars($_POST['qty']);

$prod_price = htmlspecialchars($_POST['prod_price']);

$username = htmlspecialchars($_POST['username']);

$response = array("success" => FALSE);

$sql = "insert into tbl_order(prod_id,prod_name,prod_desc,category,model_no,qty,prod_price,username,tot_amount) values('$prod_id','$prod_name','$prod_desc','$category','$model_no','$qty','$prod_price','$username',".$prod_price."*".$qty.")";


$result = @mysql_query($sql);

if($result)
{
	
  $response["success"] = TRUE;
  $response["success_msg"] = "Your Order Success!!";
  echo json_encode($response);
    
}
 else {
    
	$response["success"] = FALSE;
    $response["success_msg"] = "Your Order Failed!!";
	
    echo json_encode($response);

    
 }



?>