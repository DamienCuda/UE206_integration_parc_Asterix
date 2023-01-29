var nav_toggle_open = document.querySelector('#nav_toggle_open');
var nav_list = document.querySelector('#nav_list');
var video_modal = document.querySelector('#video_modal');
var iframe_modal = document.querySelector('#video_modal iframe');
var open_modal = document.querySelector('#open_modal');
var nav_toggle_open = document.querySelector('#nav_toggle_open');
var nav_height = document.querySelector('#main_header').offsetHeight;


// Définition de la hauteur de la nav bar pour le scroll padding
document.documentElement.style.setProperty('--scrol-padding', nav_height + 'px')

// Toggle de la navbar sur petit écran
nav_toggle_open.addEventListener('click', () => {
    console.log('ok');
    nav_list.classList.toggle('open');
    nav_toggle_open.classList.toggle('open');
})

// Gestion modal de vidéo et empechement du scroll lorsqu'elle est ouverte
open_modal.addEventListener('click', () => {
    iframe_modal.setAttribute('src', "https://www.youtube.com/embed/eFuv9H3aMQ4");
    video_modal.toggleAttribute('open');
    document.body.style.position = 'fixed';
})
video_modal.addEventListener('click', () =>{
    video_modal.toggleAttribute('open');
    iframe_modal.toggleAttribute('src');
    document.body.style.position = '';
})