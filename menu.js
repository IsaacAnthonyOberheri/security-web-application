const menu_btn = document.getElementsByClassName("menu_btn")[0];
menu_btn.addEventListener("click", open_close);

function open_close(){
    const menu_section = document.getElementsByClassName("menu_section");
    menu_section[0].classList.toggle('menu_section_active');
    menu_section[0].style.transition = 'all 0.3s linear';
    hideContent();
}









if (screen.width > 1000){

    const service_lists_click = document.getElementsByClassName('service_lists');
    service_lists_click[0].addEventListener("click", showContent);
    
    function showContent(){
        var showContent = document.getElementsByClassName("service_lists_content");
        showContent[0].style.display = "block";
        const service_lists = document.getElementsByClassName("service_lists");
        service_lists[0].setAttribute("onClick", "hideContent()");
       
        
        
    }

    const service_lists = document.getElementsByClassName('service_lists');
    service_lists[0].addEventListener("mouseover", showContent);
    
    function showContent(){
        var showContent = document.getElementsByClassName("service_lists_content");
        showContent[0].style.display = "block";
        const service_lists = document.getElementsByClassName("service_lists");
        service_lists[0].setAttribute("onClick", "hideContent()");
        
        
    }
    
    function hideContent(){
        var showContent = document.getElementsByClassName("service_lists_content");
        showContent[0].style.display = "none";
        const service_lists = document.getElementsByClassName("service_lists");
        service_lists[0].removeAttribute("onClick", "hideContent()");
        
    }


    var sr_list = document.querySelectorAll(".sr_list");
    var length = sr_list.length;
    //console.log(length);
    for(i=0; i<length; i++){
        sr_list[i].addEventListener("mouseover", hover);
        sr_list[i].addEventListener("mouseout", removeHover);


    }

    function hover(e){
        const identity = this.id;
        var finding = document.getElementById(identity+'new');
        finding.setAttribute("class", "service_branches_lists active");
    }


    function removeHover(e){
        const identity = this.id;
        var finding = document.getElementById(identity+'new');
        finding.setAttribute("class", "service_branches_lists");
    }

}






if (screen.width < 1000){

    const service_lists = document.getElementsByClassName('service_lists');
    service_lists[0].addEventListener("click", showContent);
    
    function showContent(){
        var showContent = document.getElementsByClassName("service_lists_content");
        showContent[0].style.display = "block";
        const service_lists = document.getElementsByClassName("service_lists");
        service_lists[0].setAttribute("onClick", "hideContent()");
       
        
        
    }
    
    function hideContent(){
        var showContent = document.getElementsByClassName("service_lists_content");
        showContent[0].style.display = "none";
        const service_lists = document.getElementsByClassName("service_lists");
        service_lists[0].removeAttribute("onClick", "hideContent()");
       
        
    }









    var sr_list = document.querySelectorAll(".sr_list");
    var length = sr_list.length;
   
    const allId = [];
    const allId_length = allId.length;
    
    for(i=0; i<length; i++){
        sr_list[i].addEventListener("click", hover);
        const fetch_ids = sr_list[i].getAttribute('id');
        allId.push(fetch_ids);
       
    }

    let old_id = [];
    

    function hover(e){

        const identity = this.id;
        var oldLen = old_id.length;
        
        old_id.push(identity);
        

        if( old_id[oldLen-1] == old_id[oldLen] ){
            var finding = document.getElementById(identity+'new');
            var prevId = document.getElementById(identity+"new");
            prevId.classList.toggle("service_branches_lists_active");
            

        }

        if( old_id[oldLen-1] !== old_id[oldLen] ){
            var finding = document.getElementById(identity+'new');
            finding.classList.add("service_branches_lists_active");
            
            var prevId = document.getElementById(old_id[oldLen-1]+"new");
                prevId.classList.remove("service_branches_lists_active");
        }

        //console.log(old_id[oldLen-1]);

      
        
         
    
    }
    






































        // var sr_list = document.querySelectorAll(".sr_list");
    // var length = sr_list.length;
    // //console.log(length);
    // for(i=0; i<length; i++){
    //     sr_list[i].addEventListener("mouseover", hover);
    //     sr_list[i].addEventListener("mouseout", removeHover);


    // }

    // function hover(e){
    //     const identity = this.id;
    //     var finding = document.getElementById(identity+'new');
    //     finding.setAttribute("class", "service_branches_lists active");
    // }


    // function removeHover(e){
    //     const identity = this.id;
    //     var finding = document.getElementById(identity+'new');
    //     finding.setAttribute("class", "service_branches_lists");
    // }



    
}


















