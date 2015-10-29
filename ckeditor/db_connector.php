<?php
$conn = mysql_connect('localhost', 'hous7ful_user', 'house321#');
mysql_select_db('hous7ful_dab', $conn);
if($conn)
{
	//echo 'Connect';
}
else
{
	//echo 'Disconnect';
}
?>