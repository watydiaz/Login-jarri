// Ejecutando funciones
document.getElementById("btn__iniciar-sesion").addEventListener("click", () => toggleForms(true));
document.getElementById("btn__registrarse").addEventListener("click", () => toggleForms(false));
window.addEventListener("resize", anchoPage);

// Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

// FUNCIONES
function anchoPage() {
    const isWideScreen = window.innerWidth > 850;
    caja_trasera_register.style.display = isWideScreen ? "block" : "none";
    caja_trasera_register.style.opacity = isWideScreen ? "1" : "0";
    caja_trasera_login.style.display = isWideScreen ? "block" : "none";
    formulario_login.style.display = isWideScreen ? "block" : "none";
    contenedor_login_register.style.left = isWideScreen ? "0px" : "10px";
    formulario_register.style.display = "none";
}

function toggleForms(isLogin) {
    if (window.innerWidth > 850) {
        formulario_login.style.display = isLogin ? "block" : "none";
        contenedor_login_register.style.left = isLogin ? "10px" : "410px";
        formulario_register.style.display = isLogin ? "none" : "block";
        caja_trasera_register.style.opacity = isLogin ? "1" : "0";
        caja_trasera_login.style.opacity = isLogin ? "0" : "1";
    } else {
        formulario_login.style.display = isLogin ? "block" : "none";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = isLogin ? "none" : "block";
        caja_trasera_register.style.display = isLogin ? "block" : "none";
        caja_trasera_login.style.display = isLogin ? "none" : "block";
        caja_trasera_login.style.opacity = isLogin ? "1" : "0";
    }
}

// Inicialización
anchoPage();
