console.log("HOLA ESTOY EN appJS.js");

// CONSTANTES
const
    btnNext = document.getElementById("btnNext");




//! PARCHE Redireccion entre vistas LOG IN - REGISTER
function loadRegisterForm() {
    window.location.href = "register.html?action=register.php"
}

function loadLoginForm() {
    window.location.href = "login.html?action=login.php"
}

setInterval(function () {
    btnNext.click();
    console.log("Continue Clicked");
}, 5000); 