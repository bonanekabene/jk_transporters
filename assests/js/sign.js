//password showing and hidding
let eyeClick = document.getElementById("password");
let inputPassword = document.getElementById("inputpassword")

eyeClick.addEventListener("click", function(){
    
    if(inputPassword.type === "password"){
        inputPassword.type = "text";
        eyeClick.className = "fas fa-eye-slash";
    }else{
        inputPassword.type = "password";
        eyeClick.className = "fas fa-eye";
    }
})