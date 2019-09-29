function initDowns() {
    let subMenus = document.getElementsByClassName('menu-item-has-children');
    let dropDowns = [];
    for(let i = 0; i<subMenus.length;i++) {
        dropDowns[i] = new DropDown(subMenus[i].id);
        dropDowns[i].init();
    }
}

class DropDown {
    constructor(elementId) {
        this.li = document.getElementById(elementId);
        this.a = this.li.children[0];
        this.subMenu = this.li.children[1];
        this.menu = document.getElementsByClassName("header")[0];
        // arrow
        let span = document.createElement('span');
        span.classList.add("arrow__up");
        let subMenuItem = this.li.firstChild;
        subMenuItem.appendChild(span);
        this.arrow = span;
        // 
    }

    eventListener() {
        window.addEventListener('click', (e) => {
            if(e.target !== this.a && e.target !== this.li && e.target !== this.arrow) {
                this.reset();
            } else {
                e.preventDefault();
                this.toggle();
            }
        });
        this.menu.addEventListener('mouseleave', (e) => {
            this.reset();
        })
    }

    toggle() {
        this.a.classList.toggle("sub-menu--revealed");
        this.arrow.classList.toggle("arrow__up--animate");
        this.arrow.classList.toggle("arrow__up--blue");
        if (this.subMenu.style.maxHeight) {
            this.subMenu.style.maxHeight = null;
        } else {
          this.subMenu.style.maxHeight = this.subMenu.scrollHeight + "px";
        }
    }

    reset() {
        this.a.classList.remove("sub-menu--revealed");
        this.arrow.classList.remove("arrow__up--animate");
        this.arrow.classList.remove("arrow__up--blue");
        this.subMenu.style.maxHeight = null;
        
    }

    init() {
        this.eventListener();
    }
}

initDowns();