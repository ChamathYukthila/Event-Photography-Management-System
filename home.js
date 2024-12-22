

//search sector

let modalSelct = document.querySelectorAll(".search_sect");
let overlaySelct = document.querySelectorAll(".overlay");
let btnCloseModal = document.querySelector('.close-modal');
let btnsOpenModal = document.querySelector(".show-modal")


console.log(modalSelct);

function openDelay(){

  setTimeout(openModal , 300);
  function openModal(){
    let i;
    for(i=0 ; i< modalSelct.length ; i++){
      modalSelct[i].classList.remove("hidden");
      overlaySelct[i].classList.remove("hidden");
  
    }
   
  }
}

function closeDelay(){
  
  setTimeout(closeModal , 300);
  function closeModal(){
  for(i=0 ; i< modalSelct.length ; i++){
    modalSelct[i].classList.add("hidden");
    overlaySelct[i].classList.add("hidden");
}
}
}
btnsOpenModal.addEventListener('click' , openDelay);
btnCloseModal.addEventListener('click' , closeDelay);



//name coming up sector
let comingUp = document.querySelectorAll(".div1p");

function comeDelay(){
  let i;
  for(i=0 ; i < comingUp.length ; i++)
    comingUp[i].classList.add('activ');
}
setTimeout(comeDelay , 800);

//slide sector

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}



function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("Slides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

//animation sector

function reveal() {
  let i;
  const reveals = document.querySelectorAll(".reveal");

  for (i = 0; i < reveals.length; i++) {
    let windowHeight = window.innerHeight;
    let revealTop = reveals[i].getBoundingClientRect().top;
    let revealPoint = 150;

    if (revealTop < windowHeight - revealPoint) {
      reveals[i].classList.add("activ");
    } else {
      reveals[i].classList.remove("activ");
    }
  }
}
window.addEventListener("scroll", reveal);
