<?php

class Router{
    protected $routes = [];


    public function register($routes){
        $this->routes = $routes;
    }

    public function handle($url){
        //verificamos si el url existe en nuestra ruta
        if (array_key_exists($url, $this->routes)) {
           $class=$this->routes[$url][0];
           $method=$this->routes[$url][1];
                  return (new $class)->$method();
                }
         die('La ruta no existe');
    }
}

?>
