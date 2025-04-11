<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('principal').view('practico/header_view').view('contenido/contenido1').view('contenido/contenido2').view('practico/footer_view');   
    }
    public function somos(){
        return view('principal').view('practico/header_view').view('practico/footer_view');
    }

}
