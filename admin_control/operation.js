
var xmlhttp;
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){


    
   var response = JSON.parse(xmlhttp.responseText);

   //alert(response);


   var access_management = document.getElementById('total_access_management');
   access_management.innerHTML = response.list.access_management;

   var data_protection = document.getElementById('total_data_protection');
   data_protection.innerHTML = response.list.data_protection;


   var endpoint_security = document.getElementById('total_endpoint_security');
   endpoint_security.innerHTML = response.list.endpoint_security;


   var network_security = document.getElementById('total_network_security');
   network_security.innerHTML =  response.list.network_security;



 
    var total_products = document.getElementById('total_products');
    total_products.innerHTML = response.list.total_numbers;

        
}



}

//xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);

// xmlhttp.open('GET', 'loginlogs.php?from_location='+from_location+'&to_location='+to_location, true);
// xmlhttp.send();

xmlhttp.open('POST', 'count_value.php');
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send();









function menu_click(){

   var b_left_bar = document.getElementsByClassName("b_left_bar")[0];
   b_left_bar.style.marginLeft = "0px";
   b_left_bar.style.transition = 'all 0.3s linear';

   var mobile_menu_btn = document.getElementsByClassName('mobile_menu_btn')[0];
   mobile_menu_btn.setAttribute('onClick', 'menu_close()');
}


function menu_close(){
   var b_left_bar = document.getElementsByClassName("b_left_bar")[0];
   b_left_bar.style.marginLeft = "-210px";
   b_left_bar.style.transition = 'all 0.3s linear';

   var mobile_menu_btn = document.getElementsByClassName('mobile_menu_btn')[0];
   mobile_menu_btn.setAttribute('onClick', 'menu_click()');
}


function menu_close_x(){
   var b_left_bar = document.getElementsByClassName("b_left_bar")[0];
   b_left_bar.style.marginLeft = "-210px";
   b_left_bar.style.transition = 'all 0.3s linear';

  
}





function home(){
//alert('ok');

var second_page = document.getElementsByClassName('second_page')[0];
second_page.style.display = 'none';


var home = document.getElementsByClassName('total_student')[0];
home.style.display = 'block';

var student = document.getElementsByClassName('student_classes')[0];
student.style.display = 'block';


var third_page = document.getElementsByClassName('third_page')[0];
third_page.style.display = 'none';
// menu_close();
// alert(window.innerWidth);

var windows_width = window.innerWidth;

if(windows_width <500){
   menu_close();
}

}


function student_record(){
    //alert('ok');

    
   var third_page = document.getElementsByClassName('third_page')[0];
   third_page.style.display = 'none';

    var home = document.getElementsByClassName('total_student')[0];
    home.style.display = 'none';

    var student = document.getElementsByClassName('student_classes')[0];
    student.style.display = 'none';



    var second_page = document.getElementsByClassName('second_page')[0];
    second_page.style.display = 'flex';

    var windows_width = window.innerWidth;

   if(windows_width <500){
      menu_close();
   }

    
}


function logout(){
    location.assign('logout.php');
}













function live_search(){

   //beginning of live search



    //alert('ok');
    var search_value = document.getElementsByClassName('search_input')[0].value;

    //console.log(search_value);




    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){

   
        
       var response = xmlhttp.responseText;
   

       var result = document.getElementsByClassName('result')[0];
        result.innerHTML = response;




        var search_i = document.getElementsByClassName('search_input')[0];
        //alert(search_i.value.length);
       
        if(search_i.value.length < 1){
       
           var result = document.getElementsByClassName('result')[0];
           result.innerHTML = "";
       
          // alert('ok');
       
           
        }

     
        

            
   }



}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?from_location='+from_location+'&to_location='+to_location, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'searched_value.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('searched='+search_value);






  

}




function clear_s(){

    var result = document.getElementsByClassName('result')[0];
    result.innerHTML = "";

}













