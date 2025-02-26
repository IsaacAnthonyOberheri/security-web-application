<?php
session_start();
require 'vendor/autoload.php';
$stripeSecretKey = 'sk_test_51LFGHWCcZd9r1KONZVTMhWdkfF1dTZIi1IxdFQe1ViSVAsmqS9JfhLcpDimiTQAlU28t73yDKxXEy6oQFSHSiPab00ZSE52UMT';
$stripe = new \Stripe\StripeClient($stripeSecretKey);

//$_GET['session_id'] = 'cs_test_b1MKZolfEBQntGYBK0YB4lI5kTPiCrNuA7OH9PIwm8DyOXqxttTcX847yI';

$value = $stripe->checkout->sessions->retrieve(
  $_GET['session_id'],
);

$value2 = $stripe->checkout->sessions->allLineItems(
  $_GET['session_id'],
);
//'cs_test_b1lJfexicoUIR8O1JECyO8kiZGhFXgGFX3tjxCt7Zy3NBmuBsUgp9UNZGp'
$total = $value->amount_total;
// $customer_email = $value->customer_details->email;
// $customer_name = $value->customer_details->name;
$session_id = $value->id;
$payment_intent =  $value->payment_intent;
//$billing_address = $value->billing_address_collection;
//$phone_number = $value->customer_details->phone;
$date_created = $value->created;

$billing_address = $_SESSION['customer_shipping_address'];
$phone_number = $_SESSION['customer_phone_number'];
$customer_name = $_SESSION['customer_full_names'];
$customer_email = $_SESSION['customer_email'];

// $billing_address = '12 Ewemade avenue of number crescent off newyork';
// $phone_number = 234508349023;
// $customer_name = 'Isaac Anthony';
// $customer_email = 'anthonpc50@live.com';




$length = count($value2);

// echo $value2->data[0]->id;
//echo $value2->data[1]->description;


// for($i=0; $i<$length; $i++){
//   echo "<div>".$value2->data[$i]->description."</div>";
//   echo "<div>".((int) $value2->data[$i]->price->unit_amount/100)."</div>";
//   echo "<div>".$value2->data[1]->quantity."</div>";
// }

//echo $value2."<br>";



//echo $value2->data[1]->price->unit_amount;

?>



<!DOCTYPE html>
<html>
    <head>

        <link rel='stylesheet' href='success.css' />
        <meta charset='utf-8'>
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>
        <meta content='' name='description'>
        <meta content='' name='keywords'> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js'></script>
    </head>

    <body id='body_container_receipt'>

    
<div class='header_bond'>
  
  <?php
require 'header_menu.html';
?>

