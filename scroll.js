window.addEventListener('scroll', function(){

let screenHeight = window.innerHeight;

//console.log("content position = " +content_position+ " screen height = " +screenHeight);


//Beginning of intro section


    var intro_container = document.getElementsByClassName('introContainer')[0];
    let intro_position = intro_container.getBoundingClientRect().top;

    if (intro_position < screenHeight){
        const intro_header = document.getElementsByClassName('intro_header')[0];
        intro_header.classList.add("active");
        intro_header.style.transition = 'all 1s linear';
        
        //alert('less than');

        const intro_image = document.getElementsByClassName("intro_image")[0];
        intro_image.classList.add('active');
        intro_image.style.transition = 'all 1s linear';


        const intro_right_header = document.getElementsByClassName("intro_right_header")[0];
        intro_right_header.classList.add('active');
        intro_right_header.style.transition = 'all 1.3s linear';

    }
    else{
        const intro_header_x = document.getElementsByClassName('intro_header')[0];
        intro_header_x.classList.remove("active");
        intro_header_x.style.transition = 'all 1s linear';
        //alert('less than');

        const intro_image = document.getElementsByClassName("intro_image")[0];
        intro_image.classList.remove('active');
        intro_image.style.transition = 'all 1s linear';

        const intro_right_header = document.getElementsByClassName("intro_right_header")[0];
        intro_right_header.classList.remove('active');
        intro_right_header.style.transition = 'all 1s linear';
    }


//End of intro section













//Beginning of Consulting Service Section


var consultingServicesContainer = document.getElementsByClassName('consultingServicesContainer')[0];
let consultingServicesContainer_position = consultingServicesContainer.getBoundingClientRect().top;

    if (consultingServicesContainer_position < screenHeight){
        const services_title = document.getElementsByClassName('services_title')[0];
        services_title.classList.add("active");
        services_title.style.transition = 'all 1s linear';
        
        }
    else{
        const services_title = document.getElementsByClassName('services_title')[0];
        services_title.classList.remove("active");
        services_title.style.transition = 'all 1s linear';   
    
    
    }


    const services_l = document.querySelectorAll('.service_services')
    const services_length = services_l.length;


for(i=0; i<services_length; i++){

    var service_1 = document.getElementsByClassName('service_services')[i];
    var service_1_position = service_1.getBoundingClientRect().top;

    if(service_1_position < screenHeight){
        const service_1x = document.getElementsByClassName('service_services')[i];
        service_1x.classList.add("active");
        service_1x.style.transition = 'all 1s linear';
    }
    else{
        const service_1x = document.getElementsByClassName('service_services')[i];
        service_1x.classList.remove("active");
        service_1x.style.transition = 'all 0s linear';
    }



}


   
    







//End of Consulting Service Section

















//Beginning of FAQ Section


var faqContainer = document.getElementsByClassName('faqContainer')[0];
let faqContainer_position = faqContainer.getBoundingClientRect().top;

if (faqContainer_position < screenHeight){
   


    const faq_header = document.getElementsByClassName('faq_header')[0];
    faq_header.classList.add("active");
    faq_header.style.transition = 'all 1s linear';
    
      
        //console.log(cc);

    }
    

else{
  


    const faq_header = document.getElementsByClassName('faq_header')[0];
    faq_header.classList.remove("active");
    faq_header.style.transition = 'all 1s linear';
    
    //alert('less than');


}





const faq_drops_l = document.querySelectorAll('.faq_drops')
const faq_drops_length = faq_drops_l.length;


for(i=0; i<faq_drops_length; i++){

var faq_drops = document.getElementsByClassName('faq_drops')[i];
var faq_drops_position = faq_drops.getBoundingClientRect().top;

if(faq_drops_position < screenHeight){
    const faq_drops_x = document.getElementsByClassName('faq_drops')[i];
    faq_drops_x.classList.add("active");
    faq_drops_x.style.transition = 'all 0.5s linear';
}
else{

    const faq_drops_x = document.getElementsByClassName('faq_drops')[i];
    faq_drops_x.classList.remove("active");
    faq_drops_x.style.transition = 'all 0s linear';
}



}





//End of FAQ Section

















//Beginning of Testimonial slider


var testimonialContainer = document.getElementsByClassName('testimonialContainer')[0];
let testimonialContainer_position = testimonialContainer.getBoundingClientRect().top;

if (testimonialContainer_position < screenHeight){
   
    testimonialContainer.classList.add("active");
    testimonialContainer.style.transition = 'all 1s linear';
    
    //alert('less than');

    
    



}
else{

    testimonialContainer.classList.remove("active");
    testimonialContainer.style.transition = 'all 1s linear';

    //alert('less than');





}


//End of Testimonial Slider
















//Beginning of Contact section


var contactContainer = document.getElementsByClassName('contactContainer')[0];
let contactContainer_position = contactContainer.getBoundingClientRect().top;

if (contactContainer_position < screenHeight){
    const contact_left = document.getElementsByClassName('contact_left')[0];
    contact_left.classList.add("active");
    contact_left.style.transition = 'all 1s linear';
    
    //alert('less than');

    const contact_right = document.getElementsByClassName("contact_right")[0];
    contact_right.classList.add('active');
    contact_right.style.transition = 'all 1s linear';


 
}
else{
    const contact_left = document.getElementsByClassName('contact_left')[0];
    contact_left.classList.remove("active");
    contact_left.style.transition = 'all 1s linear';
    
    //alert('less than');

    const contact_right = document.getElementsByClassName("contact_right")[0];
    contact_right.classList.remove('active');
    contact_right.style.transition = 'all 1s linear';
}


//End of Contact section








});