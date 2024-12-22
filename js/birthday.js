const pic = document.querySelector(".pic");
const firstImg = pic.querySelectorAll("img")[0];
const arrowIcons = document.querySelectorAll(".photo i");

let isDragStart = false;
let prevPageX, prevScrollLeft;
let firstImgWidth = firstImg.clientWidth + 14;

arrowIcons.forEach(icon => {
  icon.addEventListener("click", () => {
    if (icon.id == "left") {
      pic.scrollLeft -= firstImgWidth;
    } else {
      pic.scrollLeft += firstImgWidth;
    }
  });
});

const dragStart = (e) => {
  isDragStart = true;
  prevPageX = e.pageX;
  prevScrollLeft = pic.scrollLeft;
}

const dragging = (e) => {
  if (!isDragStart) return;
  e.preventDefault();
  let positionDiff = e.pageX - prevPageX;
  pic.scrollLeft = prevScrollLeft - positionDiff;
}

const dragStop = () => {
  isDragStart = false;
}

pic.addEventListener("mousedown", dragStart);
pic.addEventListener("mousemove", dragging);
pic.addEventListener("mouseup", dragStop);
