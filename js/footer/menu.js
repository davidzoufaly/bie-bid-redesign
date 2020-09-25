// promenne pro ostatni menu fce
const menu = document.getElementsByClassName("header")[0];
const menuImg = document.getElementsByClassName("logo__img")[0];
const logo = document.getElementsByClassName('logo')[0];
const kb = document.getElementById('logo-kb');
const kbLogo = document.getElementsByClassName("kb")[0];
const paymentBtn = document.querySelector('#competition-buttons .btn--white');
let windowWidth = window.innerWidth;


document.addEventListener(
  "DOMContentLoaded", () => {

          /* mmenu js init */
          const mmenu = new MmenuLight(
                  document.querySelector( "#my-menu" )
          );

          const navigator = mmenu.navigation();
          const drawer = mmenu.offcanvas({position: 'right'});
          const menuTogglers = document.querySelectorAll( 'a[href="#my-menu"]' );
          [...menuTogglers].forEach((button) => {
              button.addEventListener( 'click', ( evnt ) => {
                  evnt.preventDefault();
                  drawer.open();
              });
          })

          /* zmen submeny <a> tagy na <span>. Lepsi vzhled menu knihovny. */ 
          const submenus = document.querySelectorAll('.mm-ocd .menu-item-has-children > a');
          [...submenus].forEach((submenu) => {
              let newContent = document.createElement('span');
              newContent.innerHTML = submenu.innerHTML;
              submenu.parentNode.appendChild(newContent);
              submenu.parentNode.removeChild(submenu);
          })

          const mobilMenuBreakingPoint = 1015;
          /* mobil viewport */
          if (window.innerWidth < mobilMenuBreakingPoint) {
              
              whiteNav();   

              // Pokud telefon screen, dej competition-buttons do menu
              
              const competitionBtns = document.querySelectorAll('#competition-buttons a');              
              [...competitionBtns].forEach((btn) => {
                let nav = document.querySelector('.mm-spn--open');
                let li = document.createElement('li');
                let el = btn.cloneNode();
                el.innerHTML = btn.innerHTML;
                li.append(el);
                nav.append(li);
              });

                     
          } 

          /****************************\
              EVENTLISTENERY
          \****************************/

          /* eventlistener na resize */
          window.addEventListener("resize", () => {
            // schovani kb loga v menu kdyz na tel
            if(window.innerWidth < mobilMenuBreakingPoint && kb !== null) {
              // kb.parentNode !== null ? kb.parentNode.removeChild(kb): false;
            } else if(kb !== null) {
              logo.appendChild(kb);
            }

            scrollNav(window.pageYOffset);

          });

          /* pri scrollu vola FCI scrollNav() */
          window.addEventListener("scroll", e => {
            scrollNav(window.pageYOffset);
          });

          /* kdyz je kurzor na menu zmen ho na bilo */
          menu.addEventListener("mouseover", () => {
            if (window.innerWidth >= mobilMenuBreakingPoint) {
              whiteNav();
            }
          });

          /* kdyz kurzor odejde z menu dej ho zpet na transparent pokud je uzivatel uplne na hore a submeny schovej */
          menu.addEventListener("mouseleave", () => {
            if (window.innerWidth >= mobilMenuBreakingPoint) {
              if (window.pageYOffset === 0) {
                transNav();
              }
            }
          });

          /****************************\
              FUNKCE
          \****************************/

          /* FCE pokud je uzivatel nahore bude menu trasparentni, pokud jinde bude bile*/
          function scrollNav(position) {
            if (window.innerWidth >= mobilMenuBreakingPoint) {
              if (position === 0) {
                transNav();
              } else {
                whiteNav();
              }
            } else {
              whiteNav();
            }
          }

          /* FCE pro bilou navigaci */
          function whiteNav() {
            menu.classList.add("header--shadow");
            paymentBtn.className = "btn btn--blue";
            menuImg.classList.add("logo__img--color");
            kbLogo === undefined ? false : kbLogo.classList.add("kb--color");
          }

          /* FCE pro pruhlednou navigaci */
          function transNav() {
            menu.classList.remove("header--shadow");
            paymentBtn.className = "btn btn--white";
            menuImg.classList.remove("logo__img--color");
            kbLogo === undefined ? false : kbLogo.classList.remove("kb--color");
          }
  }
);