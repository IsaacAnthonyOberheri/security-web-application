<?php

session_start();
require '../db_dbase/dbConfig.php';


//$search_input =trim('caix_4re22ixs');


 $search_input = trim($_POST['searched']);

//  $search_input = 'micheal';

$select = "SELECT * FROM access_management  WHERE security_items LIKE '%$search_input%' ";
$queried = mysqli_query($con, $select);

if(mysqli_num_rows($queried) > 0) {

    
    while($fetch_value = mysqli_fetch_assoc($queried)){
        $product_name = str_replace(' ', '_', $fetch_value['security_items']);
        echo "<div id= $product_name''$fetch_value[id] class=f_names > $fetch_value[security_items]  </div>";
        
        
        
        
        }
        

}


$select_1 = "SELECT * FROM data_protection  WHERE security_items LIKE '%$search_input%' ";
$queried_1 = mysqli_query($con, $select_1);

if(mysqli_num_rows($queried_1) > 0) {

    while($fetch_value_1 = mysqli_fetch_assoc($queried_1)){
        $product_name = str_replace(' ', '_', $fetch_value_1['security_items']);
        echo "<div id= $product_name''$fetch_value_1[id] class=f_names > $fetch_value_1[security_items]  </div>";
        
        
        
        
        }
        

}




$select_2 = "SELECT * FROM endpoint_security  WHERE security_items LIKE '%$search_input%' ";
$queried_2 = mysqli_query($con, $select_2);

if(mysqli_num_rows($queried_2) > 0) {

    while($fetch_value_2 = mysqli_fetch_assoc($queried_2)){

        $product_name = str_replace(' ', '_', $fetch_value_2['security_items']);
        echo "<div id= $product_name''$fetch_value_2[id] class=f_names > $fetch_value_2[security_items]  </div>";
        
        
        
        
        }
        

}




$select_3 = "SELECT * FROM network_security  WHERE security_items LIKE '%$search_input%' ";
$queried_3 = mysqli_query($con, $select_3);

if(mysqli_num_rows($queried_3) > 0) {

    while($fetch_value_3 = mysqli_fetch_assoc($queried_3)){

        $product_name = str_replace(' ', '_', $fetch_value_3['security_items']);
        echo "<div id= $product_name''$fetch_value_3[id] class=f_names> $fetch_value_3[security_items]  </div>";
        
        
        
        
        }
        

}






else{
    echo "";
}














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