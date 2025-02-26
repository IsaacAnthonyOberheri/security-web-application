<?php
require '../db_dbase/dbConfig.php';


$registration_date = date("Y-m-d");

$table_name = strtolower(str_replace(' ', '_', $_POST['table_name']));
$product = $_POST['product'];
$description = $_POST['description'];
$ratings = $_POST['ratings']; 
$price = $_POST['price'];   



$response = [
	'reply' => 'created',
];


$error = [
'reply' => 'error',
];

$filesize=$_FILES["file"]['size'];
$filename = $_FILES["file"]["name"];
$tmpname = $_FILES["file"]["tmp_name"];

		$target_dir= "../store/products/";
		$target_file = $target_dir.basename($filename);
		
		$filetype=pathinfo($target_file,PATHINFO_EXTENSION);
	if ($filesize > 40000000){
		$eupload = "your file is too large";
        echo $eupload;
	}

	// elseif ($filetype != 'jpg' && $filetype != 'jpeg' && $filetype != 'PNG' && $filetype != 'png' && $filetype != 'gif'  && $filetype != 'jfif' && $filetype != 'JPG'){
	//    $eupload = "file type not accepted";
		
	// }

	if (move_uploaded_file($tmpname, $target_file)){
			$eupload = "update sucessful";

		$upload = "INSERT INTO $table_name (id, security_items, image, description, ratings, price)"
        ."VALUES('', '$product', '$filename', '$description', '$ratings', '$price' )";


		mysqli_query($con, $upload);

        echo json_encode($response);
     


    }

	else{
		echo json_encode($error);
	}

 



















?>