function input_out(){
   //live search continutes here
    //alert('checked');
    //go to live_search()

    var f_names = document.querySelectorAll('.f_names');
    //alert(f_names.length);

    for(i=0; i<f_names.length; i++){

        var id_number = document.getElementsByClassName('f_names')[i];

        id_number.addEventListener('click', che);

       

    }




}



function che(){
   //livesearch continues here
   //go to input_out()
    var idv = this.id;

    
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){

   
        //search control aspect

       var response = JSON.parse(xmlhttp.responseText);
      // var response = xmlhttp.responseText;
      // console.log(response);




       var passport_name = document.getElementById('passport_picture');
      // passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";

       passport_name.innerHTML ="<img src='../store/products/"+response.list.image+"'>";


       var id = document.getElementById('id');
       id.innerHTML = response.list.id;


       var product = document.getElementById('product');
       product.value = response.list.security_items;


       var description = document.getElementById('description');
       description.value = response.list.description;


       var ratings = document.getElementById('ratings');
       ratings.value = response.list.ratings;


       var price = document.getElementById('price');
       price.value = response.list.price;


       var category = document.getElementById('category');
       category.value = response.list.category;

















    }



}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?from_location='+from_location+'&to_location='+to_location, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'record.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('searched='+ idv);








}




















function search_va(){
//alert('search');


var search_btn = document.getElementsByClassName('search_btn')[0];
search_btn.style.display = 'none';

var search_reset = document.getElementsByClassName('search_reset')[0];
search_reset.style.display = 'flex';

var user_or = document.getElementsByClassName('user_or')[0];
user_or.style.display = 'none';

var se_btn = document.getElementsByClassName('se_btn')[0];
se_btn.style.display = 'none';

var search_value_section = document.getElementsByClassName('search_value_section')[0];
search_value_section.style.display = 'flex';
search_value_section.style.width = '30%';
search_value_section.style.opacity = '1';
search_value_section.style.transition = 'all 1s linear';


    var search_input = document.getElementsByClassName('search_input')[0];
    search_input.style.width = '250px';
    search_input.style.transition = 'all 1s linear';










}

function select_va(){

   //alert('select');

var search_btn = document.getElementsByClassName('search_btn')[0];
search_btn.style.display = 'none';
var user_or = document.getElementsByClassName('user_or')[0];
user_or.style.display = 'none';

var se_btn = document.getElementsByClassName('se_btn')[0];
se_btn.style.display = 'none';

var search_reset = document.getElementsByClassName('search_reset')[0];
search_reset.style.display = 'flex';

var select_cc = document.getElementsByClassName('select_cc')[0];
select_cc.style.display = 'flex';





var fetc = document.getElementsByClassName('fetc')[0];
fetc.style.display = 'flex';




    





}








function reset(){

   
   var third_page = document.getElementsByClassName('third_page')[0];
   third_page.style.display = 'none';

//alert('reset');

var search_data_section = document.getElementsByClassName('search_data_section')[0];

search_data_section.style.display = 'flex';



var search_data2 = document.getElementsByClassName('search_data2')[0];

search_data2.style.display = 'none';


var search_data1 = document.getElementsByClassName('search_data1')[0];

search_data1.style.display = 'block';





var search_btn = document.getElementsByClassName('search_btn')[0];
search_btn.style.display = 'flex';

var search_reset = document.getElementsByClassName('search_reset')[0];
search_reset.style.display = 'none';

var user_or = document.getElementsByClassName('user_or')[0];
user_or.style.display = 'flex';

var se_btn = document.getElementsByClassName('se_btn')[0];
se_btn.style.display = 'flex';

var search_value_section = document.getElementsByClassName('search_value_section')[0];
search_value_section.style.display = 'hidden';
search_value_section.style.width = '0%';
search_value_section.style.opacity = '0';
search_value_section.style.transition = 'all 1s linear';


    var search_input = document.getElementsByClassName('search_input')[0];
    search_input.style.width = '0px';
    search_input.style.transition = 'all 1s linear';



    var select_cc = document.getElementsByClassName('select_cc')[0];
select_cc.style.display = 'none';


var fetc = document.getElementsByClassName('fetc')[0];
fetc.style.display = 'none';











var search_i = document.getElementsByClassName('search_input')[0];
//alert(search_i.value.length);

search_i.value = "";



   var result = document.getElementsByClassName('result')[0];
   result.innerHTML = "";


    
}












