var navList = document.getElementById("nav-lists");
function menuShow() {
navList.classList.add("_Menus-show");
}

function menuHide(){
navList.classList.remove("_Menus-show");
}

var modal = document.getElementById("regModal");
var btn = document.getElementById("regBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}