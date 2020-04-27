<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function administrar_usuario() {

        $this->load->view('usuarios/usuarios');
    }

    public function datosTablaUsuarios() {

        $resultados['data'] = $this->Usuarios_model->cargarDatosTablaUsuario();
        echo json_encode($resultados);
    }

    public function getModalUsuarios($id = 0) {
        $data['datos_usuarios'] = '';
        if ($id !== 0) {
            $id = base64_decode(base64_decode(base64_decode($id)));
            $data['datos_usuarios'] = $this->Usuarios_model->cargarDatosModalUsuario($id);
        }

        $this->load->view('usuarios/modal/modal_modificar_agregar_usuario', $data);
    }

    public function getModalCargarFoto() {

        $this->load->view('usuarios/modal/agregar_foto_modal');
    }

    public function cargarArchivoAjax() {


        if (array_key_exists('HTTP_X_FILE_NAME', $_SERVER) && array_key_exists('CONTENT_LENGTH', $_SERVER)) {
            $fileName = $_SERVER['HTTP_X_FILE_NAME'];
            $contentLength = $_SERVER['CONTENT_LENGTH'];
        } else
            throw new Exception("Error recuperando la cabecera");
//Error retrieving headers
        $path = 'data/foto_perfil/';
//No file uploaded
        if (!$contentLength > 0) {
            throw new Exception('Ningún archivo subido!');
        }

        file_put_contents(
                $path . $fileName, file_get_contents("php://input")
        );

        chmod($path . $fileName, 0777);
    }

}
