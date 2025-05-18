<?php

namespace App\Controllers;

use App\Models\Consulta_model;

class Home extends BaseController
{
    public function index(): string
    {
        return view('practico/header_view').view('contenido/cont_principal').view('practico/footer_view');   
    }
    public function comercializacion(){
        return view('practico/header_view').view('contenido/cont_comercializacion').view('practico/footer_view');
    }
    public function quienes_somos(): string
    {
        return view('practico/header_view').view('contenido/quienes_somos').view('practico/footer_view');
    }
    public function contacto(): string
    {
        return view('practico/header_view').view('contenido/contacto').view('practico/footer_view');
    }
    public function terminos(): string
    {
        return view('practico/header_view').view('contenido/terminos_y_condiciones').view('practico/footer_view');
    }
    public function galeria(): string
    {
        return view('practico/header_view').view('contenido/cont_galeria').view('practico/footer_view');
    }
    public function login(): string
    {
        return view('practico/header_view').view('contenido/login').view('practico/footer_view');
    }
    public function registrarse(): string
    {
        return view('practico/header_view').view('contenido/registrarse').view('practico/footer_view');
    }
}