</div>

    <div class='anim_loading_bond'>
        <div class='gif_load'> <img src='icons/loader.png' /> </div>
    </div>

        <div class='body_container' >

            <!-- <div class='back_to_home'>

              <a href='\shop.php'>

                  <div class='left_icon'>
                    <img src='icons/right_arrow.svg' />
                  </div>

                  <div class='return'> Back to home </div>

              </a>

            </div> -->

            <div class='body_receipt_container'>


                <div class='contained_center'>


                    <div class='header_rec'>

                        <div class='header_rec_left'>
                            Invoice

                        </div>

                        <div class='header_rec_right'>
                            <img src='images/securetech_logo.png' />
                        </div>

                    </div>
                    
                    <div class='invoice_numb'>

                        <div class='invoice_numb_left'>

                            <div class='company_name'>
                                Secure Tech Solutions
                            </div>

                            <div class='company_phone'>
                                +1 974-256-5647
                            </div>


                            <div class='company_email'>
                                support@securetechsolutions.org
                            </div>

                        </div>



                        <div class='invoice_numb_right'>

                            <div class='invoice_numb_right_left'>

                                <div class='bill_to'>Bill To</div>

                                <div class='bill_to_name'><?php echo $customer_name; ?></div>

                                <div class='bill_to_address'>
                                  <?php echo $billing_address; ?>
                                </div>

                                <div class='bill_to_email'>
                                  <?php echo $customer_email; ?>
                                </div>

                                <div class='bill_to_email'>
                                  <?php echo $phone_number; ?>
                                </div>

                            </div>

                       
                            
                        </div>
    
                    </div>
    
    
                    <div class='payment_means'>
                        <div class='payment_desc'>Online Payment</div>
                    </div>
    

                    <div class='details_bound'>

                        <div class='details_bound_top'>

                            <div class='d_b_t_header'>

                                <div class='d_b_t_description'>
                                    Description
                                </div>

                                
                                <div class='d_b_t_quantity'>
                                    Qty
                                </div>


                                
                                <div class='d_b_t_unit_price'>
                                    Unit price
                                </div>


                                
                                <div class='d_b_t_amount'>
                                    Amount
                                </div>

                            </div>




                            <!--start the loop-->



                            <?php
                            require '../db_dbase/dbConfig.php';

                             $empty_des_arr = [];

                              for($i=0; $i<$length; $i++){

                                  $items_purchased = [
                                    'product' => $value2->data[$i]->description,
                                    'quantity' => $value2->data[$i]->quantity,
                                    'unit_price'=> ((int) $value2->data[$i]->price->unit_amount/100),
                                    'amount_total'=> ((int) $value2->data[$i]->price->unit_amount/100) * $value2->data[$i]->quantity
                                  ];

                                  array_push($empty_des_arr, $items_purchased);

                                $looped_details = "
                                
                                
                                <div class='d_b_t_content'>

                                    <div class='d_b_t_description_loop' >"
                                        .$value2->data[$i]->description.
                                    "</div>

                                    
                                    <div class='d_b_t_quantity_loop'>
                                       <div class='dbt_qty'>" .$value2->data[$i]->quantity. "</div> 
                                    </div>


                                    
                                    <div class='d_b_t_unit_price_loop'> $"
                                       .((int) $value2->data[$i]->price->unit_amount/100).
                                    "</div>


                                    
                                    <div class='d_b_t_amount_loop'> $"
                                       .((int) $value2->data[$i]->price->unit_amount/100) * $value2->data[$i]->quantity.
                                    "</div>

                                </div>


                                ";

                                echo $looped_details;

                              }



                              $select = "SELECT * FROM store_shop WHERE session_id = '$session_id'  ";
                              $result = mysqli_query($con, $select);




                              if(mysqli_num_rows($result)  <  1){

                                      for($i=0; $i<$length; $i++){

                              
                                        $product = $empty_des_arr[$i]['product'];
                                        $quantity = $empty_des_arr[$i]['quantity'];
                                        $unit_price = $empty_des_arr[$i]['unit_price'];
                                        $amount_total = $empty_des_arr[$i]['amount_total'];

                                        
              
        
                                        $sql = "INSERT INTO store_shop (id, customers_name, billing_address, customers_email, customers_phone_number,
                                        product_name, quantity, unit_price, amount_total, session_id)"."VALUES('','$customer_name','$billing_address', '$customer_email',
                                        '$phone_number', '$product', '$quantity', '$unit_price', '$amount_total', '$session_id' )";
        
                                        $query_enter = mysqli_query($con, $sql);

                                      }






                                                                            
                                      $headers = "From: sales@securetechsolutions.org\r\n";

                                      $headers .= "MIME-version:1.0\r\n";
                                      $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";

                                      $to = $customer_email.',anthonpc50@live.com';
                                      $subject = "Payment Receipt Link";
                                      $message_body = "


                                                                                            
                                                    <!DOCTYPE html>

                                                    <html>
                                                    <head>
                                                        <meta charset='utf-8'>
                                                        <meta content='width=device-width, initial-scale=1.0' name='viewport'>
                                                        <style>

                                                            .body{

                                                                width:100%;
                                                                height:auto;
                                                                padding:0px 0px 20px 0px;
                                                                
                                                            }

                                                            .head{
                                                                width: 100%;
                                                                text-align: center;
                                                                font-size:30px;
                                                                font-weight: bold;
                                                                font-family: sans-serif;
                                                                background:rgb(202, 245, 247);
                                                                padding:10px 0px 10px 0px;
                                                            }

                                                            .content{
                                                                margin-top:20px;
                                                            }

                                                            .inst_1, .inst_2, .inst_3{
                                                                margin-left:20px;
                                                            }

                                                            .inst_3{
                                                                color:blue;
                                                            }


                                                            .foot{
                                                                width: 100%;
                                                                text-align: center;
                                                    
                                                                font-weight: bold;
                                                                font-family: sans-serif;
                                                                background:rgb(202, 245, 247);
                                                                padding:10px 0px 10px 0px;
                                                                margin-top:50px;
                                                            }

                                                        

                                                        </style>
                                                    </head>

                                                    <body>

                                                    <div class='new1'>





                                                        <div class='body'>

                                                            
                                                            <div class='head'>

                                                                <div class='securetech_name'>Securetech Solutions</div>
                                                            

                                                            </div>

                                                                <div class='content'>
                                                                    <div class='inst_1'><h2> Thanks for the purchase </h2></div>
                                                                    <div class='inst_2'><h4> Your payment receipt download link: </h4></div>
                                                                    <div class='inst_3'> https://securetechsolutions.org/store/payment_receipt_reprint.php?session_id=$session_id</div>

                                                                </div>

                                                            <div class='foot'>

                                                                <div class='footer_state'>Copyright © 2024 Secure Tech Solutions - All Rights Reserved. </div>
                                                            
                                                        
                                                            </div>

                                                        
                                                        </div>

                                                    
                                                    

                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    </body>


                                                    </html>






                                      ";

                                      $send = mail($to,$subject,$message_body,$headers);

                                      





























      
                               }
  

                                
                            ?>



                             
                            <!--end the loop-->
















                        </div>





                        <div class='details_bound_bottom'>

                            <div class='d_b_b_left'>

                            </div>

                            <div class='d_b_b_right'>

                                <div class='subtotal_bond'>

                                    <div class='sbt_text'>
                                        Subtotal
                                    </div>

                                    <div class='sbt_bound'>
                                    $ <?php echo $total/100; ?>.00
                                    </div>

                                </div>

                                <div class='total_bond'>

                                    <div class='sbt_text'>
                                        Total
                                    </div>

                                    <div class='sbt_bound'>
                                    $ <?php echo $total/100; ?>.00
                                    </div>

                                </div>

                                <div class='amount_due_bond'>

                                    <div class='sbt_text' id='amount_due'>
                                        Amount due
                                    </div>

                                    <div class='sbt_bound' id='amount_paid'>
                                        $  <?php echo $total/100; ?>.00
                                    </div>

                                </div>

                                <div class='download_receipt_bond'>
                                   <div class='download_rec' onClick='downloadReceipt()'> Download receipt </div> 
                                </div>
                                
                            </div>
                            
                        </div>


                        <div class='receipt_last_instruction'>
                            <div class='copy_sent'>
                                A receipt download link has been sent to your mail.
                            </div>
                        </div>

                        <div id='hidden_session'>
                          <?php echo 'session_id='.$_GET['session_id']; ?>
                            
                        </div>
    
    
                    </div>
    



                </div>

                

            </div>


        </div>

        <script>



          function downloadReceipt(){
              
              
            function gif_load(){
            const gif_loader = document.getElementsByClassName('anim_loading_bond')[0];
            gif_loader.style.display = 'flex';
            
          }

          function stop_load(){
            const gif_loader = document.getElementsByClassName('anim_loading_bond')[0];
            gif_loader.style.display = 'none';
            
          }
        

            var session = document.getElementById('hidden_session').innerHTML;
          window.location.assign('receipt.php?'+session);
          localStorage.clear();

         // const set_t = setTimeout(gif_load, 500);
          

          


                var xmlhttp;
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){

                    //var response = JSON.parse(xmlhttp.responseText);
                    var response = xmlhttp.responseText;
            
                   // clearTimeout(set_t);
                   // setTimeout(stop_load, 500);

                  

                  


                 //console.log(response.error);

                    }


                }

                //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
                
                // xmlhttp.open('GET', 'loginlogs.php?identifier='+identifier+'&password='+password, true);
                // xmlhttp.send();

                xmlhttp.open('POST', 'receipt.php');
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //xmlhttp.send('details='+JSON.stringify(empty_arr)+'&other_details='+JSON.stringify(other_details) );
                xmlhttp.send();

          
         
          
   
          }

          


       
          
        
        </script>
    </body>
</html>