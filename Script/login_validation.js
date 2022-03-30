function loginValidation(){
    var user_name = document.getElementById('user-name').value;
    var password = document.getElementById('password').value;
    var userNameValidation = document.getElementById('user-name-validation');
    var passwordValidation = document.getElementById('password-validation');
    var isValidated = false;
    if(user_name.trim() == ""){
        userNameValidation.innerHTML = 'User name is empty';
        userNameValidation.style.display = 'block';
        isValidated = false;
    }
    else{
        userNameValidation.style.display = 'none';
        isValidated = true;
    }
    if(password == ""){
        passwordValidation.innerHTML = 'Password is empty';
        passwordValidation.style.display = 'block';
        isValidated = false;
    }
    else{
        passwordValidation.style.display = 'none';
        isValidated = true;
    }
    if(isValidated == true){
        document.getElementById('loginForm').submit();
    }
}