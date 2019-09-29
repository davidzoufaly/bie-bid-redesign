function parseDateTime(input) {
  let day = input.slice(0, 2);
  let month = input.slice(3, 5);
  let year = input.slice(6, 10);
  let time = input.slice(11, 19);

  return new Date(
    `${year}-${month}-${day}T${time}`
  ).getTime();
}

function countDown(startDateTime, currentDateTime, outputElement) {
  let distance = startDateTime - currentDateTime;

  let interval = setInterval(odpocitej, 1000);
  
  if (distance < 0) {
    clearInterval(interval);
  }


  function odpocitej() {
    let days = Math.floor(
      distance / (1000 * 60 * 60 * 24)
    );

    let hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );

    let minutes = Math.floor(
      (distance % (1000 * 60 * 60)) / (1000 * 60)
    );

    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    distance = distance - 1000;
  }
  document
    .querySelector(`.${outputElement}`)
    .classList.add(`${outputElement}--show`);
}

const timeNow = parseDateTime(currentTime);
const eventStart = parseDateTime(dateAndTimeEventStart);

document.addEventListener(
  "DOMContentLoaded",
  countDown(eventStart, timeNow, "js-timer")
);
