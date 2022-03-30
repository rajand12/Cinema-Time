function signUpValidation() {
  full_name = document.getElementById("full-name").value;
  email = document.getElementById("email").value;
  user_name = document.getElementById("user-name").value;
  password = document.getElementById("password").value;
  confirm_password = document.getElementById("confirm-password").value;
  full_nameREGEXP =
    /(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
  full_name_final = full_nameREGEXP.test(full_name);
  emailREGEXP = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  email_final = emailREGEXP.test(email);
  user_nameREGEXP = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
  user_name_final = user_nameREGEXP.test(user_name);
  fullNameValidation = document.getElementById("full-name-validation");
  emailValidation = document.getElementById("email-validation");
  userNameValidation = document.getElementById("user-name-validation");
  passwordValidation = document.getElementById("password-validation");
  confirmPasswordValidation = document.getElementById("confirm-password-validation");
  isValidated = false;
  if (full_name.trim() == "") {
    fullNameValidation.innerHTML = "Full Name cannot be empty";
    fullNameValidation.style.display = "block";
    isValidated = false;
  } else if (full_name_final == false) {
    fullNameValidation.innerHTML =
      "Your full name doesn't match standard format";
    fullNameValidation.style.display = "block";
    isValidated = false;
  } else {
    isValidated = true;
    fullNameValidation.style.display = "none";
  }
  if (email.trim() == "") {
    emailValidation.innerHTML = "Email cannot be empty";
    emailValidation.style.display = "block";
    isValidated = false;
  } else if (email_final == false) {
    emailValidation.innerHTML = "Your email doesn't match standard format";
    emailValidation.style.display = "block";
    isValidated = false;
  } else {
    isValidated = true;
    emailValidation.style.display = "none";
  }
  if (user_name.trim() == "") {
    userNameValidation.innerHTML = "User Name cannot be empty";
    userNameValidation.style.display = "block";
    isValidated = false;
  } else if (user_name_final.length < 7 || user_name_final.length > 12) {
    userNameValidation.innerHTML =
      "User name must be between 7 and 12 characters";
    userNameValidation.style.display = "block";
    isValidated = false;
  } else if (user_name_final == false) {
    userNameValidation.innerHTML =
      "Your user name doesn't match standard format";
    userNameValidation.style.display = "block";
    isValidated = false;
  } else {
    isValidated = true;
    userNameValidation.style.display = "none";
  }
  if (password == "") {
    passwordValidation.innerHTML = "Password cannot be empty";
    passwordValidation.style.display = "block";
    isValidated = false;
  } else if (password.length < 8 || password.length > 18) {
    passwordValidation.innerHTML =
      "Password must be between 8 and 18 characters";
    passwordValidation.style.display = "block";
    isValidated = false;
  } else {
    isValidated = true;
    passwordValidation.style.display = "none";
  }
  if (confirm_password == "") {
    confirmPasswordValidation.innerHTML = "Re-enter your password";
    confirmPasswordValidation.style.display = "block";
    isValidated = false;
  } else if (password != confirm_password) {
    confirmPasswordValidation.innerHTML = "Your passwords doesn't match";
    confirmPasswordValidation.style.display = "block";
    isValidated = false;
  } else {
    isValidated = true;
    confirmPasswordValidation.style.display = "none";
  }
if (isValidated == true) {
  document.getElementById("sign-up-form").submit();
}
}
