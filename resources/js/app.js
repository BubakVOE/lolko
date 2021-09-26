require('./bootstrap');



// Get the modal
var opacity = document.getElementById("Opacity");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  opacity.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  opacity.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == opacity) {
    opacity.style.display = "none";
  }
}