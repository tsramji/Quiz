// function openNav() {
//     document.getElementById("mySidebar").style.width = "250px";
//   }

//   function closeNav() {
//     document.getElementById("mySidebar").style.width = "0";
//   }
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}

// Handle the visibility of the menu button based on screen size
window.onload = function() {
  toggleMenuButton();
};

window.onresize = function() {
  toggleMenuButton();
};

function toggleMenuButton() {
  if (window.innerWidth >= 992) {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("menuBtn").style.display = "none";
  } else {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("menuBtn").style.display = "block";
  }
}
function navigate(){
    window.location.href="quiz.html";
}
(document).ready(function() {
  $('#myTable').DataTable({
      "pageLength": 10, // Default number of rows per page
      "lengthMenu": [10, 15, 20, 25], // Dropdown for selecting rows per page
      "pagingType": "full_numbers", // Pagination style
      "responsive": true // Make table responsive
  });
});



function togglePasswordVisibility() {
  var passwordInput = document.getElementById("pass");
  var eyeIcon = document.getElementById("eye");
  var eye = document.getElementById("oeye");

  if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.src = "img/ceye.png";
  } else {
      passwordInput.type = "password";
      eyeIcon.src = "img/oeye.png";
  }
}
function toggle() {
  var passwordInput = document.getElementById("opass");;
  var eye = document.getElementById("oeye");

  if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eye.src = "img/ceye.png";
  } else {
      passwordInput.type = "password";
      eye.src = "img/oeye.png";
  }
}
function togglep() {
var passwordInput = document.getElementById("npass");;
var opeye = document.getElementById("opeye");

if (passwordInput.type === "password") {
    passwordInput.type = "text";
    opeye.src = "img/ceye.png";
} else {
    passwordInput.type = "password";
    opeye.src = "img/oeye.png";
}
}