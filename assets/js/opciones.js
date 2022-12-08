let opciones=document.getElementById('opcionC');
document.querySelector("#btnCuenta").addEventListener('click',()=>{
       opciones.style.display='block';
    modal.style.display = 'block';

});

let modal = document.getElementById("principal");
let carrito = document.getElementById('carrito');

document.getElementById('btnCarrito').addEventListener('click',()=>{
    carrito.style.transition='all .5s';
    carrito.style.transform='translateX(0px)';
    carrito.style.display='block';
    modal.style.display='block';
    opciones.style.display='none';
});

document.addEventListener('click', e => {
    if (e.target === modal || e.target === header || e.target === nav || e.target === search) {
    opciones.style.display='none';
modal.style.display='none';
        carrito.style.transform = 'translateX(400px)';
    }
    console.log(e.target)
});