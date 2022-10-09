console.log("HOLA ESTOY EN appJS.js");

// CONSTANTES
const
    btnNext = document.getElementById("btnNext");

// FUNCIONES

    // Cambiar la foto cada x segundos
setInterval(function () {
    btnNext.click();
    console.log("Continue Clicked");
}, 5000); 