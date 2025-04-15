<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('practico/header_view').view('contenido/cont_principal').view('practico/footer_view');   
    }
    public function comercializacion(){
        return view('practico/header_view').view('contenido/cont_comercializacion').view('contenido/contenido2').view('practico/footer_view');
    }
}
