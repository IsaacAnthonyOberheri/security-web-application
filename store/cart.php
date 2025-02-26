<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='cart.css' />
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <meta content="" name="keywords">
        <meta property="og:locale" content="en_US" >
        <meta property="og:title" content="Cart - Secure Tech Solutions" >
        <meta property="og:description" content="Best Cyber Security Products in Cart.">
        <link rel="icon" href="images/securetech_logo.png" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>

<body>


    <div class='anim_loading_bond'>
        <div class='gif_load'> <img src='icons/loader.png' /> </div>
    </div>

    
    <div id = 'hsec'>
            <?php 
                require 'header_menu.html' 
            ?>
    </div> 


    
   

    <div class='body_container_cart' onmouseenter = 'hideContent()'>

        <div class='cart_content'>

            <div class="content_list">
                
                <div class="cart_number" >
                  <div class="cart_ps">
                    Cart (
                        <span id="count_added_item"> 
                            <script>
                                document.write(localStorage.length);
                            </script> 
                        </span>)
                  </div> 
                </div>

                <div class="product_info_bound">


                    <script>

                        var empty_price_array = [];

                        for(i=0; i<localStorage.length; i++){

                         

                            var check =  JSON.parse(localStorage.getItem(i));
                            var price = parseInt(check.price);
                            var id = check.id;
                            var item_name = check.item_name;
                            var description = check.description;
                            var image = check.image.replaceAll("__", ' ');
                            var key = check.key;
                            var edited_price = parseInt(check.edited_price);
                            var increment = parseInt(check.increment);

                            //console.log(edited_price);
                            //console.log(key);
                            var idx = key+item_name.replaceAll(' ', '_');
                            //console.log(key);
                            //console.log(price);
                           // console.log(image);

                           
                             document.write("<div class='product_infos'><div class='prd_top'><div class='prd_top_left'><div class='prd_top_left_left' id='prd_image'><img src='products/"+image+"'/></div><div class='prd_top_left_right' ><div id='prd_description'>"+item_name+"</div> <div id='in_stock'>In Stock</div></div></div><div class='prd_top_right'><div class='prd_price' > $ "+price+"</div></div></div><div class='prd_btm'><div class='prd_btm_left'><div class='prd_basket'><img src='icons/icons8-trash.svg' /></div><div class='remove_item' onClick='removeItem("+key+")' >REMOVE</div></div><div class='prd_btm_right'><div class='increment_bound'><div class='left_increment'><div class='minus' key="+key+" id='"+idx+"_reduce' onClick='reduceNumber()'><img src='icons/minus.svg' /></div></div><div class='increase_value' id='"+idx+"_number'>" +increment+ "</div><div class='right_increment'><div class='cross' key="+key+" id='"+idx+"_add' onClick='addNumber()'><img src='icons/cross.svg' /></div></div></div></div></div></div>" );
               

                       
                        
                        
                            
                        
                        
                        


                            var arr_price = empty_price_array.push(edited_price);
                            

                            
                        }
                    
                        var sum = 0;
                        for(i=0; i<empty_price_array.length; i++ ){
                            sum += empty_price_array[i];
                        }

                     
                     
                        // const cross = document.querySelectorAll('.cross');
                        // const crossLength = cross.length;

                        // for(x=0; x<length; x++){
                        //     const cross_all = document.getElementsByClassName('cross');
                        //     cross_all[x].addEventListener('click', addNumber);
                        // }

                       
                        function addNumber(){
                            const active_btn_id = event.currentTarget.id;
                            var id_increment = active_btn_id.replaceAll('add', "number");
                           let id_value = parseInt(document.getElementById(id_increment).innerHTML);
                            //alert(id_increment);
                            id_value += 1;
                            document.getElementById(id_increment).innerHTML = id_value;

                            var active_id =  document.getElementById(active_btn_id);
                            var key_active = active_id.getAttribute('key');
                            //console.log(key_active);
                            var find_local_storage =  JSON.parse(localStorage.getItem(key_active));
                            //console.log(find_local_storage);
                            
                            var id = find_local_storage.id;
                            var description = find_local_storage.description;
                            var item_name = find_local_storage.item_name;
                            var price = find_local_storage.price;
                            var edited_price = find_local_storage.price * id_value;
                            var image = find_local_storage.image;
                            var key = find_local_storage.key;
                            var increment = find_local_storage.increment;


                            var values = {
                                'id': id,
                                'description': description,
                                'item_name': item_name,
                                'price': price,
                                'image': image,
                                'key': key,
                                'edited_price': edited_price,
                                'increment': id_value

                            };

                            localStorage.setItem(key, JSON.stringify(values) );
                     




                            var sum_edited_price = 0;

                            var empty_edited_price_array = [];

                            for(i=0; i<localStorage.length; i++){

                                var find_local_storage =  JSON.parse(localStorage.getItem(i));

                                var edited_price_update = find_local_storage.edited_price;

                                var arr_edited_price = empty_edited_price_array.push(edited_price_update);

                                sum_edited_price += parseInt(empty_edited_price_array[i]);
                            }


                            //console.log(sum_edited_price);
                            var subtotal = document.getElementsByClassName('subtotal');
                            subtotal[0].innerHTML = sum_edited_price;

                            var checkout = document.getElementsByClassName('total_amount');
                            checkout[0].innerHTML = sum_edited_price;



                        }

                   




                        function reduceNumber(){
                            const active_btn_id = event.currentTarget.id;
                            var id_increment = active_btn_id.replaceAll('reduce', "number");
                           let id_value = parseInt(document.getElementById(id_increment).innerHTML);
                            //alert(id_increment);

                            if(id_value >= 2 ){
                                id_value += -1;
                                document.getElementById(id_increment).innerHTML = id_value;

                            document.getElementById(id_increment).innerHTML = id_value;

                            var active_id =  document.getElementById(active_btn_id);
                            var key_active = active_id.getAttribute('key');
                            //console.log(key_active);
                            var find_local_storage =  JSON.parse(localStorage.getItem(key_active));
                            //console.log(find_local_storage);
                            
                            var id = find_local_storage.id;
                            var description = find_local_storage.description;
                            var item_name = find_local_storage.item_name;
                            var price = find_local_storage.price;
                            var edited_price = find_local_storage.price * id_value;
                            var image = find_local_storage.image;
                            var key = find_local_storage.key;
                            var increment = find_local_storage.increment;


                            var values = {
                                'id': id,
                                'description': description,
                                'item_name': item_name,
                                'price': price,
                                'image': image,
                                'key': key,
                                'edited_price': edited_price,
                                'increment': id_value

                            };

                            localStorage.setItem(key, JSON.stringify(values) );
                     




                            var sum_edited_price = 0;
                            var empty_edited_price_array = [];

                            for(i=0; i<localStorage.length; i++){

                                var find_local_storage =  JSON.parse(localStorage.getItem(i));

                                var edited_price_update = find_local_storage.edited_price;

                                var arr_edited_price = empty_edited_price_array.push(edited_price_update);

                                sum_edited_price += parseInt(empty_edited_price_array[i]);
                            }


                            //console.log(sum_edited_price);
                            var subtotal = document.getElementsByClassName('subtotal');
                            subtotal[0].innerHTML = sum_edited_price;

                            var checkout = document.getElementsByClassName('total_amount');
                            checkout[0].innerHTML = sum_edited_price;





                            }
                            
                        }










                        

                        function removeItem(key_value){
                            //console.log(key_value);
                            let empty_arr = [];

                             for(i=0; i<localStorage.length; i++){

                                    var check =  JSON.parse(localStorage.getItem(i));

                                    var price = parseInt(check.price);
                                    var id = check.id;
                                    var item_name = check.item_name;
                                    var description = check.description;
                                    var image = check.image;
                                    var key = check.key;
                                    var edited_price = parseInt(check.edited_price);
                                    var increment = parseInt(check.increment);
                                    
                                    
                                    var stored_local_storage = {
                                        'id': id,
                                        'description': description,
                                        'item_name': item_name,
                                        'price': price,
                                        'image': image,
                                        'key': key,
                                        'edited_price': edited_price,
                                        'increment': increment 
                                    };

                                    empty_arr.push(stored_local_storage);

                                }

                                //console.log(empty_arr[0].id);

                              const filtered =  empty_arr.filter(item => item.key != key_value);

                              const length = filtered.length;

                              //console.log(...filtered);
                              const filtered_obj = filtered;
                              //console.log(filtered_obj[0]);
                             
                              let keys = []
                              let edited_filtered_obj = [];
                                for(key = 0; key < length; key++){

                                        
                                                keys.push(key);

                                                edited_filtered_obj.push({
                                                'id': filtered_obj[key].id,
                                                'description': filtered_obj[key].description,
                                                'item_name': filtered_obj[key].item_name,
                                                'price': filtered_obj[key].price,
                                                'image': filtered_obj[key].image,
                                                'key': key,
                                                'edited_price': filtered_obj[key].edited_price,
                                                'increment': filtered_obj[key].increment 
                                            });
                                     }
                                //console.log(filtered_obj);

                           

                            localStorage.clear();       
                            for(i=0; i<length; i++){
                                localStorage.setItem(keys[i], JSON.stringify(edited_filtered_obj[i]) );
                            }
                                    
                             

                         

                           location.reload();
                           

                    
                        

                    

             
                        

                          

                       

                        }

                     
            

                    </script>

               
                    

                    

                </div>

                <script>
                         if(localStorage.length < 1){
                            document.write("<div class=empty_cart> <div class=e_cart_center><div class='emp_cart_ani'> <img src='images/empty_cart.jpg'> </div> <div class=empt_cart_text > Cart is empty </div> </div> </div>");
                            const content_info = document.getElementsByClassName('content_info')[0];
                            content_info.style.display = 'none';
                        }

                </script>
                   


            </div>



            <div class="content_info">

                <div class="delivery_info">

                    <div class="delivery_head_container">
                       <div class="ship_det"> SHIPPING DETAILS </div> 
                    </div>

                    <div class="del_info_bn">

                        <div class="receiver_names_container">

                            <div class="full_names">
                                Full Names <span class="impt"> *</span>
                            </div>
    
                            <div class="input_names">
                                <input type="text" id='full_names_input'/>
                            </div>
    
                        </div>

                    </div>

                    <div class="del_info_bn">

                        <div class="receiver_names_container">

                            <div class="full_names">
                                Email Address <span class="impt" > *</span>
                            </div>
    
                            <div class="input_names">
                                <input type="text" id='email_input' />
                            </div>
    
                        </div>

                    </div>



                    <div class="del_info_bn">

                        <div class="receiver_names_container">

                            <div class="full_names">
                                Phone Number <span class="impt"> *</span>
                            </div>
    
                            <div class="input_names">
                                <input type="text" id='phone_number_input' />
                            </div>
    
                        </div>

                    </div>



                    <div class="del_info_bn">

                        <div class="receiver_names_container">

                            <div class="full_names">
                                Shipping Address <span class="impt"> *</span>
                            </div>
    
                            <div class="input_names">
                                <textarea class="input_text_area" id='shipping_address_input'>

                                </textarea>
                            </div>
    
                        </div>

                    </div>

             

                

                    <div class="receiver_address_container">
                        
                    </div>

                </div>
                
                <script>
                         if(localStorage.length < 1){
                            
                            const content_info = document.getElementsByClassName('content_info')[0];
                            content_info.style.display = 'none';
                        }

                </script>



                <div class="cart_section">

                    <div class="summary">
                       <div class="ctsmr"> CART SUMMARY </div> 
                    </div>

                    <div class="sub_t">
                        <div class="sub_t_left">
                            Subtotal
                        </div>
                        <div class="sub_t_right">
                            $  <span class='subtotal'> <script> document.write(sum); </script> </span>
                        </div>
                    </div>

                    <div class="check_sec">
                        <div class="check_btn" onClick='checkOut()'>
                            CHECKOUT ($ <span class="total_amount"> <script> document.write(sum); </script></span> )
                        </div>
                    </div>
                </div>

            </div>


        </div>



   </div>

