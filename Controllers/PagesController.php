<?php

class PagesController{

    public function nosotros(){
        return view('nosotros');
    }
    public function contacto(){
        return view('contacto');
    }

    public function busqueda()
    {
        return view('busqueda');
    }
    public function equipo()
    {
        return view('equipo');
    }
    public function product()
    {
        return view('product');
    }
    public function faq()
    {
        return view('faq');
    }
    public function cuenta()
    {
        return view('cuenta');
    }

}