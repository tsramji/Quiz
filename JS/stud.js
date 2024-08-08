function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
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