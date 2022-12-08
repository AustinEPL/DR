<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/8d0d6a49a1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
</head>
<body>
<?php
    //cuerpo del index

    if (Auth::check()) {
        require 'views/partials/headerIn.view.php';
    } else {
        require 'views/partials/header.view.php';
    }
    require 'views/partials/navbar.view.php';

    ?>

<main>
<h1 style="text-align:center;">Equipo grupo 9</h1>

    <div class="contenedorEquipo">

    <div class="integrante">
        <h2>Austing Edge Pecho Lindo</h2>
        <img src="img/austing.jfif" alt="">
        <p>Desarrollador web</p>
        <p>Desarrollador de API chatbot</p>

    </div>
    <div class="integrante">
        <h2>Sergio André Henríquez Pérez</h2>
        <img src="img/sergio.jpg" alt="">
        <p>Desarrollador Base de datos</p>
        <p>Desarrollador responsive web desing</p>



    </div>
    <div class="integrante">
        <h2>Carlos Aguero Huallanca</h2>
        <img src="img/carlos.jpg" alt="">
        <p>Mockup</p>
        <p>vistas usuario y administracion</p>


    </div>
    
    </div>
</main>


<?php
    require 'views/partials/footer.view.php';


    ?>