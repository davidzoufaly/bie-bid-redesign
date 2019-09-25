const title = document.getElementsByClassName('subheader-homepage__title')[0];
const timer = document.getElementsByClassName('js-timer')[0];
const boxes = document.getElementsByClassName('subheader-boxes')[0];
const buttons = document.getElementsByClassName('_buttons-row')[0];
const bg = document.getElementsByClassName('subheader-homepage');

parallax();

window.addEventListener('resize', () => { parallax(); });

function parallax() {
    if( window.innerWidth >= 991) {
        document.addEventListener('scroll', () => {
            let scroll = window.pageYOffset;

            title.style.transform = 'translateY('+(scroll*0.3)+'px)';
            timer.style.transform = 'translateY('+(scroll*0.2)+'px)';
            boxes.style.transform = 'translateY('+(scroll*0.09)+'px)';
            buttons.style.transform = 'translateY('+(-scroll*0.02)+'px)';
        })
    } else {
        return false
    }
        
}
