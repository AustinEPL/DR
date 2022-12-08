<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
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
$resultado=Product::find($_POST['ID']);
    ?>

<main>
    <div class="contenedorPrincipalProducto">
    <h1><?=$resultado->Name?></h1>
    <img src="<?=$resultado->Img?>" alt="">
    <p><?=$resultado->Descripcion?></p>
    <p><span class="pree">S/. <?=$resultado->Precio?></span></p>
    <br>
    <a class="bn31" href=""><span class="bn31span">Comprar</span></a>
    <br>
    <a class="bn31" href=""><span class="bn31span">Añadir al carrito</span></a>


    </div>
</main>


<?php
    require 'views/partials/footer.view.php';


    ?>