const date = new Date();
const day = date.getDay();

const days_array = [
    'Sun',
    'Mon',
    'Tue',
    'Wed',
    'Thur',
    'Fri',
    'Sat',
    

];



const today =  days_array[day];
const cr_timing_active = document.getElementById(today);
cr_timing_active.setAttribute("class", "cr_timing active");
//console.log(day);










function sendRequest(){

    let increase = 0;

    function gifShow(){
        var processing = document.getElementById('processing');
    
        //increase += 1
        //let new_value = (360 * increase);
       // processing.style.transform = 'rotate('+new_value+'deg)';
        processing.style.display = 'block';
        processing.style.transition = 'all 1s';
        //console.log(new_value);
        var main_send = document.getElementById('main_send');
        main_send.style.display = 'none';
    }

    function gif_Close(){
        var processing = document.getElementById('processing');
        processing.style.display = 'none';
        var main_send = document.getElementById('main_send');
        main_send.style.display = 'block';
    }



    const names = document.getElementsByClassName('names_dre')[0];
    const nameValue = names.value;

    var email = document.getElementById('email');
    var emailValue = email.value;

    var message = document.getElementById('message');
    var messageValue = message.value;

    var email = document.getElementById('email');
    var emailValue = email.value;



    var id_value = event.currentTarget.id;

    if(id_value == "inquiry"){
        var d_first = document.getElementsByClassName('d_first')[0];
        d_first.innerHTML = 'We have received your inquiry';

        var d_sec = document.getElementsByClassName('d_sec')[0];
        d_sec.innerHTML = 'We will get back to you soon';
    }

    
    if(nameValue.length > 1 & emailValue.length > 2 & messageValue.length > 3 ){

      const inter_s =  setInterval(gifShow, 600);
        

        var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){

        //var response = JSON.parse(xmlhttp.responseText);
        var response = xmlhttp.responseText;
        //console.log(response);
        if (response == 'sent'){
            var dboxx = document.getElementsByClassName('dboxx')[0];
            dboxx.style.display = 'flex';
            dboxx.style.transform = 'scale(1,1)';
            dboxx.style.transition = 'all 0.2s linear';

            var dbox_inside = document.getElementsByClassName('dbox_inside')[0];
            dbox_inside.style.transform = 'scale(1,1)';

            dbox_inside.style.transition = 'all 0.5s linear';

            email.value = '';
            names.value = '';
            message.value = "";

           clearInterval(inter_s);
           gif_Close();

            
        }


        }
    }    

    xmlhttp.open('POST', 'contactInformation.php');
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('names='+ nameValue+ '&email='+emailValue+'&message='+messageValue);



    }

    else{
        //alert('something wrong');
        if(nameValue.length < 1 ){
            names.style.border = '1px solid red';
        }
        if(emailValue.length < 1 ){
            email.style.border = '1px solid red';
        }

        if(messageValue.length < 1 ){
            message.style.border = '1px solid red';
        }
    }
    
}


function close_box(){
            var dboxx = document.getElementsByClassName('dboxx')[0];
            dboxx.style.display = 'none';
            dboxx.style.transform = 'scale(0,0)';
            dboxx.style.transition = 'all 0.2s linear';

            var dbox_inside = document.getElementsByClassName('dbox_inside')[0];
            dbox_inside.style.transform = 'scale(0,0)';

            dbox_inside.style.transition = 'all 0.5s linear';
}
                
