/* zavolam FCI dropDownArrows() */


// menu variables
const menuMob = document.getElementsByClassName("_header-wrapper")[0];
const menu = document.getElementsByClassName("header")[0];
const textShow = document.getElementsByClassName("_show-menu")[0];
const textHide = document.getElementsByClassName("_hide-menu")[0];
const burger = document.getElementById("burger-icon");
const close = document.getElementById("close-icon");
const menuImg = document.getElementsByClassName("logo-img")[0];
const menuItem = document.querySelectorAll("header .menu-item a");
const subM = document.getElementsByClassName("arrow__up");

/* bile menu na telefonu */

if (window.innerWidth < 991) {
  whiteNav();
}

/****************************\
    EVENTLISTENERY
\****************************/

/* eventlistener na resize */
window.addEventListener("resize", () => {
  scrollNav(window.pageYOffset);
});

/* pri scrollu vola FCI scrollNav() */
window.addEventListener("scroll", e => {
  scrollNav(window.pageYOffset);
});

/* kdyz se klikne na 'menu-item-has-children' ukaz submenu */
/* submenu listener, pokud ma deti je z nej schovany dropdown */
const submenu = document.querySelectorAll(".sub-menu");


/* kdyz je kurzor na menu zmen ho na bilo */
menu.addEventListener("mouseover", () => {
  if (window.innerWidth >= 991) {
    whiteNav();
  }
});

/* kdyz kurzor odejde z menu dej ho zpet na transparent pokud je uzivatel uplne na hore a submeny schovej */
menu.addEventListener("mouseleave", () => {
  if (window.innerWidth >= 991) {
    if (window.pageYOffset === 0) {
      transNav();
    }
  }

  //resetSubmenu(false, 'e');
});

/****************************\
    FUNKCE
\****************************/

/* FCE pokud je uzivatel nahore bude menu trasparentni, pokud jinde bude bile*/
function scrollNav(position) {
  if (window.innerWidth >= 991) {
    if (position === 0) {
      transNav();
    } else {
      whiteNav();
    }
  } else {
    whiteNav();
  }
}

/* FCE pro bilou navigaci --upravit :\\ */
function whiteNav() {
  menu.style.backgroundColor = "white";
  menu.classList.add("header--shadow");
  close.classList.remove("icon-close_icon--white");
  close.classList.add("icon-close_icon--dark");
  burger.classList.remove("icon-burger_menu--white");
  burger.classList.add("icon-burger_menu--dark");
  textShow.style.color = "#303e42";
  textHide.style.color = "#303e42";
  menuImg.setAttribute(
    "src",
    `${window.location.protocol}//${window.location.host}/wp-content/themes/bie/img/logo_color.svg`
  );

  for (let i = 0; i < menuItem.length; i++) {
    menuItem[i].style.color = "#303e42";
  }

  if (window.screen.width >= 991) {
    menuMob.classList.remove("header--shadow");
    for (let j = 0; j < subM.length; j++) {
      if (!subM[j].classList.contains("arrow__down--blue")) {
        subM[j].classList.add("arrow__up--dark");
      }
    }
  } else {
    menuMob.style.backgroundColor = "white";
    menuMob.classList.add("header--shadow");
  }
}

/* FCE pro pruhlednou navigaci --upravit :\\ */
function transNav() {
  menu.style.backgroundColor = "transparent";
  menu.classList.remove("header--shadow");
  close.classList.remove("icon-close_icon--dark");
  close.classList.add("icon-close_icon--white");
  burger.classList.remove("icon-burger_menu--dark");
  burger.classList.add("icon-burger_menu--white");
  textShow.style.color = "white";
  textHide.style.color = "white";
  menuImg.setAttribute(
    "src",
    `${window.location.protocol}//${window.location.host}/wp-content/themes/bie/img/logo_white.svg`
  );

  if (window.screen.width >= 991) {
    menuMob.style.backgroundColor = "transparent";
    menuMob.classList.remove("header--shadow");
    for (let i = 0; i < menuItem.length; i++) {
      menuItem[i].style.color = "white";
    }

    for (let j = 0; j < subM.length; j++) {
      if (!subM[j].classList.contains("arrow__down--blue")) {
        subM[j].classList.remove("arrow__up--dark");
      }
    }
  } else {
    menuMob.style.backgroundColor = "transparent";
  }
}
