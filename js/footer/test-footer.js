

console.log('hi footer');




dropDownArrows();

// menu variables
const menuMob = document.getElementsByClassName('_header-wrapper')[0];
const menu = document.getElementsByClassName('header')[0];
const textShow = document.getElementsByClassName('_show-menu')[0];
const textHide = document.getElementsByClassName('_hide-menu')[0];
const burger = document.getElementById('burger-icon');
const close = document.getElementById('close-icon');
const menuImg = document.getElementsByClassName('logo-img')[0];
const menuItem = document.querySelectorAll('.menu-item a');
const subM = document.getElementsByClassName('arrow__up');





window.addEventListener('scroll', (e) => {
    scrollNav(e.path[1].scrollY);

})

const submenu = document.querySelectorAll('.sub-menu');


/* clik event listener */
window.addEventListener('click', (e) => {
    /* submenu listener */
    if(e.path[1].classList.contains('menu-item-has-children')) {
        dropDown(e);
    } else {
        console.log('clicked elsewhere but revealed');
        let subMenus = document.getElementsByClassName('sub-menu');

        for(let j = 0; j<subM.length; j++) {
            console.log(subM[j]);
            if(subM[j].classList.contains('arrow__up--blue')) {
                subM[j].classList.remove('arrow__up--blue');
            }
        }

        for(let i = 0; i<subMenus.length; i++) {
            let revealedMenu = subMenus[i];
            console.log(revealedMenu.style.maxHeight);
            if(revealedMenu.style.maxHeight != 0) {
                revealedMenu.style.maxHeight = null;
                let el = document.getElementsByClassName('sub-menu--revealed')[0];
                el.classList.remove('sub-menu--revealed'); 
            }
        }
    }

})

menu.addEventListener('mouseover', () => {
    whiteNav();
})

menu.addEventListener('mouseleave', () => {
    if(window.scrollY === 0) {
        transNav();
    }
})



/* On scroll change color of Menu to white, else remain transparent */
function scrollNav(scrollY) {
    if(scrollY === 0) {
        transNav();
    } else {
        whiteNav();
    }
}

function whiteNav() {
    menu.style.backgroundColor = 'white';
    menu.classList.add('header--shadow');
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
        for(let j = 0; j<subM.length; j++) {
            if(!subM[j].classList.contains('arrow__down--blue')) {
                subM[j].classList.add('arrow__up--dark');
            }
        }
    } else { menuMob.style.backgroundColor = 'white'; } 
}

function transNav() {
    menu.style.backgroundColor = 'transparent';
    menu.classList.remove('header--shadow');
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

        for(let j = 0; j<subM.length; j++) {
            if(!subM[j].classList.contains('arrow__down--blue')) {
                subM[j].classList.remove('arrow__up--dark');
            }
        }
    } else { menuMob.style.backgroundColor = 'transparent'; }
}

function dropDownArrows() {

    let subMenuItems = document.getElementsByClassName('menu-item-has-children');
    for(let i = 0; i<subMenuItems.length; i++) {
        let span = document.createElement('span');
        span.classList.add('arrow__up');
        let subMenuItem = subMenuItems[i].firstChild;
        subMenuItem.appendChild(span);
    }
}

function dropDown(event) {
    event.target.classList.toggle('sub-menu--revealed');
    console.log(event.target.children[0]);
    event.target.children[0].classList.toggle('arrow__up--blue');
    
    let target = event.path[1].children[1];

    

    if(window.screen.width >= 991) {
        if(target.style.maxHeight) {
            target.style.maxHeight = null;
        } else {
            target.style.maxHeight = target.scrollHeight + 'px';
        }

    } else {
        if(target.style.maxHeight) {
            target.style.maxHeight = null;
        } else {
            target.style.maxHeight = target.scrollHeight + 'px';
        }
    }
}

