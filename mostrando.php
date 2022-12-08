<?php
require 'Core/bootstrap.php';

$resultados=User::all();
dd(empty($usuarioa));

?>


<ul>
<?php 
foreach ($resultados as $resultado): ?>
<li> <?= $resultado->ID?></li>
<li> <?= $resultado->Name?></li>
<li> <?= $resultado->Email?></li>

<?php endforeach?>
</ul>


<?php

// die(var_dump($resultado[1]));
echo "<form action='update.php' method='POST'>";
echo "<input name='ID' type='text' value='{$resultados[1]->ID}' readonly><br>";
echo "<input name='Name' type='text' value={$resultados[1]->Name}></br>";
echo "<input name='Email' type='text' value={$resultados[1]->Email}></br>";
echo "<input type='submit' value='enviar'>";
echo "</form>";

echo "<hr>";

echo "<form action='delete.php' method='POST'>";
echo "<h2>Eliminar el usuario</h2>";
echo "<input name='ID' type='text'><br>";
echo "<input type='submit' value='enviar'>";

echo "</form>";

?>


