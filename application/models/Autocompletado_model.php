<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autocompletado_model
 *
 * @author manuel
 */
class Autocompletado_model extends CI_Model {

    public function autocompletadoUsuario($param) {


        $query = "SELECT id as ID, CONCAT(nombre_completo,' ',apellido) as NOMBRE FROM tbl_miembros where  nombre_completo like '%$param%';";

        $resultado = $this->db->query($query);

        $resultado = $resultado->result_array();

        log_message('ERROR', "completadoRecetas\n " . $query . "\n<pre>" . print_r($datos, TRUE) . "</pre>");

        foreach ($resultado[0] as $value) {
            $fila["nombre"] = $value['NOMBRE'];
            $fila["codigo"] = $value['ID'];

            $row_set[] = $fila;
        }


        return $filas;
    }

}
