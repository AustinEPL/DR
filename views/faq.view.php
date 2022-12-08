<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
        <div class="contenedorFaq">
            <h1>Preguntas frecuentes</h1>
            <p class="pregunta">
                ¿Qué medios de pago puedo usar en Promart.pe?
            </p>
            <p class="respuesta">
                Puedes usar cualquier tarjeta Visa, Mastercard, American Express o Diners emitidas en Perú.
            </p>

            <p class="pregunta">
                ¿Los precios de los productos incluyen IGV?
            </p>

            <p class="respuesta">
                Todos nuestros precios incluyen IGV.
            </p>

            <p class="pregunta">
                ¿Es seguro comprar en DigitalRise.com.pe?

            </p>

            <p class="respuesta">
                Sí, en nuestra página web podrás comprar de forma segura. Utilizamos los más altos niveles de seguridad
                para proteger tanto tus datos personales como los de tus pagos.
            </p>

            <p class="pregunta">
                ¿CUÁNTO CUESTA EL SERVICIO DE DELIVERY O DESPACHO A DOMICILIO?

            </p>
            <p class="respuesta">
                El precio de envío depende de la zona de despacho y lo podrás visualizar durante la compra. Para ver los
                distritos donde actualmente tenemos cobertura de despacho a domicilio.
            </p>

            <p class="pregunta">
                ¿CUÁLES SON LOS HORARIOS DE DESPACHO?

            </p>
            <p class="respuesta">
                El rango de horario disponible para el despacho van desde las 9:00am hasta las 8:00pm.
                Antes de realizar tu pedido, comprueba la disponibilidad del horario de despacho para el día requerido.
            </p>

            <p class="pregunta">
                ¿PUEDO COMPRAR SIENDO MENOR DE EDAD?

            </p>
            <p class="respuesta">
                No, todos los servicios ofrecidos son de uso exclusivos para mayores de 18 años.
            </p>

            <p class="pregunta">
                ¿SI NO TENGO CORREO PUEDO COMPRAR EN PLAZAVEA TIENDA ONLINE?

            </p>
            <p class="respuesta">
                Es necesario tener una cuenta de correo electrónico para poder comprar en Digital Rise Online; en todo
                caso, podrías usar la de un familiar, pero recuerda que el correo electrónico será tu identificador para
                todas tus compras.
            </p>
            <p class="pregunta">
                ¿PUEDO RECOGER MI PEDIDO EN LA TIENDA?

            </p>
            <p class="respuesta">
                Sí, tenemos el servicio de Recojo en tienda y es gratis. Para ver las tiendas disponibles de recojo.
            </p>
            <p class="pregunta">
                ¿DigitalRise.com.pe realiza llamadas a sus clientes?
            </p>
            <p class="respuesta">
                Sí, tenemos el compromiso de brindarte el mejor servicio, es así que nos interesa estar comunicados
                contigo en cada etapa de tu compra a través de DigitalRise.com.pe. Nuestro Centro de Servicio al Cliente
                podrá realizar llamadas para confirmar el status de la compra, validar stocks, conocer tus apreciaciones
                sobre el servicio recibido y otras gestiones.
            </p>


        </div>
    </main>


    <?php
require 'views/partials/footer.view.php';


?>