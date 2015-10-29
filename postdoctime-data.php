<?php

include './wayfunction/db_connector.php';

if($_POST["values"] )
{
    
    $values = $_POST['values'];
   
    $query = "INSERT INTO tbldutytimings(doc_code,doc_name,clinic_name,service,d_Sun,d_Mon,d_Tue,d_Wed,d_Thu,d_Fri,d_Sat) VALUES";
    
     // Loop through the array
    for($i = 0, $c = count($values); $i < $c; $i += 11) {
    // Add the next batch of values to the query string
    $query .= "('{$values[$i]}', '{$values[$i + 1]}', '{$values[$i + 2]}','{$values[$i + 3]}','{$values[$i + 4]}','{$values[$i + 5]}','{$values[$i + 6]}','{$values[$i + 7]}','{$values[$i + 8]}','{$values[$i + 9]}','{$values[$i + 10]}')";

    // Add a comma is this is not the last batch
    if($i + 11 < $c) {
       $query .= ", ";
    }
    }
   
    mysql_query($query); 

    
    }