//update region




function update_all(){
    //alert('ok');

    const combined_id = event.currentTarget.id;
    const active_id = combined_id.replaceAll('update_', "").trim();
      //alert(active_id);

    const updated_value_in_view = document.getElementById(active_id).value;
    //alert(updated_value_in_view);
    let table_column= active_id;

    table_column == 'product' ? table_column = 'security_items' : table_column;

    //alert(table_column);
 
  
 
    var table_id = document.getElementById('id');
    var table_id_value =  table_id.innerHTML;

       //alert(table_id_value);

 
 
       var category = document.getElementById('category');
       var category_value = category.value;
 
     //alert(category_value);
   
      var xmlhttp;
      xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
      if(xmlhttp.readyState==4 && xmlhttp.status==200){
      
   
         //var response = JSON.parse(xmlhttp.responseText);
         var response = xmlhttp.responseText;

         //alert (response);
   
         if(response == 'updated'){
            alert('Updated successfully');
         }
   
   
   
   
      }
   
   
   }
   
   
   
      xmlhttp.open('POST', 'dataupdate2.php');
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send('table_column='+table_column+'&table_id='+table_id_value+'&table_name='+category_value+'&updated_table_column_value='+updated_value_in_view );
 
 
 
 
 
 
 
 }
 












 function fetch_class(){
   //alert('fetch');

   //beginning of category select

   var selected_class = document.getElementById('selected_class');
   var selected_class_value = selected_class.value;




   var selected_values = document.getElementById('selected_values');
   selected_values.innerHTML = selected_class_value;

   //alert(selected_arm_value);



   if(selected_class_value !== "Category" ){
      //alert('ok');


      var search_data_section = document.getElementsByClassName('search_data1')[0];

      search_data_section.style.display = 'none';
   
   
      var search_data_section = document.getElementsByClassName('search_data2')[0];
   
      search_data_section.style.display = 'block';











         var xmlhttp;
   xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
   

       //var response = JSON.parse(xmlhttp.responseText);
       var response = xmlhttp.responseText;

       var class_result = document.getElementsByClassName('class_result')[0];
       class_result.innerHTML = response;

      
       //fetch_function();
       fetched_cla();



       
    }


   }
   
   
   
      xmlhttp.open('POST', 'fetch_class.php');
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send('category='+selected_class_value);




      
   

   }

 


//alert('ok');




 }









function fetched_cla(){
   //alert('ok');



  

   
   var fetch_class_id = document.querySelectorAll('.class_item');
   var length_feched = fetch_class_id.length;
   //alert(length_feched);

   for(i=0; i<length_feched; i++){
   var fetched_classes = document.getElementsByClassName('class_item')[i];

   fetched_classes.addEventListener('click', fetch_function);


}



}





