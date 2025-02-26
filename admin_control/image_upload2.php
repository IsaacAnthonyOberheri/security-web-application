<?php
//this file fetches the image name from the database table, table column
require '../db_dbase/dbConfig.php';
//$identifier = $_POST['identifier'];
$id = $_POST['id'];
$table_name = $_POST['table_name'];
$product = str_replace('_', ' ', $_POST['product']);

		$select = "SELECT * FROM $table_name WHERE id = '$id' ";
		$queried = mysqli_query($con, $select);
		
		$fetch_value = mysqli_fetch_assoc($queried);
		
			$new_array['list'] = [

				'passport_name' => $fetch_value['image']


				    
			];



			$json_encoded_value = json_encode($new_array);
	
		echo $json_encoded_value;


?>