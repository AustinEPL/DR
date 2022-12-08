<?php
require 'Core/bootstrap.php';


//al requerir el bootstrap nos esta devolviendo un objeto de tipo QueryBuilder, por lo tanto
//accederemos a su funcion createUser y pasamos los valores que recuperamos de la vaiable superglobal POST
//como usamos su funcion createUser tenemos que enviar el nombre de la tabla y sus valores
$user=User::find($_POST['ID']);
$user->update([
    'Name'=>$_POST['Name'],
    'Email' => $_POST['Email'], 
    'Password' => $_POST['Password']
]);


// header('Location: mostrando.php');