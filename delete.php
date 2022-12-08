<?php
require 'Core/bootstrap.php';
$user=User::find($_POST['ID']);
$user->delete();
header('Location: /');


