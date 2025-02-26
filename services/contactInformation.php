<?php
require '../db_dbase/dbConfig.php';


$names = trim($_POST['names']);

$email = trim($_POST['email']);

$message = trim($_POST['message']);

$insert = "INSERT INTO request(id, names, email, messages)"."VALUES('', '$names', '$email', '$message')";

$insert_check = mysqli_query($con, $insert);

if($insert_check){



    $subject ="Vistor's Request";
    $message_body ="<b>Name</b>  ". $names . " <br> \r\n  <b>Email</b>  " . $email ."<br> \r\n <b>Message</b> " .$message; 
    

 

    $mailto = 'support@securetechsolutions.org, admin@webmansion.net';  //the email which u want to recv this email




	$headers = "From: support@securetechsolutions.org\r\n";  //cpanel email
	$headers .= "Reply-To: support@securetechsolutions.org\r\n";
	$headers .= "MIME-version:1.0\r\n";
	$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
   
	



    //SEND Mail
    if (mail($mailto, $subject, $message_body, $headers)) {
    echo 'sent';

    }
}






?>