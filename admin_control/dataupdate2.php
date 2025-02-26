<?php
session_start();
require '../db_dbase/dbConfig.php';

$table_id_value = trim($_POST['table_id']);

$table_name = trim($_POST['table_name']);

$table_column =  trim($_POST['table_column']);

$updated_table_column_value = trim($_POST['updated_table_column_value']);


//// $update = "UPDATE registered_user SET first_name = '$first_name' && last_name = '$last_name' ";


$update = "UPDATE $table_name SET $table_column = '$updated_table_column_value' WHERE id = '$table_id_value' ";

$update = mysqli_query($con, $update);

if($update){
    echo 'updated';
}

else{
    echo 'something went wrong';
}

//echo $table_id_value;



?>