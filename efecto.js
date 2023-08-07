
document.getElementById("btn__registrarse").addEventListener("click", registro);
document.getElementById("btn__iniciar_sesion").addEventListener("click", iniciosesion);

var contener_formulario = document.querySelector(".contenedor_formularios");
var formulario_login = document.querySelector(".formulario_inicio");
var formulario_register = document.querySelector(".formulario_registro");
var fondo_login = document.querySelector(".fondo_registro-login");
var fondo_registro = document.querySelector(".fondo_registro-registro");

function registro(){
    formulario_register .style.display = "block";
    contener_formulario .style.left = "410px";
    formulario_login .style.display = "none";
    fondo_registro .style.opacity = "0";
    fondo_login .style.opacity = "1";

}


function iniciosesion(){
    formulario_register .style.display = "none";
    contener_formulario .style.left = "10px";
    formulario_login .style.display = "block";
    fondo_registro .style.opacity = "1";
    fondo_login .style.opacity = "0";

}

