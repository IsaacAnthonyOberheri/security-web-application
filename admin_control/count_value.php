<?php

session_start();
require '../db_dbase/dbConfig.php';



$select = "SELECT * FROM access_management ";
$queried = mysqli_query($con, $select);

$access_count = mysqli_num_rows($queried);




$select_1 = "SELECT * FROM data_protection ";
$queried_1 = mysqli_query($con, $select_1);

$data_count = mysqli_num_rows($queried_1);





$select_2 = "SELECT * FROM endpoint_security  ";
$queried_2 = mysqli_query($con, $select_2);

$endpoint_count = mysqli_num_rows($queried_2);





$select_3 = "SELECT * FROM network_security ";
$queried_3 = mysqli_query($con, $select_3);

$network_count = mysqli_num_rows($queried_3);

$total_numbers = $access_count + $data_count + $endpoint_count + $network_count;


$new_array['list'] = [
    'access_management' => (int) $access_count,
    'data_protection' => (int) $data_count,
    'endpoint_security' => (int) $endpoint_count,
    'network_security'=> (int) $network_count,
    'total_numbers' => $total_numbers
];

  $json_encoded_value = json_encode($new_array);

    echo $json_encoded_value;

















    // $new_array['list'] = [
    //     'id' => $fetch_value['id'],
    //     'full_names' => $fetch_value['full_names'],
    //     'sex' => $fetch_value['sex'],
    //     'religion' => $fetch_value['religion'],
    //     'date_of_birth' => $fetch_value['date_of_birth'],
    //     'place_of_birth' => $fetch_value['place_of_birth'],
    //     'l_g_a' => $fetch_value['l_g_a'],
    //     'state_of_origin' => $fetch_value['state_of_origin'],
    //     'recent_schools_attended' => $fetch_value['recent_schools_attended'],
    
    
    //     'current_class' => $fetch_value['current_class'],
    //     'class_arm' => $fetch_value['class_arm'],
    //     'passport_name' => $fetch_value['passport_name'],
    //     'health_challenges' => $fetch_value['health_challenges'],
    //     'mothers_name' => $fetch_value['mothers_name'],
    //     'residential_address' => $fetch_value['residential_address'],
    
    //     'phone_number' => $fetch_value['phone_number'],
    //     'guardians_name' => $fetch_value['guardians_name'],
    //     'guardians_address' => $fetch_value['guardians_address'],
    //     'guardians_phone_number' => $fetch_value['guardians_phone_number']
    
    
    
        
        
    
    // ];



        // $json_encoded_value = json_encode($new_array);

    // echo $json_encoded_value;


?>