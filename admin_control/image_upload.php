<?php
//this file updates the file and the database
require '../db_dbase/dbConfig.php';

$id = $_POST['id'];
$table_name = $_POST['table_name'];
$product = str_replace('_', ' ', $_POST['product']);

//$identifier = $_POST['identifier'];


$filesize=$_FILES["image_x"]['size'];
$filename = $_FILES["image_x"]["name"];
$tmpname = $_FILES["image_x"]["tmp_name"];



		$target_dir= "../store/products/";
		$target_file = $target_dir.basename($filename);
		
		$filetype=pathinfo($target_file,PATHINFO_EXTENSION);
	if ($filesize > 4000000){
		$eupload = "your file is too large";
        echo $eupload;
	}

	// elseif ($filetype != 'jpg' && $filetype != 'jpeg' && $filetype != 'PNG' && $filetype != 'png' && $filetype != 'gif'  && $filetype != 'jfif' && $filetype != 'JPG'){
	//    $eupload = "file type not accepted";
		
	// }

   if (move_uploaded_file($tmpname, $target_file)){
			$eupload = "update sucessful";
		$upload = "UPDATE $table_name SET image = '$filename' WHERE id = '$id' ";
		mysqli_query($con, $upload);
			
			
			
		}









?>