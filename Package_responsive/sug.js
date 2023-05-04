burger= document.querySelector('.burger')
nav_button= document.querySelector('.nav_button')
search= document.querySelector('.search')
high= document.querySelector('.high')



burger.addEventListener ('click',()=>{
    nav_button.classList.toggle('v-class');
    search.classList.toggle('v-class');
    nav_button.classList.toggle('high');
    search.classList.toggle('high');


})
 