<?php
class Conexion{


    public static function  conectar(){

        try {
            return new PDO('mysql:host=localhost:3308;dbname=database1','root','');
            //si quiero usar mariaDB utilizo el puerto 3307
            //usar mysql usar el puerto 3308
                      
        } catch (PDOException $e) {
            echo 'Conexion fallida'.$e->getMessage();

        }
     

    }



   }

   
