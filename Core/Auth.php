<?php

class Auth{

    public static function tryLogin($email,$password){
        // App::get('database')
        $user=User::findBy(['Email'=>$email]);
        //verifico si coincide
        if(!empty($user) AND password_verify($password,$user[0]->Password)){
            //iniciamos la sesion
            static::verificarSesion();
            $_SESSION['ID']= $user[0]->ID;
            $_SESSION['Name']= $user[0]->Name;
            $_SESSION['Email']= $user[0]->Email;
            return true;
        }
        return false;

    }

    public static function check()
    {
        //verificar si la session esta iniciada
      static::verificarSesion();
        if (empty($_SESSION['ID'])) {
            return false;
            # code...
        }return true;
        # code...
    }

    public static function emailExist($email)
    {
        if (empty(User::findBy(['Email'=>$email]))) {
            return false;
        } else {
            return true;
        }
    }

    public static function verificarSesion()
    {
        if (empty(session_id())) {
            session_start();
        }
    }

    
    public static function logout(){
        static::verificarSesion();
        session_destroy();

    }

    
}
