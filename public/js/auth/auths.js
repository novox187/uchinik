var radios = document.querySelectorAll('.avatars');
radios.forEach(function(radio) {
  radio.addEventListener('change', function() {
    var labels = document.querySelectorAll('.visible');
    labels.forEach(function(label) {
      label.style.backgroundColor = '#FFF';  // Reiniciar todos los bordes
    });
    var label = this.previousElementSibling; // Seleccionar el label asociado
    label.style.backgroundColor = "#052659"; // Añadir borde al label del input seleccionado
  });
});



let loader = document.getElementById("loader");
window.addEventListener("load", function(){
    loader.classList.toggle("loader_inactive");
    console.log('pagina cargada')
});



let form = document.querySelector(".form_register");
let step = document.querySelectorAll(".step");
let formulario = document.getElementById("formulario");

function error() {
    formulario.classList.add("animate__animated");
    formulario.classList.add("animate__shakeX");

    setTimeout(function () {
        formulario.classList.remove("animate__animated");
        formulario.classList.remove("animate__shakeX");
    }, 500);
}

form.addEventListener("click", function (e) {
    let element = e.target;
    let isButtonNext = element.classList.contains("boton_step_siguiente");
    let isButtonBack = element.classList.contains("boton_step_anterior");

    if (isButtonNext || isButtonBack) {
        let currentStep = document.getElementById(
            "step-" + element.dataset.step
        );
        let jumpStep = document.getElementById(
            "step-" + element.dataset.to_step
        );

        if (currentStep.id === "step-1") {
            let nombre = document.getElementById("nombre").value;
            let apellido = document.getElementById("apellido").value;
            let phone = document.getElementById("phone").value;
            let email = document.getElementById("email").value;

            if (
                nombre === "" ||
                apellido === "" ||
                phone == "" ||
                email === "" 
            ) {
                error();
            } else {
                currentStep.addEventListener(
                    "animationend",
                    function callback() {
                        if (isButtonNext) {
                            currentStep.classList.add("formulario_step_active");
                            step[element.dataset.to_step - 1].classList.add(
                                "active_step"
                            );
                        }
                        currentStep.removeEventListener(
                            "animationend",
                            callback
                        );
                    }
                );
                currentStep.classList.add("formulario_step_inactive");
                jumpStep.classList.remove("formulario_step_inactive");
            }
        }

        if (currentStep.id === "step-2") {
            var radioButtons = document.getElementsByName('avatar');
            var seleccionado = false;
            for (var i = 0; i < radioButtons.length; i++) {
              if (radioButtons[i].checked) {
                seleccionado = true;
                break;
              }
            }

            if (seleccionado === false) {
                error();
            } else {
                currentStep.addEventListener(
                    "animationend",
                    function callback() {
                        if (isButtonNext) {
                            currentStep.classList.add("formulario_step_active");
                            step[element.dataset.to_step - 1].classList.add(
                                "active_step"
                            );
                        }
                        currentStep.removeEventListener(
                            "animationend",
                            callback
                        );
                    }
                );
                currentStep.classList.add("formulario_step_inactive");
                jumpStep.classList.remove("formulario_step_inactive");
            }
        }
        if (currentStep.id === "step-3") {
            let user = document.getElementById("user").value;
            let password = document.getElementById("password").value;
            let password_confirmation = document.getElementById("password_confirmation").value;


            if (
                user === "" ||
                password === "" ||
                password_confirmation == "" 
            ) {
                error();
            } else {
                currentStep.addEventListener(
                    "animationend",
                    function callback() {
                        if (isButtonNext) {
                            currentStep.classList.add("formulario_step_active");
                            step[element.dataset.to_step - 1].classList.add(
                                "active_step"
                            );
                        }
                        currentStep.removeEventListener(
                            "animationend",
                            callback
                        );
                    }
                );
                currentStep.classList.add("formulario_step_inactive");
                jumpStep.classList.remove("formulario_step_inactive");
            }
        }

        currentStep.addEventListener("animationend", function callback() {
            if (isButtonBack) {
                jumpStep.classList.remove("formulario_step_active");
                step[element.dataset.step - 1].classList.remove("active_step");

            }
            currentStep.removeEventListener("animationend", callback);

        });

    }
});

/* img  validacion */
var inputFile = document.getElementById("logo");
var label = document.getElementById("labelLogo");

if (inputFile.files.length === 0) {
    label.innerHTML = "Haga click aqui<br> Suba el logo de su empresa";
}

inputFile.addEventListener("change", function () {
    nameFile = inputFile.files[0].name;
    label.classList.add("boton_imagen-activo");
    if (inputFile.files.length > 0) {
        label.innerHTML = "Guardado exitosamente <br>" + nameFile;
    }
});

