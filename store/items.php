<!DOCTYPE html>

<html>
    
    <head>

        <link rel="stylesheet" href="store.css" />
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
        <meta content="" name="keywords">
        <meta property="og:locale" content="en_US" >
        <meta property="og:title" content="Cybersecurity Products - Secure Tech Solutions" >
        <meta property="og:description" content="Best Cyber Security Products.">
        <link rel="icon" href="images/securetech_logo.png" />
        

    </head>

    <div id = "menu_section_sp">
               <?php
                    require 'header_menu.html';

                ?>
    </div>


    <body  >

        <div onmouseenter = 'hideContent()' class='body_container'>

            <div class="top_dash_board">
                <div class="dash_left_sec">
                    <div class="dtop">Enhanced Security Products</div>
                    <div class="dbott">High Performance</div>
                </div>
                <?php
                    //echo $_GET['cat'];
                ?>
            </div>

            
            <div class="categories_container">


                
            <?php

                require '../db_dbase/dbConfig.php';
                

                //we are coming from shop.php

                $select = "SELECT * FROM $_GET[cat] ";
                //echo $_GET['cat'];
                $query_select = mysqli_query($con, $select);
                $filename = '../.htaccess';

            if(mysqli_num_rows($query_select)> 0){





                while( $user = mysqli_fetch_array($query_select)){

                    $old_word = strtolower($user['security_items']);
                    $new_word = str_replace(' ', '_', $old_word);

                    
                    $read_file = fopen($filename, "r") or die("Unable to open file!");
                    $file_content = fread($read_file, filesize($filename));
                    
                    $htacess_added_string = "RewriteRule ^store/$new_word store/$new_word.php [L,QSA]";
                        
                    if( !str_contains($file_content, $htacess_added_string) ){

                            $write_file = fopen($filename, 'w') or die("Unable to open file!");

                    
                            fwrite($write_file, $file_content."\n".$htacess_added_string );
                            fclose($write_file);

                        }


 
                    $read_product_file = fopen('product_display.php', 'r') or die("unable to open file");
                    $product_file_content = fread($read_product_file, filesize('product_display.php'));

                    $create_new_file = fopen($new_word.'.php', 'w');
                    fwrite($create_new_file, $product_file_content);
                    fclose($create_new_file);

                    //Beginning of Star Ratings

                        $one_star = '<span id=star_guage> <img src=icons/full_star_brown.png /> </span >';
                        $half_star = '<span id=star_guage> <img src=icons/half_star_brown.png /> </span>';

                        $one_half = $one_star.$half_star;

                        $two_star = $one_star.$one_star;
                        $two_half_star = $two_star.$half_star;

                        $three_star = $two_star.$one_star;
                        $three_half_star = $three_star.$half_star;

                        $four_star = $three_star.$one_star;
                        $four_half_star = $four_star.$half_star;

                        $five_star = $four_star.$one_star;
                        $five_half_star = $five_star.$half_star;

                        //this comes from database as a value (1 to 5)
                        $ratings = $user['ratings'];

                        $ratings_array = [
                            
                            '1' => $one_star,
                            '1.5' => $one_half,
                            '2' => $two_star,
                            '2.5' => $two_half_star,
                            '3' => $three_star,
                            '3.5' => $three_half_star,
                            '4' => $four_star,
                            '4.5' => $four_half_star,
                            '5' => $five_star

                        ];

                        $ratings = $ratings_array[$ratings];

                    //End of Star Ratings
                    

                    //Beginning of Fetching only 12 words from the database

                        $new_description_x = [];

                        //converting the string to array
                        $old_description = (explode(" ", $user['description']));

                        
                        

                        for($i=0; $i<12; $i++) {
                            array_push($new_description_x, $old_description[$i] );
                        }


                        //converting the array back to string
                        $desc_main = implode(" ", $new_description_x);

                    // End of Fetching only 12 words from the database


                    
                    $output = "
                        <div class='category_items' onClick=visitPage('$new_word')>

                        
                        <a href= $new_word.php?cat=$_GET[cat]&item=$new_word&id=$user[id] >

                            <div class='category_title'>
                                $user[security_items]
                            </div>

                            <div class='product_image_box'>

                                <div class='product_image'>
                                    <img src='products/$user[image]' />
                                </div>     

                            </div>

                            <div class='see_more_box'>
                                <div class='description'>
                                $desc_main ........
                                </div>

                                <div class='ratings'>$ratings_array[$ratings] </div>

                                <div class='price'> $$user[price] </div>
                            </div>
                        
                        </a>

                        

                    </div>
                    
                    ";

                    echo $output;
                }

            }
            else{
                $result = "
                    <div class=no_product_disp>
                        Currently, there are no security products for this category.
                    </div>
                    ";
                echo $result;
            }
                    
                
                

            ?>

   

               



                
               
                
                
            </div>

      
       

        </div>

    </body>

   
</html>
