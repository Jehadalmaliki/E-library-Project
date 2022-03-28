// menu
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('ul');
menu.onclick = () =>{

    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
  

// Popup window code

//time cutdown
// Set the date we're counting down to
var countDownDate = new Date("Jan 29, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "يوم " + hours + "ساعة "
  + minutes + "دقيقة " + seconds + "ثانية ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "";
  }
}, 1000);	

//time cutdown2
// Set the date we're counting down to
var countDownDate1 = new Date("Jan 30, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x1 = setInterval(function() {

  // Get today's date and time
  var now1 = new Date().getTime();

  // Find the distance between now and the count down date
  var distance1 = countDownDate1 - now1;

  // Time calculations for days, hours, minutes and seconds
  var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
  var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo1").innerHTML = days1 + "يوم " + hours1 + "ساعة "
  + minutes1 + "دقيقة " + seconds1 + "ثانية ";

  // If the count down is finished, write some text
  if (distance1 < 0) {
    clearInterval(x1);
    document.getElementById("demo1").innerHTML = "EXPIRED";
  }
}, 1000);	

//time cutdown3
// Set the date we're counting down to
var countDownDate2 = new Date("Jan 29, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x2 = setInterval(function() {

  // Get today's date and time
  var now2 = new Date().getTime();

  // Find the distance between now and the count down date
  var distance2 = countDownDate2 - now2;

  // Time calculations for days, hours, minutes and seconds
  var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
  var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo2").innerHTML = days2 + "يوم " + hours2 + "ساعة "
  + minutes2 + "دقيقة " + seconds2 + "ثانية ";

  // If the count down is finished, write some text
  if (distance2 < 0) {
    clearInterval(x2);
    document.getElementById("demo2").innerHTML = "EXPIRED";
  }
}, 1000);

//time cutdown3
// Set the date we're counting down to
var countDownDate3 = new Date("Jan 29, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x3 = setInterval(function() {

  // Get today's date and time
  var now3 = new Date().getTime();

  // Find the distance between now and the count down date
  var distance3 = countDownDate3 - now3;

  // Time calculations for days, hours, minutes and seconds
  var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
  var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo3").innerHTML = days3 + "يوم " + hours3 + "ساعة "
  + minutes3 + "دقيقة " + seconds3 + "ثانية ";

  // If the count down is finished, write some text
  if (distance3 < 0) {
    clearInterval(x3);
    document.getElementById("demo3").innerHTML = "";
  }
}, 1000);
//time cutdown3
// Set the date we're counting down to
var countDownDate4 = new Date("Jan 30, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x4 = setInterval(function() {

  // Get today's date and time
  var now4 = new Date().getTime();

  // Find the distance between now and the count down date
  var distance4 = countDownDate4 - now4;

  // Time calculations for days, hours, minutes and seconds
  var days4 = Math.floor(distance4 / (1000 * 60 * 60 * 24));
  var hours4 = Math.floor((distance4 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes4 = Math.floor((distance4 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds4 = Math.floor((distance4 % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo4").innerHTML = days4 + "يوم " + hours4 + "ساعة "
  + minutes4 + "دقيقة " + seconds4 + "ثانية ";

  // If the count down is finished, write some text
  if (distance4 < 0) {
    clearInterval(x4);
    document.getElementById("demo4").innerHTML = "";
  }
}, 1000);
// photo model
function openModal() {
  document.getElementById("myModal3").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal3").style.display = "none";
}

var slideIndex2 = 1;
showSlides1(slideIndex2);

function plusSlides_im(n) {
  showSlides1(slideIndex2 += n);
}

function currentSlide1(n) {
  showSlides1(slideIndex2 = n);
}

function showSlides1(n) {
  var i;
  var slides1 = document.getElementsByClassName("mySlides1");
  var dots1 = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides1.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides1.length}
  for (i = 0; i < slides1.length; i++) {
      slides1[i].style.display = "none";
  }
  for (i = 0; i < dots1.length; i++) {
      dots1[i].className = dots1[i].className.replace(" active", "");
  }
  slides1[slideIndex2-1].style.display = "block";
  dots1[slideIndex2-1].className += " active";
  captionText.innerHTML = dots1[slideIndex2-1].alt;
}

// search bar
// JavaScript code
// log in model
// Get the modal
