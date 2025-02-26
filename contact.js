
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