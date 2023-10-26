function scroll(){
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("imagenes");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
  }
}

function login(){
  var modal = document.getElementById('login');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}

function registro(){
  var modal2 = document.getElementById('registro');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal2.style.display = "none";
    }
  }
}


function openNav() {
  document.getElementById("panel").style.width = "250px";
}
  
function closeNav() {
  document.getElementById("panel").style.width = "0";
}

function oscuro() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}

function grande() {
  var element = document.body;
  element.classList.toggle("grande-mode");
}
  


