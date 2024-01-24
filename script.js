const navbar = document.querySelector('.navbar');
const menuBar = document.querySelector('.menu');
const closeIcon = document.querySelector('.close');
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.reg-link');
const btnpopup = document.querySelector('.loginbtn');
const iconClose = document.querySelector('.icon-close');


 menuBar.addEventListener('click', ()=>{
    navbar.classList.add('active');
});

closeIcon.addEventListener('click', ()=>{
    navbar.classList.remove('active');
});


registerLink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
});





function nextbutton(){
    document.getElementById('header').style.display='none';
    document.getElementById('input-quantity').style.display='block';
}
function transaction(){
    document.getElementById('order').style.display='none';
    document.getElementById('payment').style.display='initial';
}
function back(){
    document.getElementById('payment').style.display='none';
    document.getElementById('order').style.display='initial';
}
