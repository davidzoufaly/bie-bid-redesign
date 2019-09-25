/* Styly najdes v abstracts/animateScroll.scss. Do html se elementu se prida class 'animateScroll animateScroll--arrival-up' */
/* Pak jen do js: 
    let scrollEvent = new ScrollAppear('animateScroll--arrival-up');
    scrollEvent.scrollListener();

*/

class ScrollAppear {
    constructor(elementClass) {
        this.elements = document.getElementsByClassName(elementClass);
        this.screenPos = window.innerHeight / 1.25;
    }

    scrollListener() {
        window.addEventListener('scroll', () => {
            let elementsPos = [];
            for(let i = 0; i<this.elements.length; i++) {
                elementsPos.push(this.elements[i].getBoundingClientRect().top);
                if(elementsPos[i] < this.screenPos) {

                    this.elements[i].classList.add('animateScroll--animate');
                } else {
                    this.elements[i].classList.remove('animateScroll--animate');
                }
            }
        })
    }
}

let scrollEvent = new ScrollAppear('animateScroll--arrival-up');
scrollEvent.scrollListener();

window.addEventListener('resize', () => {
    let scrollEvent = new ScrollAppear('animateScroll--arrival-up');
    scrollEvent.scrollListener();
});


