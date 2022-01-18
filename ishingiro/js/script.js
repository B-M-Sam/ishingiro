let searchForm = document.querySelector('.search-form-container');
let navbar = document.querySelector('.header .navbar');
let cart = document.querySelector('.shopping-cart-container');
let signupForm = document.querySelector('.signup-form-container');
let loginForm = document.querySelector('.login-form-container');



document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    signupForm.classList.remove('active');
    cart.classList.remove('active');    
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}



document.querySelector('#cart-btn').onclick = () =>{
    cart.classList.toggle('active');
    signupForm.classList.remove('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}



document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    signupForm.classList.remove('active');
    searchForm.classList.remove('active');
    cart.classList.remove('active');    
    navbar.classList.remove('active');
}




document.querySelector('#signup-btn').onclick = () =>{
    signupForm.classList.toggle('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
    cart.classList.remove('active');    
    navbar.classList.remove('active');
}




document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cart.classList.remove('active');    
    signupForm.classList.remove('active');
    loginForm.classList.remove('active');
}



document.querySelector('#return-btn').onclick = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cart.classList.remove('active');    
    signupForm.classList.remove('active');
    loginForm.classList.toggle('active');
}



window.onscroll = () =>{
    navbar.classList.remove('active');
}

document.querySelector('.home').onmousemove = (e) =>{

    let x = (window.innerWidth - e.pageX * 2) / 90;
    let y = (window.innerHeight - e.pageY * 2) / 90;

    document.querySelector('.home .home-parallax-img').style.transform = `translateX(${y}px) translateY(${x}px)`;
}

document.querySelector('.home').onmouseleave = () =>{

    document.querySelector('.home .home-parallax-img').style.transform = `translateX(0px) translateY(0px)`;
}   