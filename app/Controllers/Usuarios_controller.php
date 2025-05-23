<?php
namespace App\Controllers;

use App\Models\Consulta_model;
use App\Models\Personas_model;

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
                'nombre_mensaje' => $request->getPost('nombre'),
                'apellido_mensaje' => $request->getPost('apellido'),
                'correo_mensaje' => $request->getPost('correo'),
                'motivo_mensaje' => $request->getPost('motivo'),
                'consulta_mensaje' => $request->getPost('consulta'),
            ];

            $consulta = new Consulta_model();
            $consulta->insert($data);

            return redirect() -> route('contacto')->with('mensaje_consulta', 'Su consulta se envió exitosamente!');
        }else{
            $data['titulo'] = 'Contacto';
            $data['validation'] = $validation->getErrors();
            return view('practico/header_view').view('contenido/nav_visitante').view('contenido/contacto', ['validation' => $validation]).view('practico/footer_view');
        }
    }

    public function buscar_usuario(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        $session = session();

        $validation->setRules(
            [
                'correo' => 'required|valid_email|is_unique[personas.persona_mail]',
                'password' => 'required|min_length[8]|matches[personas.persona_password]',
            ],
            [   //Errores
                'correo' => [
                    'required' => 'El correo electrónico es obligatorio',
                    'valid_mail' => 'La dirección de correo no está registrada',
                    'is_unique' => 'Existe otro cliente con esa cuenta',
                ],
                'password' => [
                    'required' => 'La contraseña es obligatoria',
                    'min_length' => 'La contraseña es incorrecta, debe tener mínimo 8 carácteres',
                    'matches' => 'La contraseña es incorrecta',
                ],
            ]
        );

        if ( $validation->withRequest($request)->run() ) {
            $data['titulo'] = 'Login';
            $data['validation'] = $validation->getErrors();

            return view('practico/header_view').view('contenido/nav_visitante').view('contenido/login').view('practico/footer_view');
        }

        $mail = $_POST('correo');
        $pass = $_POST('pass');

        $user_Model = new Personas_model();

        $user = $user_Model->where('persona_mail', $mail)->where('persona_estado', 1)->first();

        if($user && password_verify($pass, $user['persona_password'])){
            $data = [
                'id' => $user['id_persona'],
                'nombre' => $user['persona_nombre'],
                'apellido' => $user['persona_apellido'],
                'perfil' => $user['perfil_id'],
                'login' => TRUE,
            ];
            $session->set($data);
            switch($user['perfil_id']){
                case '1': return redirect()->route('user_admin');
                break;
                case '2': return redirect()->route('/');
                break;
            }
        }else{
            return redirect()->route('login_cliente')->with('mensaje', 'Usuario y/o contraseña incorrecto');
        }
    }

    public function cerrar_sesion(){
    
        $session = session();
        $session->destroy();
        return redirect()->route('login_cliente');
    
    }

    public function admin(){

        $data['titulo'] = 'Index';
        return view('practico/header_view').view('contenido/nav_admin').view('Backend/contenido_admin').view('practico/footer_view');
    
    }
}
