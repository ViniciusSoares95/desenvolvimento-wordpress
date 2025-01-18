let dropdwn = document.querySelector('.menu'); // ul
submenu = document.querySelector('.sub-menu'); //ul li ul
buttonClick = document.querySelector('.check-button'); // button
hamburger = document.querySelector('.menu-icon'); //icone do menu

buttonClick.addEventListener('click', () => {
    dropdwn.classList.toggle('show-dropdown');
    if(submenu) {
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
})
