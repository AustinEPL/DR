

<input type="checkbox" id="check">

<header class="header" id='header'>
    <input type="checkbox" id="check">
    <div class="icon">
        <a href="/"><img src="../img/ICONO.png"></a>
    </div>
    <div class="search_box">
        <input id="search" type="search" placeholder="Buscar...">
        <span onclick="location.href = '/busqueda'" class="fa fa-search"></span>
    </div>
    <ul>
        <li><a id="btnCuenta"><i class="icono fa-solid fa-user"></i>Hola <?= $_SESSION['Name'] ?></a></li>

        <li><a id="btnCarrito"><i class="icono fa-solid fa-cart-shopping"></i></i>Carrito</a></li>
    </ul>
    <div class="opcionCuenta" id="opcionC">
       
         <a class="enlaceBlanco" href="/cuenta">Mi cuenta</a>
         <form action="/logout" method="POST">
            <button class="noBoton enlaceBlanco">Cerrar Sesion</button>
         </form>

 


    </div>



    <div class="carrito" id="carrito">

        <div class="productos"></div>
        <div class="productos"></div>
        <div class="productos"></div>
        <div class="productos"></div>


        <button type="button">Ir a la bolsa</button>

    </div>



    <label for="check" class="bar">
        <span class="fa fa-bars" id="bars"></span>
        <span class="fa fa-times" id="times"></span>
    </label>

</header>

<script src="assets/js/opciones.js" defer></script>