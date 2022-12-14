function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function openNav2() {
  document.getElementById("mySidenav2").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function closeNav2() {
  document.getElementById("mySidenav2").style.width = "0";
}

/*User Window Properties */
function WindowNav() {
  let text = "<h2> Your Window Properties Are As follows: </h2>" +
    "<p>Browser CodeName: " + navigator.appCodeName + "</p>" +
    "<p>Browser Name: " + window.navigator.appName + "</p>" +
    "<p>Browser Version: " + navigator.appVersion + "</p>" +
    "<p>Cookies Enabled: " + window.navigator.cookieEnabled + "</p>" +
    "<p>Browser Language: " + navigator.language + "</p>" +
    "<p>Browser Online: " + window.navigator.onLine + "</p>" +
    "<p>Platform: " + navigator.platform + "</p>" +
    "<p>User-agent header: " + window.navigator.userAgent + "</p>" +
    "<p>Today's Dates: " + Date() + "</p>";

  document.getElementById("winNav").innerHTML = text;
}

/*Query selector function*/
function $(selector) {
  return document.querySelector(selector);
}


/*ComputerComponents Side bar display*/

var x = document.getElementById("myBtn");
var node2 = document.getElementsById("ComputerComponents").innerHTML;
x.addEventListener("click", ComputerComponents);
function ComputerComponents() {
  document.getElementById("winNav").innerHTML += node2;
}

/*Search results*/
function searchResult() {
  let searchResult = "No results found!";
  document.getElementById("winNav").innerHTML += searchResult;
}
/*searchBar validation*/
function validSearch() {
  let s = document.forms["searchform"]["search"].value;
  if (s == "") {
    alert("Input some text to search for a product!");
    return false;
  }
  else {
    searchResult();
  }
}

/*aboutUs animation function*/
function myMove() {
  let id = null;
  const elem = document.getElementById("animate");
  let pos = 0;
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
    if (pos == 350) {
      clearInterval(id);
    } else {
      pos++;
      elem.style.top = pos + "px";
      elem.style.left = pos + "px";
    }
  }
}

let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

/*AboutUs onmouseOver & onmouseOut*/
function mOver(obj) {
  obj.innerHTML = "Read about the creators of RonZack below"
}
function mOut(obj) {
  obj.innerHTML = "Who we are and what we do."
}

/*form validation function
function validate(){
  let x = document.forms["contactForm"]["firstname"].value;
  let y = document.forms["contactForm"]["lastname"].value;
  let z = document.forms["contactForm"]["useremail"].value;
  let FullName = x + " " + y;
  if (x == "") {
    document.getElementById("firstname").innerHTML =
    "Please enter your first name."
  } else if (y == "") {
    document.getElementById("lastname").innerHTML =
    "Please enter your last name."
  } else if (z = "") {
    document.getElementById("useremail").innerHTML =
    "Please enter your useremail."
  }
  else {
    document.getElementById("winNav").innerHTML = 
        " ! \nYou have successfuly submmited your form!";     
  }
 }*/