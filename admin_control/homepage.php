<?php
session_start();
?>
<?php
require 'dbConfig.php';
?>



 <?php

 if ($_SESSION['email'] && $_SESSION['password'] ){

 }

 else{

 	header("location:login.php");
 }

 ?>



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="homepage.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    </head>

    <body onclick='clear_s()'>

        <section class="first_page">

            <!--BEGINNING OF Header SECTION-->

                <div class="header_container">
                    
                    <div class="logo">

                        <img src="img/securetech_logo.png">

                    </div>

                    <div class="name_of_school">

                        SECURE TECH SOLUTIONS
                        
                    </div>

                    <div class="menu" onclick='logout()'>

                        Log out
                        
                    </div>

                    <div class='mobile_menu_btn' onClick='menu_click()'>
                        <img src='img/menu_button.svg' />
                    </div>


                </div>
            
             <!--END OF Header SECTION-->





            <!--BEGINNING OF Body SECTION-->

                <div class="body_container">

                    <div class="b_contained">

                        <div class="b_left_bar">
                            <div class="home_dashboard" onclick="home()">

                                Home

                            </div>

                            <div class="student_record" onclick="student_record()">

                                Product Record
                                
                            </div>


                            <div class="create_new" onClick='create_new_record()'>

                                Create New Product Record
                                
                            </div>


                        </div>






                        <div class="b_right_bar">



                            <div class="total_student">

                                A Total of <span id='total_products'> x </span>Security Products
                            </div>

                            
                            <div class="student_classes">



                                <div class="main_record">


                                    <div class="class_arms" >
                                        Access Management

                                    </div>

                                    <div class="male_number" id='total_access_management'>
                                        2
                                    </div>



                                </div>

                                <div class="main_record">


                                    <div class="class_arms"  >
                                        Data Protection
                                    </div>

                                    <div class="male_number" id= 'total_data_protection'>
                                        2
                                    </div>

                                


                                </div>



                                <div class="main_record">


                                    <div class="class_arms" >
                                        Endpoint Security
                                    </div>

                                    <div class="male_number" id='total_endpoint_security'>
                                        2
                                    </div>

                                


                                </div>




                                <div class="main_record">


                                    <div class="class_arms"  >
                                        Network Security
                                    </div>

                                    <div class="male_number" id='total_network_security'>
                                        2
                                    </div>

                                


                                </div>

                            </div>


                        <!---End of page 1 i.e home page -->
























                            
                            <section class="second_page">

                                <div class="search_section">

                                    <div class="instruction_all">

                                        <div class="instruction">Instructions</div>
                                        <div class="instruct"><li>Use the search button to get a particular product data</li></div>
                                        <div class="instruct"><li>Use the select button to get an entire product category </li> </div>
        

                                    </div>

                                    <div class="filter_buttons">




                                        <div class="use_filters">Use</div>

                                        <div class="search_btn">
                                            <button type="button" class="clk" onclick="search_va()">Search</button>
                                        
                                        </div>

                                        <div class="search_value_section">
                                            <div class="search_boxx">
                                                <input type="text" oninput = 'live_search()'  onchange = 'input_out()' class="search_input" placeholder="Enter Student Names">

                                            
                                            </div>

                                            <div class='result'>  </div>

                        
                                        </div>

                            

                                        <div class="user_or">or</div>

                                        <div class="se_btn">
                                            <button type="button" class="clk" onclick="select_va()">Select</button>
                                        </div>


                                        <div class="search_reset">
                                                
                                            <button type="button" class="search_bx" onclick="reset()">Reset</button>
                                            
                                        </div>

                                        <div class="class_class">
                                            
                                            <select class="select_cc" id='selected_class'>

                                                <option class="class_set" >Category</option>
                                                <option class="class_set">Data Protection</option>
                                                <option class="class_set">Endpoint Security</option>
                                                <option class="class_set">Network Security</option>
                                                <option class="class_set">Access Management</option>
                                              
                                            </select>

                                        </div>


                                  

                                        <div class="fetch_class">
                                            <button type="button" class="fetc" onclick='fetch_class()'>Fetch Class</button>
                                        </div>

                                        <div class="class_arm"></div>




                                    </div>
                                
                                </div>




                                <div class="search_data_section" >
                                    

                                    <div class="search_data1">

                                        <div class="stud_head">Product Data</div><br>

                                        <div class="passport_region">

                                            <div id="passport_picture" >

                                                <!-- <img src='passport/passport_second.jpeg' /> -->
                                                target for update
                                            </div>
                                            <div class='update_passport()'>

                                            

                                                    <?php
                                                    // if(isset($_POST['update_image']) ){
                                                    // require 'image_upload.php';
                                                    // }


                                                    ?>



                                                    <!-- <form method="POST" enctype="multipart/form-data"> -->


                                                        <div id='image_pic_file' > 
                                                        
                                                                <input type="file" name='image_file'  id='image_file' >

                                                        </div>

                                
                                                        <div> 
                                                        
                                                            <input type="submit" name='update_image' id='update_passport' onclick = 'update_passport()' value="Update Passport"> 
                                                        
                                                        </div>





                                                        <div class="named_text">
                                                        <input type='number' name='identifier'  disabled='disabled' id='identifier' class='input_data'>

                                                        </div>



                                                    <!-- </form> -->
                                            </div>

                                        </div>

                   
                                        <div class="v_record">
                                            <div class="named_value">Id</div>
                                            <div class="named_text" ><span id='id' class='input_data'> </span> </div>
                                            <div class="named_btn"></div>
                                        </div>

                                        <div class="v_record">
                                            <div class="named_value">Security Items</div>
                                            <div class="named_text"><input type='text' id='product' class='input_data'></div>
                                            <div class="named_btn" id='update_product' onclick='update_all()' >Update</div>
                                        </div>


              
                                        <div class="v_record">
                                            <div class="named_value">Description</div>
                                            <div class="named_text"><input type='text' id='description' class='input_data'></div>
                                            <div class="named_btn" id='update_description' onclick='update_all()'>Update</div>
                                        </div>


                                        
                                       
                                        <div class="v_record">

                                                <div class="named_value">Ratings</div>
                                                <div class="named_text">
                                                    
                                                <!-- <input type='text' id='current_class_create' name='current_class_create' class='input_data'> -->



                                                <select id='ratings' name='current_class_create' class='input_data'>

                                                        <option>Ratings</option>
                                                        <option>1</option>
                                                        <option>1.5</option>
                                                        <option>2</option>
                                                        <option>2.5</option>
                                                        <option>3</option>
                                                        <option>3.5</option>
                                                        <option>4</option>
                                                        <option>4.5</option>
                                                        <option>5</option>
                                                       
                                                     
                                        

                                                </select>
                                            
                                            
                                                </div>
                                                <div class="named_btn" id='update_ratings' onclick='update_all()'> Update </div>
                                                
                                        </div>


                                        <div class="v_record">
                                            <div class="named_value">Price</div>
                                            <div class="named_text"><input type='text' id='price' class='input_data'></div>
                                            <div class="named_btn" id='update_price' onclick='update_all()'>Update</div>
                                        </div>



                   



                                        <div class="v_record">
                                            <div class="named_value">Category</div>
                                            <div class="named_text">
                                            

                                                    <select id='category' name='class_arm' class='input_data' disabled>
                                                            <option>Category</option>
                                                            <option>access_management</option>
                                                            <option>data_protection</option>
                                                            <option>endpoint_security</option>
                                                            <option>network_security</option>
                                                

                                                    </select>
                                            
                                            
                                            </div>
                                            <div class="named_btn" onclick='update_class_arm()' >Update</div>
                                        </div>







                                        
                                    



                                        <div class="v_record">
                                        
                                        </div>


                                        <div class="v_record">
                                        
                                        </div>



                                        
                            


                                        
                                

                                    </div>








                                    <div class="search_data2">

                                        <div class="class_box">
                                            <div class="class_text" id='selected_values'> </div>
                                        </div>

                                        <div class="class_details">

                                            <div class="class_item_header">
                                                <div class="full_names"> Product </div>
                                                <div class="sex">Description</div>
                                                <div class="age">Ratings</div>
                                                <div class="date_registered">Price </div>
                                            </div>

                                            <div class='class_result'>




                                            </div>




                                         



                                            
                                        











                                        </div>
                                        
                                    </div>

                                </div>

                                
                            </section>








                            <section class="third_page">



                                <div class='third_page_bound'>


                                <div class="stud_head">Create New Product Record</div><br>

                                                            
                                    <div class="passport_region">

                                            <div id="passport_picture" >

                                                <!-- <img src='passport/passport_second.jpeg' /> -->

                                            </div><br>
                                            <div class='update_passport()'>
                                                
                                                    <div> <input type="file" name="image_file_1"  id='image_file_1' > </div>


                                            </div>

                                    </div>






        

                                        <div class="v_record">

                                                <div class="named_value">Category</div>
                                                <div class="named_text">
                                                    
                                                <!-- <input type='text' id='current_class_create' name='current_class_create' class='input_data'> -->



                                                <select id='category_create' name='current_class_create' class='input_data'>

                                                        <option>Category</option>
                                                        <option>Access Management</option>
                                                        <option>Data Protection</option>
                                                        <option>Endpoint Security</option>
                                                        <option>Network Security</option>
                                        

                                                </select>
                                            
                                            
                                                </div>
                                                <div class="named_btn" onclick='update_current_class()'> </div>
                                                
                                        </div>

                        



                                        <div class="v_record">
                                            <div class="named_value">Product</div>
                                            <div class="named_text"><input type='text' id='product_create' name='l_g_a_create' class='input_data'></div>
                                            <div class="named_btn" onclick='update_lga()' > </div>
                                        </div>




                                        <div class="v_record">
                                            <div class="named_value">Description</div>
                                            <div class="named_text"><input type='text' id='description_create' name='s_o_o_create' class='input_data'></div>
                                            <div class="named_btn" onclick='update_soo()'> </div>
                                        </div>




                                        <div class="v_record">

                                                <div class="named_value">Ratings</div>
                                                <div class="named_text">
                                                    
                                                <!-- <input type='text' id='current_class_create' name='current_class_create' class='input_data'> -->



                                                <select id='ratings_create' name='current_class_create' class='input_data'>

                                                        <option>Ratings</option>
                                                        <option>1</option>
                                                        <option>1.5</option>
                                                        <option>2</option>
                                                        <option>2.5</option>
                                                        <option>3</option>
                                                        <option>3.5</option>
                                                        <option>4</option>
                                                        <option>4.5</option>
                                                        <option>5</option>
                                                       
                                                     
                                        

                                                </select>
                                            
                                            
                                                </div>
                                                <div class="named_btn" onclick='update_current_class()'> </div>
                                                
                                        </div>





                                        <div class="v_record">
                                            <div class="named_value">Price</div>
                                            <div class="named_text"><input type='text' id='price_create' name='health_challenges' class='input_data'></div>
                                            <div class="named_btn" onclick='update_health_challenges()'> </div>
                                        </div>




                                        
                                        <div class="v_record">
                                            <div class='create_btn' onclick='upload_new_record()'>

                                            Create Product Record

                                            </div>
                                        
                                        </div>






                                        <div class="v_record">
                                        
                                        </div>


                                        <div class="v_record">
                                        
                                        </div>


                                
                                

                                </div>                     
                                
                            </section>


                        </div>



                    </div>

                    
                </div>

            
            <!--END OF Body SECTION-->




            

            
            <!--BEGINNING OF Footer SECTION-->

            <div class="footer_container">

            </div>


            
            <!--END OF Footer SECTION-->


        </section>















        <script src="operation.js"></script>




    </body>
</html>