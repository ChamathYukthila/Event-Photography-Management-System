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
