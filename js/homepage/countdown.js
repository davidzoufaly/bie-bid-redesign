function countDown() {
    const startDay = parseInt(dateAndTimeEventStart.slice(0,2));
    const startMonth = parseInt(dateAndTimeEventStart.slice(3,5));
    const startYear = parseInt(dateAndTimeEventStart.slice(6,10));
    const startTime = dateAndTimeEventStart.slice(11,19);
    
    // Set the date we're counting down to
    let countDownDate = new Date(`${startYear}-${startMonth}-${startDay}T${startTime}`).getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get todays date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
    
      // If the count down is finished, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "0";
      }
    }, 1000);
    document.querySelector('.js-timer').classList.add('js-timer--show');
}

document.addEventListener('DOMContentLoaded', countDown);