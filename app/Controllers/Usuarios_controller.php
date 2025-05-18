<?php
namespace App\Controllers;

use App\Models\Consulta_model;
use App\Models\Usuarios_model;

class Usuarios_controller extends BaseController
{
    public function añadir_consulta(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules(
            [
                'nombre' => 'required|max_length[150]',
                'apellido' => 'required|max_length[150]',
                'correo' => 'required|valid_email',
                'motivo' => 'required|max_length[100]',
                'consulta' => 'required|max_length[250]|min_length[100]',
            ],
            [   //Errores
                'nombre' => [
                    'required' => 'El nombre es requerido',
                ],
                'apellido' => [
                    'required' => 'El apellido es requerido',
                ],
                'correo' => [
                    'required' => 'El correo electrónico es obligatorio',
                    'valid_mail' => 'La dirección de correo debe ser válida'
                ],
                'motivo' => [
                    'required' => 'El motivo es obligatorio',                   
                    'max_length' => 'El motivo de la consulta debe tener como máximo 100 carácteres',
                ],
                'consulta' => [
                    'required' => 'La consulta es requerida',
                    'min_length' => 'La consulta debe tener como mínimo 10 carácteres',
                    'max_length' => 'La consulta debe tener como máximo 200 carácteres',
                ],
            ]
        );

        if ( $validation->withRequest($request)->run() ) {
            $data = [
                'mensaje_nombre' => $request->getPost('nombre'),
                'mensaje_apellido' => $request->getPost('apellido'),
                'mensaje_correo' => $request->getPost('correo'),
                'mensaje_motivo' => $request->getPost('motivo'),
                'mensaje_consulta' => $request->getPost('consulta'),
            ];

            $consulta = new Consulta_model();
            $consulta = insert($data);

            return redirect() -> route('contacto')->with('mensaje_consulta', 'Su consulta se envió exitosamente!');
        }else{
            $data['titulo'] = 'Contacto';
            $data['validation'] = $validation->getErrors();
            return view('practico/header_view').view('contenido/contacto').view('practico/footer_view');
        }
    }
}
