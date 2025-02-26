<?php
$password =trim(mysqli_escape_string($con, $_POST['userlockid']));
$userid=trim(mysqli_escape_string($con, $_POST["userid"]));
//request uniqueid from db if it exist?
$result = mysqli_query($con, "SELECT * FROM admin_loggs WHERE admin_user = '$userid'" );
while(	$user= mysqli_fetch_assoc($result)){

			$_SESSION['email'] = $user['admin_user'];
			$_SESSION['password'] = $user['admin_password']== $password;
			

}







if($result->num_rows < 1){



	$_SESSION['errormessage']= "Either your email address or Login password is not correct";
}


if ($password != $_SESSION['password']){

	$_SESSION['errormessage']= "Either your email address or Login password is not correct";

}


else{

	if ($_SESSION['email'] && $_SESSION['password']   )
	{
	header ("location:homepage.php");
	}




}



?>
