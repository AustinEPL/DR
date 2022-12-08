<?php

require 'database/Conexion.php';
require 'database/QueryBuilder.php';
require 'Controllers/HomeController.php';
require 'Controllers/PagesController.php';
require 'Controllers/LoginController.php';

require 'Core/Router.php';
Require 'Core/Request.php';
Require 'Core/Auth.php';
Require 'functions.php';
require 'Models/Model.php';
require 'Models/User.php';
require 'Models/Product.php';

// require 'functions.php';


require 'Core/database/App.php';


//Iniciamos la conexion a la bbdd
App::set('database',new QueryBuilder(
    Conexion::conectar()));

//retornamos el obejto queryBuilder con la conexon
// return new QueryBuilder($pdo);

