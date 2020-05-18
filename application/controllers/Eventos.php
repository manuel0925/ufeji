<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Eventos_model");
    }

    public function index() {
        $this->load->view("eventos/eventos");
    }

    public function datosTablaEvento() {
        $resultado["data"] = $this->Eventos_model->cargarDatosTablaEventos();
        echo json_encode($resultado);
    }

}
