<input type="checkbox" id="check">

<header class="header" id='header'>
    <input type="checkbox" id="check">
    <div class="icon">
        <a href="/"><img src="../img/ICONO.png"></a>
    </div>
    <div class="search_box">
        <input required id="search" type="search" placeholder="Buscar..." >
        <span onclick="location.href = 'busqueda'" class="fa fa-search"></span>
    </div>
    <ul>
        <li><a id="btnCuenta"><i class="icono fa-solid fa-user"></i>Cuenta</a></li>

        <li><a id="btnCarrito"><i class="icono fa-solid fa-cart-shopping"></i></i>Carrito</a></li>
    </ul>
    <div class="contenedorCuenta" id="contenedorCuenta">
        <div id="cuentaLogin">
            <div class="cuentaTexto">Iniciar Sesion</div>

            <form action="/login" method="POST">
                <div>
                    <label for="correo"><span>Correo</span>
                        <input class="input" name="Email" type="email" id="correo" autocomplete="off" requied></input>
                    </label>
                </div>
                <div>
                    <label for="pass"><span>Contraseña</span>
                        <input class="input" name="Password" type="password" id="pass" autocomplete="off" requied></input>
                    </label>
                </div>
                <button type="submit" id="btnSubmit" disabled class="btn">Iniciar sesion</button>

                <?php if (!empty($_POST['mensaje'])) {
                    echo "<p class='enlaceBlanco'> {$_POST['mensaje']}</p>";
                }
                ?>


                <div class="cuentaTexto"></div>

                <p id="margintop" class="cuentaTexto">No tiene una cuenta?</p>
                <button type="button" id='btnRegistro' class="btn">Registrarse</button>

            </form>

        </div>
        <div id="cuentaRegistro">
            <div class="retrocederCuenta"></div>
            <i class="flechaRetroceder fa-sharp fa-solid fa-arrow-left"></i>
            <div class="cuentaTexto">Registro</div>
            <form action="/create" method="POST">

                <div>
                    <label for='name' id='l1'>
                        <span id='s1'>Nombre</span>
                        <input class="input" type='text' name='Name' id='name' required autocomplete='off' class='f'>
                    </label>
                </div>
                <div>
                    <label for='email' id='l2'>
                        <span id='s2'>Correo</span>
                        <input class="input" type='email' name='Email' id='email' required autocomplete='off' class='f'>
                    </label>
                </div>

                <div>
                    <label for='pwdr' id='l4'>
                        <span id='s4'>Contraseña</span>
                        <input class="input" type='password' name='Password' id='pwdr' required autocomplete='off' class='f'>
                    </label>
                </div>
                <div>
                    <label for='pwdrepeat' id='l5'>
                        <span id='s5'>Confirma contraseña</span>
                        <input class="input" type='password' name='pwdrepeat' id='pwdrepeat' required autocomplete='off' class='f'>
                    </label>
                </div>
                <span id="validacion"></span>
                <button type='submit' name='submit' id='submit' class="btn" disabled>Registrarte</button>
                <p>Al hacer clic en "Registrarte", aceptas nuestras Condiciones</p>

            </form>
        </div>
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

<script>
    let contador = 0;
    let pass = document.getElementById('pwdr');
    let passRepeat = document.getElementById('pwdrepeat');
    let validacion = document.getElementById('validacion');
    let name = document.getElementById('name');
    let btn = document.getElementById('submit');

    name.addEventListener("keyup", () => {
        if (name.value.length < 2) {
            validacion.innerHTML = 'Ingrese su nombre';
            name.style.color = 'red';
            btn.disabled = true;

        } else {
            validacion.innerHTML = '';
            name.style.color = 'white';
        }
        if (!name.value.length == 0 && pass.value.length >= 8 && passRepeat.value.length >= 8) {

            pass.style.color = 'white';
            passRepeat.style.color = 'white';
            if (pass.value === passRepeat.value) {
                validacion.innerHTML = '';
                btn.disabled = false;

            } else {
                validacion.innerHTML = 'Las contraseñas no coinciden';
                pass.style.color = 'red';
                passRepeat.style.color = 'red';
                btn.disabled = true;
            }
        }

    });


    pass.addEventListener('keyup', (e) => {

        if (pass.value.length < 8) {
            pass.style.color = 'red';
            validacion.innerHTML = 'Minimo 8 caracteres';
            btn.disabled = true;
        }
        if (pass.value.length >= 8) {
            pass.style.color = 'white';
            validacion.innerHTML = '';

        }
        if (!name.value.length == 0 && pass.value.length >= 8 && passRepeat.value.length >= 8) {

            pass.style.color = 'white';
            passRepeat.style.color = 'white';
            if (pass.value === passRepeat.value) {

                validacion.innerHTML = '';
                btn.disabled = false;
            } else {
                validacion.innerHTML = 'Las contraseñas no coinciden';
                pass.style.color = 'red';
                passRepeat.style.color = 'red';
                btn.disabled = true;

            }
        }
    });

    passRepeat.addEventListener('keyup', (e) => {

        if (passRepeat.value.length < 8) {
            passRepeat.style.color = 'red';
            validacion.innerHTML = 'Minimo 8 caracteres';
            btn.disabled = true;
        }
        if (passRepeat.value.length >= 8) {
            passRepeat.style.color = 'white';
            validacion.innerHTML = '';

        }
        if (!name.value.length == 0 && pass.value.length >= 8 && passRepeat.value.length >= 8) {

            pass.style.color = 'white';
            passRepeat.style.color = 'white';
            if (pass.value === passRepeat.value) {

                validacion.innerHTML = '';
                btn.disabled = false;

            } else {
                validacion.innerHTML = 'Las contraseñas no coinciden';
                pass.style.color = 'red';
                passRepeat.style.color = 'red';
                btn.disabled = true;
            }
        }
    });

 
</script>