/* Styly najdes v abstracts/animateScroll.scss. Do html se elementu se pridat class 'animateScroll animateScroll--arrival-up' */
/* Pak jen do js: 
    let scrollEvent = new ScrollAppear('animateScroll--arrival-up');
    scrollEvent.scrollListener();

*/


class ScrollAppear {
  constructor(elementClass) {
    this.elements = document.getElementsByClassName(elementClass);
    this.screenPos = window.innerHeight / 1.15;
  }

  scrollListener() {
    window.addEventListener("scroll", () => {
      let elementsPos = [];
      for (let i = 0; i < this.elements.length; i++) {
        elementsPos.push(this.elements[i].getBoundingClientRect().top);
        if (elementsPos[i] < this.screenPos) {
          this.elements[i].classList.add("animateScroll--animate");
        } else {
          this.elements[i].classList.remove("animateScroll--animate");
        }
      }
    });
    return this;
  }

  isInViewport() {
    window.addEventListener("DOMContentLoaded", () => {
      let elementsPos = [];
      for (let i = 0; i < this.elements.length; i++) {
        elementsPos.push(this.elements[i].getBoundingClientRect().top);
        if (elementsPos[i] < window.innerHeight) {
          this.elements[i].classList.add("animateScroll--animate");
        } else {
          this.elements[i].classList.remove("animateScroll--animate");
        }
      }
    }) 
    return this;
  }

}

new ScrollAppear("animateScroll--arrival-up").isInViewport().scrollListener();

window.addEventListener("resize", () => {
  new ScrollAppear("animateScroll--arrival-up").isInViewport().scrollListener();
});
