<?php

class LoginController
{


    public function login()
    {
        //todo el codigo del login 
        Auth::tryLogin($_POST['Email'], $_POST['Password']);
        if (Auth::check()) {
                      header('Location:/');

        } else{
            echo "<form style='display:none;'  action='/' method='POST'> 
            <input type'text' name='mensaje' value='Correo o contraseña incorrecta'>
            <button id='automatico'>Enviar</button>
            </form>";
?>
            <script>
            let automatico=document.getElementById('automatico');
            automatico.click();
            </script>
            <?php 
        }
    }

    public function create(){

        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $pass=password_hash($_POST['Password'],PASSWORD_DEFAULT);
        date_default_timezone_set('America/Lima');
        $fecha = date('Y-m-d H:i:s');
        if(!Auth::emailExist($email)){
            User::create([
                'Name'=>$name,
                'Email'=> $email,
                'Password'=>$pass,
                'Fecha_reg'=>$fecha]);

                echo "<form style='display:none;'  action='/' method='POST'> 
                <input type'text' name='mensaje2' value='Cuenta creada correctamente, ya puede iniciar sesion'>
                <button id='automatico'>Enviar</button>
                </form>";
    ?>
                <script>
                let automatico=document.getElementById('automatico');
                automatico.click();
                </script>
                <?php 
                
            // header('Location:  /');
        
        
        }else{
                    echo "<form style='display:none;'  action='/' method='POST'> 
                    
                    <input type'text' name='mensaje' value='El correo ya esta registrado, inicie sesion'>

                    <button id='automatico'>Enviar</button>
                    </form>";
        ?>
                    <script>
                    let automatico=document.getElementById('automatico');
                    automatico.click();
                    </script>
                    <?php 
                }
        
    }

    public function logout()
    {
        //codigo de logout
        Auth::logout();
        header('Location: /');

    }
}
