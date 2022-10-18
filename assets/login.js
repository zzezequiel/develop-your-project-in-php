console.log("HOLA ESTOY EN login.js");

// CONSTANTES
const
    btnNext =       document.getElementById("btnNext");





//! PARCHE Redireccion entre vistas LOG IN - REGISTER
function loadRegisterForm() {
    window.location.href = "register.html?action=register.php"
}

function loadLoginForm() {
    window.location.href = "login.html?action=login.php"
}

// Cambiar la foto cada x segundos
setInterval(function () {
     btnNext.click(); 
    console.log("Continue Clicked");
}, 5000); 


//* VEREFY EMAIL
function validateEmail(){
    
    const formLogin =     document.getElementById("formLogin");
    const emailLogin =    document.getElementById("emailLogin");
    const advertEmail =   document.getElementById("advertEmail");
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if(emailLogin.value.match(mailformat)){
        formLogin.classList.add('valid');
        formLogin.classList.remove('invalid');
        advertEmail.innerHTML = "Your email Address is Valid."
        advertEmail.style.color = "#4caf50";
    }else{
        formLogin.classList.remove('valid');
        formLogin.classList.add('invalid');
        advertEmail.innerHTML = "Please enter valid email Address."
        advertEmail.style.color = "#f44336";
    }
    if(emailLogin.value == ""){
        formLogin.classList.remove('valid');
        formLogin.classList.remove('invalid');
        advertEmail.innerHTML = "";
    }
}
//* VEREFY Password 
// function validatePass(){
//     const formLogin =     document.getElementById("formLogin");
//     const passLogin =   document.getElementById("passLogin");
//     const advertPass =   document.getElementById("advertPass");
//     var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,20}$/;


//     if(passLogin.value.match(passw)){
//         formLogin.classList.add('valid');
//         formLogin.classList.remove('invalid');
//         advertPass.innerHTML = "Your Password is Valid."
//         advertPass.style.color = "#4caf50";
//     }else{
//         formLogin.classList.remove('valid');
//         formLogin.classList.add('invalid');
//         advertPass.innerHTML = "Please enter valid Password."
//         advertPass.style.color = "#f44336";
//     }
//     if(passLogin.value == ""){
//         formLogin.classList.remove('valid');
//         formLogin.classList.remove('invalid');
//         advertPass.innerHTML = "";
//     }
// }