//? HANDLING FOOTER FORM ANIMATION

document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".animation-input")) {
    //? když input dostane focus, vem rodiče rodiče a prvního potomka a přidej mu classu s animaci
    const list = document.querySelectorAll(".animation-input");

    list.forEach(el => {
      el.value.length !== 0
        ? el.parentElement.parentElement.firstElementChild.classList.add(
            "size-ani"
          )
        : null;
    });

    list.forEach(e => {
      e.addEventListener("focus", () => {
        e.parentElement.parentElement.firstElementChild.classList.add(
          "size-ani"
        );
      });
    });

    //? když input ztratí focus, vem rodiče rodiče a prvního potomka odstran classu
    list.forEach(e => {
      e.addEventListener("focusout", () => {
        if (e.value.length === 0) {
          e.parentElement.parentElement.firstElementChild.classList.remove(
            "size-ani"
          );
        }
      });
    });
  }
});
