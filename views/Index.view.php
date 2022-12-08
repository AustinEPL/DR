<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Digital Rise
    </title>
    <!-- <script src="assets/js/formulario.js" defer></script> -->
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

    <!-- MOSTRAR LOS PRODUCTOS DEL INDEX -->

    <div id="principal">
    </div>


    <div class="container">
        <div class="carousel">
            <div class="image"><span></span></div>
            <div class="image"><span></span></div>
            <div class="image"><span></span></div>
            <div class="image"><span></span></div>
            <div class="image"><span></span></div>
            <div class="image"><span></span></div>
            <div class="image"><span></span></div>
            <div class="image"><span></span></div>
            <div class="image"><span></span></div>
        </div>
    </div>
    <div class="blanco"></div>
    <main>
        <div class="contenedorPrincipal">
        
        <h1>PRODUCTOS DESTACADOS</h1>
        <div class="productosContenedor">
            <div class="producto">
                <img src="img/4090.jpg" alt="2080">
                <p>MSI Gáming GeForce RTX 4090 </p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/4080.jpg" alt="2080">
                <p>MSI Gaming GeForce RTX 4080</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/3090.jpg" alt="2080">
                <p>MSI GeForce RTX 3090 RTX</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/3080.jpg" alt="3080">
                <p>MSI Gaming GeForce RTX 3080</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/6950XT.jpg" alt="3080">
                <p>MSI Gaming Radeon RX 6950 XT</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
        </div>
       
        <h2>Nuevos ingresos</h2>
        <div class="productosContenedor">
            <div class="producto">
                <img src="img/4090.jpg" alt="2080">
                <p>MSI Gaming GeForce RTX 4090 </p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/4080.jpg" alt="2080">
                <p>MSI Gaming GeForce RTX 4080</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/AMDRyzen9-5900X.jpg" alt="2080">
                <p>AMD Ryzen 9 5900X</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/Corei9-11900K.jpg" alt="2080">
                <p>AMD Ryzen 9 5900X</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/6950XT.jpg" alt="3080">
                <p>MSI Gaming Radeon RX 6950 XT</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
        </div>
        <h2>OFERTAS</h2>
        <div class="productosContenedor">
            <div class="producto">
                <img src="img/AMDRyzen9-5900X.jpg" alt="2080">
                <p>AMD Ryzen 9 5900X</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/AMDRyzen7-5700G.jpg" alt="2080">
                <p>AMD Ryzen 7 5700G</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/Corei9-11900K.jpg" alt="2080">
                <p>AMD Ryzen 9 5900X</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/i7-12700KF.jpg" alt="2080">
                <p>AMD Ryzen 9 5900X</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            <div class="producto">
                <img src="img/i5-11400F.jpg" alt="2080">
                <p>AMD Ryzen 9 5900X</p>
                <p>precio</p>
                <a class="bn31" href=""><span class="bn31span">Ver producto</span></a>
            </div>
            
        </div>
        <h2>NUESTRAS MARCAS</h2>

        <div class="marcas">
<img src="img/msi.png" alt="">            
<img src="img/intel.png" alt="">            
<img src="img/amd.png" alt="">            
<img src="img/logitech.png" alt="">        
<img src="img/asus.png" alt="">            
<img src="img/coolerMaster.png" alt="">            
            
        </div>


        

        </div>
<br>
<br>
<br>
<p style="text-align: center;">

<iframe width="560" height="315" src="https://www.youtube.com/embed/J5q3AlBfg2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


</p>
<br>
<br>

    </main>

    <?php
    require 'views/partials/footer.view.php';


    ?>