let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

// for burger menu
menu.onclick= () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}; 

//during scroll the menu displat should get hidden
window.onscroll= () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

//for automatic autoplay of slides at homepage
var swiper = new Swiper(".home-slider", {
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    // navigation: {
        // nextEl: ".swiper-button-next",
        // prevEl: ".swiper-button-prev",
    // },
});

//to load more packages at package.php
let loadMoreBtn = document.querySelector('.package .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.package .box-container .box')];

    for(var i = currentItem; i<currentItem+3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;

    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}