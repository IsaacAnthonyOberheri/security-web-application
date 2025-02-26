<?php

session_start();
require '../db_dbase/dbConfig.php';


//$search_input =trim('caix_4re22ixs');


 $category = strtolower(str_replace(' ', '_', trim($_POST['category']) ));



//  $search_input = 'micheal';

$select = "SELECT * FROM $category  ";
$queried = mysqli_query($con, $select);

if(mysqli_num_rows($queried) > 0) {

    while($fetch_value = mysqli_fetch_assoc($queried)){
        $product_name = str_replace(' ', '_', $fetch_value['security_items']);

        echo "



        <div class=class_item id=$product_name''$fetch_value[id] onclick=fetched_cla()>

            <div class=full_names_text>$fetch_value[security_items]</div>
            <div class=sex_text><textarea> $fetch_value[description] </textarea> </div>
            <div class=age_text>$fetch_value[ratings]</div>
            <div class=registered_date_text>$fetch_value[price]</div>
        

        </div>
        
        
        
        
        
        ";
        
        
        
        
        }
        

}

else{
    echo "<div class=error_record >No record found </div>";
}




?>