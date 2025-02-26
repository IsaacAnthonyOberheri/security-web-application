<?php
require 'db_dbase/dbConfig.php';


$email = trim($_POST['email']);

$insert = "INSERT INTO email_subscribers(id, email)"."VALUES('', '$email')";

$insert_check = mysqli_query($con, $insert);

if($insert_check){
    echo 'sent';
}






?>