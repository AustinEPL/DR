<?php

function view($ruta)
{
    require("views/{$ruta}.view.php");
}

function dd($parametro)
{
    die(var_dump($parametro));
}
