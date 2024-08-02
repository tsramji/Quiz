function validate(event) {
    // Get input fields
    var rnoInput = document.getElementById('rno');
    var passInput = document.getElementById('pass');
    
    
    // Get error message containers
    var rerror = document.querySelector(".rerror");
    var perror = document.querySelector(".perror");

    // Clear previous error messages
    rerror.innerHTML = "";
    perror.innerHTML = "";
    
    // Get input values
    var rno = rnoInput.value;
    var pass = passInput.value;
    
    // Validate Roll No
    if (rno.length !== 6) {
      event.preventDefault(); // Prevent form submission
      rerror.innerHTML = "Roll no must be exactly 6 characters!!";
    }
    
    // Validate Password
    if (pass.length < 6) {
      event.preventDefault(); // Prevent form submission
      perror.innerHTML = "Password must be at least 6 characters!!";
    }
    // if(pno){
    //     window.location.href="totp.html";
    // }
  }
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
    var passwordInput = document.getElementById("passw");;
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
  var passwordInput = document.getElementById("pas");;
  var opeye = document.getElementById("opeye");

  if (passwordInput.type === "password") {
      passwordInput.type = "text";
      opeye.src = "img/ceye.png";
  } else {
      passwordInput.type = "password";
      opeye.src = "img/oeye.png";
  }
}
function moveFocus(currentInput, nextInputId) {
    if (currentInput.value.length === 1) {
      document.getElementById(nextInputId).focus();
    }
  }

  function moveFocusOnBackspace(event, currentInput, previousInputId) {
    if (event.key === 'Backspace' && currentInput.value.length === 0) {
      document.getElementById(previousInputId).focus();
    }
  }

  // Optional: Prevent non-digit input
  document.querySelectorAll('.otp-input').forEach(input => {
    input.addEventListener('input', function() {
      this.value = this.value.replace(/\D/g, ''); // Allow only digits
    });
  });