let loader = document.getElementById("loader");
var mensaje = document.getElementById("mensaje");
var alerta = document.getElementById("alerta");

window.addEventListener("load", function () {
    loader.classList.toggle("loader_inactive");

    if (mensaje.innerHTML.trim() !== "") {
        var intervalo = setInterval(function () {
            alerta.classList.add("alerta_activa");
        }, 1000);

        var intervalo = setInterval(function () {
            alerta.classList.remove(" animate__bounceInRight");
        }, 1000);

        var intervalo = setInterval(function () {
            alerta.classList.add("animate__bounceOutRight");
        }, 4000);

        var intervalo = setInterval(function () {
            alerta.classList.remove("animate__bounceOutRight");
            alerta.classList.remove("alerta_activa");
        }, 4500);
        clearInterval(intervalo);
    }
});



function mostrar() {
    var opciones = document.getElementById("opciones");
    var navUsuario = document.getElementById("navUsuario");

    opciones.classList.toggle("opciones_usuario_activo");
}

