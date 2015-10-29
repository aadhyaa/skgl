<?php
$conn = mysql_connect('localhost', 'db_skgl', 'db_skgl');
mysql_select_db('db_skgl', $conn);

//$conn = mysql_connect('localhost', 'salampm_delsuser', 'delightshade');
//mysql_select_db('salampm_delightshade', $conn);


if($conn)
{
	//echo 'Connect';
}
else
{
	echo 'Database Error!!';
}
?>