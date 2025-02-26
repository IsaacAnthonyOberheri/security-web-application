<?php

session_start();
require '../db_dbase/dbConfig.php';


//$search_input =trim('caix_4re22ixs');


 $gotten_value_first = trim($_POST['searched']);
 $gotten_value = str_replace("''", ' ',  $gotten_value_first);

 $string_array = explode(' ', $gotten_value);

 $search_input = str_replace('_', ' ', $string_array[0]);

 $id = $string_array[1];

 //echo $search_input;
 //echo  $id


 $select = "SELECT * FROM access_management WHERE security_items = '$search_input' && id = '$id' ";
$queried = mysqli_query($con, $select);


if(mysqli_num_rows($queried) > 0) {
$fetch_value = mysqli_fetch_assoc($queried);


    //echo  $fetch_value['security_items'];



    $new_array['list'] = [
        'id' => $fetch_value['id'],
        'security_items' => $fetch_value['security_items'],
        'image' => $fetch_value['image'],
        'description' => $fetch_value['description'],
        'ratings' => $fetch_value['ratings'],
        'price' => $fetch_value['price'],
        'category'=> 'access_management'
      
    
    ];


  

}


$select1 = "SELECT * FROM data_protection WHERE security_items = '$search_input' && id = '$id' ";
$queried1 = mysqli_query($con, $select1);


if(mysqli_num_rows($queried1) > 0) {
$fetch_value1 = mysqli_fetch_assoc($queried1);


    //echo  $fetch_value['security_items'];



    $new_array['list'] = [
        'id' => $fetch_value1['id'],
        'security_items' => $fetch_value1['security_items'],
        'image' => $fetch_value1['image'],
        'description' => $fetch_value1['description'],
        'ratings' => $fetch_value1['ratings'],
        'price' => $fetch_value1['price'],
        'category'=> 'data_protection'
      
    
    ];


  

}






$select2 = "SELECT * FROM endpoint_security WHERE security_items = '$search_input' && id = '$id' ";
$queried2 = mysqli_query($con, $select2);


if(mysqli_num_rows($queried2) > 0) {
$fetch_value2 = mysqli_fetch_assoc($queried2);


    //echo  $fetch_value['security_items'];



    $new_array['list'] = [
        'id' => $fetch_value2['id'],
        'security_items' => $fetch_value2['security_items'],
        'image' => $fetch_value2['image'],
        'description' => $fetch_value2['description'],
        'ratings' => $fetch_value2['ratings'],
        'price' => $fetch_value2['price'],
        'category'=> 'endpoint_security'
      
    
    ];


  

}





$select3 = "SELECT * FROM network_security WHERE security_items = '$search_input' && id = '$id' ";
$queried3 = mysqli_query($con, $select3);


if(mysqli_num_rows($queried3) > 0) {
$fetch_value3 = mysqli_fetch_assoc($queried3);


    //echo  $fetch_value['security_items'];



    $new_array['list'] = [
        'id' => $fetch_value3['id'],
        'security_items' => $fetch_value3['security_items'],
        'image' => $fetch_value3['image'],
        'description' => $fetch_value3['description'],
        'ratings' => $fetch_value3['ratings'],
        'price' => $fetch_value3['price'],
        'category'=> 'network_security'
      
    
    ];


  

}







$json_encoded_value = json_encode($new_array);

    
echo $json_encoded_value;




?>