function fetch_function(){
   //alert(this.id);

   var search_data_section = document.getElementsByClassName('search_data1')[0];

   search_data_section.style.display = 'block';


   var search_data_section = document.getElementsByClassName('search_data2')[0];

   search_data_section.style.display = 'none';

   var idv = this.id;

 
 var xmlhttp_x;
 xmlhttp_x = new XMLHttpRequest();
 xmlhttp_x.onreadystatechange = function(){
 if(xmlhttp_x.readyState==4 && xmlhttp_x.status==200){


     
      var response = JSON.parse(xmlhttp_x.responseText);

       //var response = xmlhttp_x.responseText;

       //select aspect control
       

       //console.log(response);


       var passport_name = document.getElementById('passport_picture');
      passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";

      
      
      
      
      passport_name.innerHTML ="<img src='../store/products/"+response.list.image+"'>";


      var id = document.getElementById('id');
       id.innerHTML = response.list.id;

       var product = document.getElementById('product');
       product.value = response.list.security_items;


       var description = document.getElementById('description');
       description.value = response.list.description;


       var ratings = document.getElementById('ratings');
       ratings.value = response.list.ratings;


       var price = document.getElementById('price');
       price.value = response.list.price;


       var category = document.getElementById('category');
       category.value = response.list.category;



   

 }

}




xmlhttp_x.open('POST', 'record.php');
xmlhttp_x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp_x.send('searched='+ idv);






}

























 function create_new_record(){
   //alert('ok');
   var total_student = document.getElementsByClassName('total_student')[0];
   total_student.style.display = 'none';

   var student_classes = document.getElementsByClassName('student_classes')[0];
   student_classes.style.display = 'none';

   var second_page = document.getElementsByClassName('second_page')[0];
   second_page.style.display = 'none';



   var third_page = document.getElementsByClassName('third_page')[0];
   third_page.style.display = 'block';


   var windows_width = window.innerWidth;

   if(windows_width <500){
      menu_close();
   }
   
 }
 














   //alert('ok');

  async function upload_new_record(){





      var category= document.getElementById('category_create');
      var product = document.getElementById('product_create');
      var description = document.getElementById('description_create');
      var ratings = document.getElementById('ratings_create');
      var price = document.getElementById('price_create');
      


            
      if(category.value != "" & product.value != "" & description.value != "" & price.value != "" & ratings.value != "Ratings") {




         let formData = new FormData();
         formData.append("file", image_file_1.files[0]);
         formData.append("table_name", category.value);
         //sex is the posted value i.e, $_POST['sex']

         formData.append("product", product.value);

         formData.append("description", description.value);
         formData.append("ratings", ratings.value);
         formData.append("price", price.value);
        
        





         

          await fetch('new_user_image_upload.php', {method:"POST", body:formData})
           .then(res => res.json())
           .then(data => {
            if(data.reply == 'created'){
               alert('product has been added successfully');

               document.getElementById('category_create').value = "";
               document.getElementById('product_create').value = "";
               document.getElementById('description_create').value = "";
               document.getElementById('ratings_create').value = "";
               document.getElementById('price_create').value = "";
               document.getElementById('image_file_1').value = "";
            }
            else{
               alert('something went wrong, try again!');
            }
           } );


         //       //alert('the file has been uploaded');

           // const user = await response.json();

           



      }

               
            

         
               
               
             








         }



               











   async function update_passport(){
      //alert('good');
     // var identifier = document.getElementById('identifier').value;

      var id = document.getElementById("id").innerHTML;
      var table_name = document.getElementById("category").value;
      var product = (document.getElementById("product").value).replaceAll(' ', '_');
      //table_column == 'product' ? table_column = 'security_items' : table_column;

      let formDatax = new FormData();
      formDatax.append("image_x", image_file.files[0]);
      

      formDatax.append("id", id);
      formDatax.append("table_name", table_name);
      formDatax.append("product", product);

      await fetch('image_upload.php', {method:"POST", body:formDatax});
      //alert(identifier);





         var xmlhttp;
         xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function(){
         if(xmlhttp.readyState==4 && xmlhttp.status==200){
   
      
            
            var response = JSON.parse(xmlhttp.responseText);
   
   
            var passport_name = document.getElementById('passport_picture');
         // passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";
   
            passport_name.innerHTML ="<img src='../store/products/"+response.list.passport_name+"'>";


            
            }

         }




         xmlhttp.open('POST', 'image_upload2.php');
         xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xmlhttp.send('id='+id+'&table_name='+table_name+'&product='+product);


  
   }