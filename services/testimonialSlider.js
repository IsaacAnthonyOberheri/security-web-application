
const testimonial_items = document.getElementsByClassName("testimonial_items");
const width = testimonial_items[0].clientWidth;
//the above is the width of each item in the slider

const testimonial = document.querySelectorAll('.testimonial_items');
const items_length = testimonial.length;
//the above is the total items in the slider

var item_mover = document.getElementsByClassName('item_mover');
var item_mover_width = item_mover[0].clientWidth;
//the above is the width of the casing holding all the slider
//which is to adjust by the width of one of the items

var limit = Math.round(item_mover_width / width);
// limit = number of item boxes to fit in the item_mover frame

var hidden_left_items = item_mover[0].style.marginLeft = -width * limit+'px';
//because some values are repeated at the top initially of the slider html
//which served to enable a seamless flow, we need to adjust it by using a
//negative MarginLeft to hide it
//i.e width of each item box * how many item box can fit in the frame 
// i.e width * limit



const slider_control_circles = document.querySelectorAll(".slider_control_circles");
const sl_ct_length = slider_control_circles.length;
//console.log(sl_ct_length);


let count = 0;
function moveRight(){
   
        count = count + 1;
        if(count <= items_length-(2*limit)){
            //limit is multiplied by 2 because the number of items that can be
            //fit the item_mover frame was added to both the start and the finish
            
            item_mover[0].style.transform = 'translateX('+ -width*count +'px)';
           item_mover[0].style.transition = 'all 0.5s linear';

           let newCount = count + limit;
           var item_active = document.getElementById('test_item_'+newCount+'_btn');
            item_active.style.backgroundColor = 'blue';

            let reducedCount = newCount - 1;
            var item_not_active = document.getElementById('test_item_'+reducedCount+'_btn');
                item_not_active.style.backgroundColor = 'white';
        }
        else{
            count = 0;
            item_mover[0].style.transform = 'translateX('+ -width*count +'px)';     
            item_mover[0].style.transition = 'all 0s';

            let reducedCount = newCount - 1;
            var item_not_active = document.getElementById('test_item_'+reducedCount+'_btn');
                item_not_active.style.backgroundColor = 'white';
        }

     

   
        
}

setInterval(moveRight, 3000);



function moveLeft(){
    count = count - 1;
    //console.log(count);
    if(count >= -(limit) ){
        // limit = number of item boxes to fit in the item_mover frame
        //since count is falling to negative, limit has to be set to negative

        item_mover[0].style.transform = 'translateX('+ -width*count +'px)';
       item_mover[0].style.transition = 'all 0.5s linear';
       //console.log(count)
       
       
       let newCount = count < 0 ? (items_length-(limit-1) + count) :  (count+1+limit);
       var item_active = document.getElementById('test_item_'+newCount+'_btn');
        item_active.style.backgroundColor = 'blue';

        let reducedCount = newCount == parseInt(limit+1) ? parseInt(newCount-1) : newCount + 1;
        var item_not_active = document.getElementById('test_item_'+reducedCount+'_btn');
            item_not_active.style.backgroundColor = 'white';

        // console.log('newCount = ' + newCount);
        // console.log('limit = ' + parseInt(limit+1));
        // console.log('reducedCount = ' + reducedCount);
    
    }
    else{
        count = items_length-(2*limit-1) + count;

        //console.log('else count =' +count);
        
        //count has to be set to the exact number it was before reaching the
        //else condition 

        item_mover[0].style.transform = 'translateX('+ -width*count +'px)';
        item_mover[0].style.transition = 'all 0s';

        
    }


    

}




