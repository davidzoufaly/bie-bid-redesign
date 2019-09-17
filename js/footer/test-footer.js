console.log('hi footer');



const menuMob = document.getElementsByClassName('_header-wrapper')[0];
const menu = document.getElementsByClassName('header')[0];
const textShow = document.getElementsByClassName('_show-menu')[0];
const textHide = document.getElementsByClassName('_hide-menu')[0];
const burger = document.getElementById('burger-icon');
const close = document.getElementById('close-icon');
const menuImg = document.getElementsByClassName('logo-img')[0];
const menuItem = document.querySelectorAll('.page_item a');

window.addEventListener('scroll', (e) => {
    scrollNav(e.path[1].scrollY);

})

/* On scroll change color of Menu to white, else remain transparent */
function scrollNav(scrollY) {
    if(scrollY === 0) {
        menu.style.backgroundColor = 'transparent';
        close.classList.remove('icon-close_icon--dark');
        close.classList.add('icon-close_icon--white');
        burger.classList.remove('icon-burger_menu--dark');
        burger.classList.add('icon-burger_menu--white');
        textShow.style.color = 'white';
        textHide.style.color = 'white';
        menuImg.setAttribute('src', 'http://localhost:8080/wp-content/themes/bie/img/czech-us_transparent_1.png');
        
        if(window.screen.width >= 991) {
            for(let i = 0; i< menuItem.length; i++) {
                menuItem[i].style.color = 'white';
            }
        } else { menuMob.style.backgroundColor = 'transparent'; }
            

    } else {
        menu.style.backgroundColor = 'white';
        close.classList.remove('icon-close_icon--white');
        close.classList.add('icon-close_icon--dark');
        burger.classList.remove('icon-burger_menu--white');
        burger.classList.add('icon-burger_menu--dark');
        textShow.style.color = '#303e42';
        textHide.style.color = '#303e42';
        menuImg.setAttribute('src', 'http://localhost:8080/wp-content/themes/bie/img/czech-us_transparent.png');
        
        if(window.screen.width >= 991) {
            for(let i = 0; i< menuItem.length; i++) {
                menuItem[i].style.color = '#303E42';
            }
        } else { menuMob.style.backgroundColor = 'white'; }
        


        
    }
}