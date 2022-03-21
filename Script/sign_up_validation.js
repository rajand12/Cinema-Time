function signUpValidation(){
    var full_name = document.getElementById('full-name').value;
    var email = document.getElementById('email').value;
    var user_name = document.getElementById('user-name').value;
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('full-name').value;
    const full_nameREGEXP = /(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
    var full_name_final = full_name.test(full_nameREGEXP);
    const emailREGEXP = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email_final = email.test(emailREGEXP);
    const user_nameREGEXP = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
    var user_name_final = user_name.test(user_nameREGEXP);
    var fullNameValidation = document.getElementById('full-name-validation');
    var emailValidation = document.getElementById('email-validation');
    var userNameValidation = document.getElementById('user-name-validation');
    var passwordValidation = document.getElementById('password-validation');
    var confirmPasswordValidation = document.getElementById('confirm-password-validation');
    var isValidated = false;
    if(full_name.trim() == ""){
        fullNameValidation.innerHTML = 'Full Name cannot be empty';
        fullNameValidation.style.display = 'block';
    }
    else if(full_name_final == false){
        fullNameValidation.innerHTML = "Your full name doesn't match standard format";
        fullNameValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        fullNameValidation.style.display = 'none';
    }
    if(email.trim() == ""){
        emailValidation.innerHTML = 'Email cannot be empty';
        emailValidation.style.display = 'block';
    }
    else if(email_final == false){
        emailValidation.innerHTML = "Your email doesn't match standard format";
        emailValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        emailValidation.style.display = 'none';
    }
    if(user_name.trim() == ""){
        userNameValidation.innerHTML = 'User Name cannot be empty';
        userNameValidation.style.display = 'block';
    }
    else if(user_name_final.length() <7 && user_name_final.length() > 12){
        userNameValidation.innerHTML = "User name must be between 7 and 12 characters";
        userNameValidation.style.display = 'block';
    }
    else if(user_name_final == false){
        userNameValidation.innerHTML = "Your user name doesn't match standard format";
        userNameValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        userNameValidation.style.display = 'none';
    }
    if(password == ""){
        passwordValidation.innerHTML = 'Password cannot be empty';
        passwordValidation.style.display = 'block';
    }
    else if(password.length()<8 && password.length()>18){
        passwordValidation.innerHTML = "Password must be between 8 and 18 characters";
        passwordValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        passwordValidation.style.display = 'none';
    }
    if(confirm_password == ""){
        confirmPasswordValidation.innerHTML = 'Re-enter your password';
        confirmPasswordValidation.style.display = 'block';
    }
    else if(password != confirm_password){
        confirmPasswordValidation.innerHTML = "Your passwords doesn't match";
        confirmPasswordValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        confirmPasswordValidation.style.display = 'none';
    }
    if(isValidated){
        document.getElementById('signUpForm').submit();
    }
}