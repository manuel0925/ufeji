<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of autocompletado
 *
 * @author manuel
 */
class Autocompletado extends CI_Controller {

    public function __cosntruct() {
        parent::__cosntruct();

        $this->load->model("Autocompletado_model");
    }

    
}
