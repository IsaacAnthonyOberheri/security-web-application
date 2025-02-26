<!DOCTYPE html>
<?php
session_start();

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel='stylesheet' href='product_display.css' />

        <meta content="" name="keywords">
        <meta property="og:locale" content="en_US" >
        <meta property="og:title" content="Cybersecurity Products - Secure Tech Solutions" >
        <meta property="og:description" content="Best Cyber Security Products.">
        <link rel="icon" href="images/securetech_logo.png" />

        
    </head>

    <body>

        <div id = 'hsec'>
         <?php 
            require 'header_menu.html'; 
           
         ?>
        </div>
        <div class='cart_alert'> 
          <div class='item_succ'>   Item successfully added to cart! </div>
        </div>

        <div class='body_container_x' onmouseenter = 'hideContent()'>

       

            <div class='details'>

                <?php
                 require '../db_dbase/dbConfig.php';
                 //session_start();

                 $category = $_GET['cat'];
                 $item_name = str_replace('_', ' ', $_GET['item']);
                 $id = $_GET['id'];

                

                // $category = 'network_security';
                // $item_name = 'network camera';
                // $id = 1;

                 $select = "SELECT * FROM  $category WHERE id = '$id' && security_items = '$item_name' ";
                 $query_select = mysqli_query($con, $select);
                 $user = mysqli_fetch_array($query_select);

                 $image = str_replace(' ', '__', $user['image']);
                 $image_x = $user['image'];
                 

                $output_left_1 = "

                    <div class='details_left'>

                        <div class='product_image'>
                            <img src='products/$image_x' />
                        </div>

                    

                    </div>
                ";

                echo $output_left_1;
                
             

                $price = $user['price'];
                $description = str_replace(' ', '_', $user['description']) ;
                $names =  str_replace(' ', '_', $user['security_items']);

                $imports = [
                    'id' => $id,
                    'description' => $description,
                    'names' => $names,
                    'price' => $price,
                    'image' => $image


                    ];

                    $encoded = json_encode($imports);
                   
                        
                    
                
                   
                             
                                
                                
                        
                           
                            
                     
                    
                   
                  
                

                $output_left_2 = "
                    <div class='details_right'>

                    <div class='product_details'>

                        <div class='product_header'>
                            $user[security_items]
                        </div>

                        <div class='product_details'>
                             $user[description]
                        </div>

                        <div class='product_price'>
                            $  $user[price]
                        </div>

                        <div class='add_to_cart'>

                           <div class='add_icon'>
                             <img src='icons/cart_white.png' />
                           </div>

                           <div class='add_text' id = $names onClick = addToCart($encoded) >
                                ADD TO CART 
                           </div>

                           
                        </div>
                            
                    </div>
                    
                    <div class='cart_alert'> 
                        <div class='item_succ'>   Item successfully added to cart! </div>
                    </div>
                    
                </div>

            
                ";

                echo $output_left_2;
                

                ?>

               

            </div>

          

            <div class='icon_fill'>
                <img src='icons/giphy.webp' />
            </div>

        

        </div>

        <!-- <button onClick = "addToCart('price', 'names' )">
            Click me
        </button> -->

        <script>
           

            function addToCart(sentValues){

                var description = sentValues.description.replaceAll("_", " ");
                var item_name = sentValues.names.replaceAll('_', ' ');
                var id = sentValues.id;
                var price = sentValues.price;
                var image = sentValues.image;
                var key = parseInt(localStorage.length);
               
                //console.log(image);

               



                
                var values =  {
                   'description': description,
                    'item_name': item_name,
                    'id': id,
                    'price': price,
                    'image': image,
                    'key': key,
                    'edited_price': price,
                    'increment':1

                };
                //console.log(values.edited_price);

                let find_existing_value = [];
                for(i=0; i< key; i++){
                    find_existing_value.push( JSON.parse(localStorage.getItem(i)) );
                }

                var checking = JSON.parse(localStorage.getItem(key-1))
               
                //console.log(find_existing_value);

   
                 
                              
                localStorage.setItem(key, JSON.stringify(values) );

                document.getElementById('added_item_count').innerHTML = localStorage.length;
                document.getElementById('added_item_count_mobile').innerHTML = localStorage.length;
                
                //console.log(sessionStorage.getItem(item_name));

                var cart_alert = document.getElementsByClassName('cart_alert');
                cart_alert[0].style.display = 'flex';
                cart_alert[0].style.opacity = '1';
                cart_alert[0].style.transition = 'all 1.5s linear';

                function cart_valid(){
                    var cart_alert = document.getElementsByClassName('cart_alert');
                    cart_alert[0].style.display = 'none';
                }
                setTimeout(cart_valid, 2000);


                  if(window.innerWidth < '951'){

                    var cart_alert = document.getElementsByClassName('cart_alert');
                    cart_alert[1].style.display = 'flex';
                    cart_alert[1].style.opacity = '1';
                    cart_alert[1].style.transition = 'all 1.5s linear';

                    function cart_valid(){
                        var cart_alert = document.getElementsByClassName('cart_alert');
                        cart_alert[1].style.display = 'none';
                    }
                    setTimeout(cart_valid, 2000);

                  }          

                      






                      

                            
                    

           

           
                    
                    


                

                
            
              
            }
            //console.log(localStorage.length);


        </script>

    </body>

</html>




