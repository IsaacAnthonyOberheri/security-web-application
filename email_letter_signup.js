function signup(){

    let increase = 0;

    function gifShow(){
        var processing = document.getElementById('processing_s');
    
        //increase += 1
        //let new_value = (360 * increase);
       // processing.style.transform = 'rotate('+new_value+'deg)';
        processing.style.display = 'block';
        processing.style.transition = 'all 1s';
        //console.log(new_value);
        var main_send = document.getElementById('main_send_s');
        main_send.style.display = 'none';
    }

    function gif_Close(){
        var processing = document.getElementById('processing_s');
        processing.style.display = 'none';
        var main_send = document.getElementById('main_send_s');
        main_send.style.display = 'block';
    }



    

    var signup_email = document.getElementById("signup_email");
    var emailValue = signup_email.value;

    var id_value = event.currentTarget.id;

    if(id_value == "email_subscribers"){
        var d_first = document.getElementsByClassName('d_first')[0];
        d_first.innerHTML = 'Thanks for Subscribing';

        var d_sec = document.getElementsByClassName('d_sec')[0];
        d_sec.innerHTML = 'A 10% Bonus Awaits You!';
    }

    if(emailValue.length > 2  ){

        const inter_s =  setInterval(gifShow, 600);

        var xmlhttp;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
    
            //var response = JSON.parse(xmlhttp.responseText);
            var response = xmlhttp.responseText;
            //console.log(response+' from services');
            if (response == 'sent'){
                var dboxx = document.getElementsByClassName('dboxx')[0];
                dboxx.style.display = 'flex';
                dboxx.style.transform = 'scale(1,1)';
                dboxx.style.transition = 'all 0.2s linear';
    
                var dbox_inside = document.getElementsByClassName('dbox_inside')[0];
                dbox_inside.style.transform = 'scale(1,1)';
    
                dbox_inside.style.transition = 'all 0.5s linear';

                signup_email.value = '';

                clearInterval(inter_s);
                gif_Close();

                
            }
    
    
            }
        }    
    
        xmlhttp.open('POST', 'email_letter_signup.php');
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send('email='+emailValue);
    
    
    
        }
    
        else{
            //alert('something wrong');
       
            if(emailValue.length < 1 ){
                signup_email.style.border = '1px solid red';
            }
    
           
        }
}
