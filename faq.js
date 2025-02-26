const faq_drop_question = document.querySelectorAll('.faq_drop_question');
const faq_length = faq_drop_question.length;

for(i=0; i<faq_length; i++){
    faq_drop_question[i].addEventListener('click', faqAnswer);
}



function faqAnswer(){
    const id = this.id;
    const lookUp = document.getElementById(id+'_answered');
    lookUp.classList.toggle('faq_drop_answer_active');
    
    const rotate_Icon = document.getElementById(id+'_icon');
    rotate_Icon.classList.toggle('fdr_icon_rotate');
    rotate_Icon.style.transition = 'all 0.2s linear';
    
    
}

//mechanism 
//1. each faq_drop_question have same class name, but different Id
//2. each faq_drop_answer have same class name but different id,
//but each id has initials of the class faq_drop_question id
//3. the icon also has initials of the class faq_drop_question id
//so all three share an initial of the id to enable us target all with
//few changes