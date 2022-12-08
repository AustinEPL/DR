<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/estilos.css">

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

<div class="wrap">
		<ul class="tabs">
			<li><a href="#tab1"><span class="fa fa-home"></span><span class="tab-text">MI CUENTA</span></a></li>
			<li><a href="#tab2"><span class="fa fa-group"></span><span class="tab-text">COMPRAS</span></a></li>
			<li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">CONTACTANOS</span></a></li>
			<li><a href="#tab4"><span class="fa fa-bookmark"></span><span class="tab-text">DIRECCIONES</span></a></li>
			
		</ul>

		<div class="secciones">
			<article id="tab1">
<style>
input[type=button],input[type=submit]
{
background-color: #31384A;
border: none;
color:white;
font-weight: bold;
padding: 6px 20px;
text-align: center;
font-size:16px;
margin: 4px 4px;
box-shadow: 3px 3px 3px black;
position: center;
font-family: monospace;
}

input[type="text"]
{
font-family: monospace;
color:black;
background-color:white;
padding:4px;
text-align: left;
font-size: 16px;
margin: 4px 4px;
}

body
{
background-color: #053452;
}

label
{
font-family: monospace;
padding: 4px;
font-weight: bold;
color: black;
text-align: center;
align:center;
font-size: 18px;
}

table
{
background-color: #F0EFEF;
padding: 5px 5px;
}

td
{
padding: 6px 10px;
}

</style>

<center>
<form name="Mantenimiento" action="mantenimiento.php" method="post">
<table border="5">

<tr align="center">
	<td><label>DNI</label></td><td><input type="text" value="<?= $_SESSION['ID']?>" maxlength="8" name="txtcodigo"></td>
	<td><label>Telefono</label></td><td><input type="text" value="" maxlength="9"  name="txttelefono"></td>

</tr>
<tr align="center">
	<td colspan="2"><label>Nombres Completos</label></td><td colspan="2"><input type="text" value="<?= $_SESSION['Name']?>" maxlength="30" name="txtnombre"></td>
</tr>
<tr align="center">
	<td colspan="2"><label>Email</label></td><td colspan="2"><input type="text" value="<?= $_SESSION['Email']?>" maxlength="30"  name="txtemail"></td>
</tr>

<tr><td colspan="6" align="center">
<input type="submit" value="Modificar" name="modificardatos" >
</td>
</tr>



</table>
</form>
</center>
			</article>
			<article id="tab2" align="center">
				
				<h1>MIS COMPRAS REALIZADAS</h1>
				
				<div id="centro">
				<p>Aqui podrás encontrar los estados de todas tus compras.</p>
				</div>
				
				
				<div id="centro">
				<p>Aqui veras todos nuestros productos.</p>
				</div>
				
				<img src="imgxd/cajavacia1.jpg" alt="Fotodecajavacia" widht="100px" height="100px">
					
					<a class="btn" href="https://grupo09tpw.000webhostapp.com/index.html" target="_blank">Comprar</a>
			</article>
			
			
			<article id="tab3" >
				<h1 align="center">CONTACTANOS</h1>
				
				<div id="centro">
				<p>Aqui encontrarás nuestros canales de atención:</p>
				</div>
				
				<div id="centro">
				<p id="parrafo">-Conoce a Brayan, nuestro chatbot.</p>
				</div>
				
				<div id="centro">
				<p id="parrafo">-WhatsApp: 987654321.</p>
				</div>
				
				<div id="centro">
				<p id="parrafo">-Call Center: (01) 611-5959.</p>
				</div>
				
				<div id="centro">
				<p id="parrafo">-Correo: consultas@DigitalRise.com.pe</p>
				</div>
			</article>
			
			<article id="tab4">
				<h1 align="center">MIS DIRECCIONES</h1>
				<div id="centro">
				<p>Aqui podrás ver la direccion de la tienda y agregar.</p>
				</div>
				
				<div align="center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d975.4489808691587!2d-77.
				03917546441804!3d-12.057557900000015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c6a4cadd41%
				3A0x684a92056addc88a!2sCyber%20Plaza!5e0!3m2!1ses-419!2spe!4v1668022216729!5m2!1ses-419!2spe"
				width="400" height="300" style="border:5; " allowfullscreen="" loading="lazy" 
				referrerpolicy="no-referrer-when-downgrade"; ></iframe>
				</div>
				<a class="btnm" href="https://www.google.com/maps/@-12.1825705,-76.952783,15z" target="_blank">+ Agrega dirección</a>		
			</article>
			
			
			
			
		</div>
	</div>


<?php
    require 'views/partials/footer.view.php';


    ?>