</body>

<script>

    function checkOut(){
        //alert('working');
        const email = document.getElementById('email_input');
        const email_value = email.value;

        const full_names = document.getElementById('full_names_input');
        const full_names_value = full_names.value;

        const phone_number = document.getElementById('phone_number_input');
        const phone_number_value = phone_number.value;

        const shipping_address = document.getElementById('shipping_address_input');
        const shipping_address_value = shipping_address.value;


        if(email_value.length > 4 & full_names_value.length > 4 & phone_number_value.length > 6 & shipping_address_value.length > 10 ){

            var other_details = [{
                'email': email_value,
                'full_names': full_names_value,
                'phone_number': phone_number_value,
                'shipping_address': shipping_address_value
            }];


            const length = localStorage.length;

            let empty_arr = [];

            for(i=0; i<localStorage.length; i++){

                var check =  JSON.parse(localStorage.getItem(i));

                var price = parseInt(check.price);
                var id = check.id;
                var item_name = check.item_name;
                var description = check.description;
                var image = check.image;
                var key = check.key;
                var edited_price = parseInt(check.edited_price);
                var increment = parseInt(check.increment);
                
                
                var stored_local_storage = {
                    'id': id,
                    'description': description,
                    'item_name': item_name,
                    'price': price,
                    'image': image,
                    'key': key,
                    'edited_price': edited_price,
                    'increment': increment 
                };

                empty_arr.push(stored_local_storage);

            }

            //console.log(empty_arr[0].item_name);
            //location.assign('checkout.php?details='+JSON.stringify(empty_arr));

            const gif_loader = document.getElementsByClassName('anim_loading_bond')[0];
            gif_loader.style.display = 'flex';

                var xmlhttp;
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){

                    //var response = JSON.parse(xmlhttp.responseText);
                    var response = xmlhttp.responseText;
                  


                    //console.log(response);
                    window.location.assign(response);

                 //console.log(response.error);

                    }


                }

                //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
                
                // xmlhttp.open('GET', 'loginlogs.php?identifier='+identifier+'&password='+password, true);
                // xmlhttp.send();

                xmlhttp.open('POST', 'checkout.php');
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send('details='+JSON.stringify(empty_arr)+'&other_details='+JSON.stringify(other_details) );



        }
        else{
            if(email_value.length < 4 ){
                email_input.style.border = '1px solid red';

            }

            if( full_names_value.length < 4  ){
                full_names_input.style.border = '1px solid red';
            }


            if( phone_number_value < 6  ){
                phone_number_input.style.border = '1px solid red';
            }


            if(shipping_address_value < 10 ){
                shipping_address_input.style.border = '1px solid red';
            }

            
        }

        
    }

</script>


</html>