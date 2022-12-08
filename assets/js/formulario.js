const inputs = document.querySelectorAll('.input');
//let fomrulario=document.getElementById('formu').setAttribute('action','../api/api.php');
//recorremos los inputs
inputs.forEach(input => {
    input.onfocus = () => {
        input.previousElementSibling.classList.add('top');
        input.previousElementSibling.classList.add('focus');
        input.parentNode.classList.add('focus');

    };
    input.onblur = () => {
        input.value = input.value.trim()
        if (input.value.trim().length == 0) {
            input.previousElementSibling.classList.remove('top');

        }
        input.previousElementSibling.classList.remove('focus');
        input.parentNode.classList.remove('focus');

    };
});


function activarBtn() {
    nombre = document.getElementById('correo');
    pass = document.getElementById('pass');
    btnSunmit = document.getElementById('btnSubmit');
    contador = 0;

    if (nombre.value.length == 0) {
        contador++;
    }
    if (pass.value.length == 0) {
        contador++;
    }
    if (contador == 0) {
        btnSunmit.disabled = false;
    } else {
        btnSunmit.disabled = true;
    }

}



document.getElementById('correo').addEventListener("keyup", activarBtn);
document.getElementById('pass').addEventListener("keyup", activarBtn);
var login = document.getElementById('cuentaLogin');
let registro = document.getElementById('cuentaRegistro');
let contendorLogin = document.querySelector("#contenedorCuenta");





function regresarContenedor() {
    // login.style.left="15px";
    // registro.style.left="400px";
}
function moverContenedor() {
    login.classList.toggle("moverLogin");
    registro.classList.toggle("moverRegistro");
    // login.style.left="-400px";
    // registro.style.left="15px";
    // login.classList.toggle("contenedorCuentaClase");
    // login.classList.toggle('contenedorCuenta');
    // registro.classList.toggle('contenedorRegistroClase');
    // registro.classList.toggle('contenedorRegistro');

}
let boton = document.getElementById('btnRegistro').addEventListener('click', moverContenedor);
let contenedorPrincipal = document.getElementById('principal');

document.querySelector('.flechaRetroceder').addEventListener('click', moverContenedor);

document.querySelector("#btnCuenta").addEventListener('click', () => {
    contendorLogin.style.display = 'block';
    contenedorPrincipal.style.display = 'block';

});
let modal = document.getElementById("principal");
let header = document.getElementById('header');
let nav = document.getElementById('nav');
let search = document.getElementById('search');
let carrito = document.getElementById('carrito');


document.addEventListener('click', e => {
    if (e.target === modal || e.target === header || e.target === nav || e.target === search) {
        contendorLogin.style.display = 'none';
        contenedorPrincipal.style.display = 'none';
        carrito.style.transform = 'translateX(400px)';
    }
    console.log(e.target)
});

//mostrar el carrito
document.getElementById('btnCarrito').addEventListener('click', () => {
    carrito.style.transition = 'all .5s';
    carrito.style.transform = 'translateX(0px)';
    carrito.style.display = 'block';
    modal.style.display = 'block';
    contendorLogin.style.display = 'none';
});




