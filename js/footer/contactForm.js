//? HANDLING FOOTER FORM ANIMATION
document.addEventListener("DOMContentLoaded", () => {
    //? když input dostane focus, vem rodiče rodiče a prvního potomka a přidej mu classu s animaci
    const list = document.querySelectorAll(".animation-input");
  
    list.forEach(e => {
      e.addEventListener("focus", () => {
        e.parentElement.parentElement.firstChild.classList.add("size-ani");
      });
    });
  
    //? když input ztratí focus, vem rodiče rodiče a prvního potomka odstran classu
    list.forEach(e => {
      e.addEventListener("focusout", () => {
        if (e.value.length === 0) {
          e.parentElement.parentElement.firstChild.classList.remove("size-ani");
        }
      });
    });
  });