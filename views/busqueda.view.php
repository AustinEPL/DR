<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Búsqueda</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <script defer src="https://kit.fontawesome.com/8d0d6a49a1.js" crossorigin="anonymous"></script>

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
    <div class="clasificar">
            <a class="enlaceBlanco">Precio mas bajo</a>
            <a class="enlaceBlanco">Precio mas alto</a>
            <a class="enlaceBlanco">Mejor valorados</a>
    </div>
    <main class="mainB">
        <div class="barraLateral">
        <p>Marca</p>    
        <ul>
                <li>Asus</li>
                <li>MSI</li>
                <li>Logitech</li>
                <li>Kingston</li>
            </ul>



          
        </div>

        <div class="busqueda">


            <?php

            $productos = Product::all();
            foreach ($productos as $products) : ?>
                <div class="producto">
                    <img src="<?= $products->Img ?>" alt="2080">
                    <p><?= $products->Name ?></p>
                    <p><span class="moneda">S/. <?= $products->Precio ?></span></p>

                    <form action="/product" method="POST">
                        <input type="text" name="ID" value="<?= $products->ID ?>">
                        <input class="bn31 bn31span" type="submit" value="Ver producto">
                    <!-- <a class="bn31" href=""><span class="bn31span">Ver producto</span></a> -->
                    </form>
                </div>
            <?php endforeach ?>




        </div>
    </main>

    <?php
    require 'views/partials/footer.view.php';

    ?>