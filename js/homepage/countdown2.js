
//accept date time format: d-h-m-s -> 60-13-48-50)
function dateDiffToSec(input) {
    let timeDiff = input.split("-");
    let timeDaysInSec = parseInt(timeDiff[0]) * 24 * 60 * 60;
    let timeHoursInSec = parseInt(timeDiff[1]) * 60 * 60;
    let timeMinutesInSec = parseInt(timeDiff[2]) * 60;
    let timeSecondsInSec = parseInt(timeDiff[3]);

    return timeDaysInSec + timeHoursInSec + timeMinutesInSec + timeSecondsInSec;
}

let countdownWrapper = (allSec, outputElement) => {
    let countdown = () => {
        let days = Math.floor(
            allSec / (60 * 60 * 24)
          );
      
          let hours = Math.floor(
            (allSec % (60 * 60 * 24)) / (60 * 60)
          );
      
          let minutes = Math.floor(
            (allSec % (60 * 60)) / 60);
      
          let seconds = Math.floor((allSec % 60));
          
          document.querySelector(`.${outputElement} div:nth-child(1) > p:first-child`).innerHTML = days;
          document.querySelector(`.${outputElement} div:nth-child(2) > p:first-child`).innerHTML = hours;
          document.querySelector(`.${outputElement} div:nth-child(3) > p:first-child`).innerHTML = minutes;
          document.querySelector(`.${outputElement} div:nth-child(4) > p:first-child`).innerHTML = seconds;

        allSec--;
    }

    let cdInterval = setInterval(countdown, 1000);

    if (allSec < 0) {
        clearInterval(cdInterval);
    }

    document
    .querySelector(`.${outputElement}`)
    .classList.add(`${outputElement}--show`);
}

const dateDiffSec = dateDiffToSec(phpDateDiff);

document.addEventListener('DOMContentLoaded', countdownWrapper(dateDiffSec, "js-timer"));