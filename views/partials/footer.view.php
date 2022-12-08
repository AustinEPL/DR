<footer>
        <section class="section-footer">
            <img class="logo-footer" src="../img/ICONO.png" alt="logo">
            <p>Digital Rise, venta de equipos electronicos, componentes de PC</p>

            <div class="grupoiconos">
                <a class="enlaceBlanco " href="https://www.facebook.com/" target="_blank">
                    <i class="fa-beat-fade icono fa-brands fa-facebook"></i>
                </a>


                <a class="enlaceBlanco " href="https://web.whatsapp.com/" target="_blank">
                    <i class="fa-beat-fade icono fa-brands fa-whatsapp"></i>
                </a>

                <a class="enlaceBlanco " href="https://web.telegram.org/z/" target="_blank">
                    <i class="fa-beat-fade icono fa-brands fa-telegram"></i>
                </a>

                <a class="enlaceBlanco " href="https://www.instagram.com/" target="_blank">
                    <i class="fa-beat-fade icono fa-brands fa-square-instagram"></i>
                </a>
                <br>
                <br>
                <br>
<p>Nuestras formas de pago</p>
                <a class="enlaceBlanco " ><i class="icono fa-brands fa-cc-visa"></i></a>
                <a class="enlaceBlanco "><i class="master icono fa-brands fa-cc-mastercard"></i></a>
            </div>

            <div>
                <p > ©️2022 Digital Rise. Todos los derechos reservados.</p>
                <ul class="ulFooter">
                    <li><a class="enlaceBlanco" href="nosotros">Nosotros</a></li>
                    <li><a class="enlaceBlanco" href="contacto">Contacto</a></li>
                    <li><a class="enlaceBlanco" href="equipo">Equipo</a></li>
                    <li><a class="enlaceBlanco" href="faq">Preguntas frecuentes</a></li>


                    <!-- <li><a href=""></a></li> -->
                </ul>

            </div>
        </section>
        <section class="section-iframe">
            <p>Ubicanos en</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1321.018701237721!2d-77.03830148846876!3d-12.055232035545334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c66039e27f%3A0xf87b9752d3eeb99c!2sGaleria%20COMPUPLAZA!5e0!3m2!1ses-419!2spe!4v1663209089085!5m2!1ses-419!2spe"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </footer>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    
    <script>
            swal ( "oops" ,  "<?=  $_POST['mensaje'];?>" ,  "error" );
    </script>
    <script>
            swal ( "Exito" ,  "<?=  $_POST['mensaje2'];?>" ,  "success" );
    </script>
<script>
window.addEventListener('mouseover', initLandbot, { once: true });
window.addEventListener('touchstart', initLandbot, { once: true });
var myLandbot;
function initLandbot() {
  if (!myLandbot) {
    var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
    s.addEventListener('load', function() {
      var myLandbot = new Landbot.Livechat({
        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1432620-P7EEUQ7C9Y36U8PV/index.json',
      });
    });
    s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  }
}
</script>
    </body>

</html>