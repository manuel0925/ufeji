<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuarios_model extends CI_Model {

    public function cargarDatosTablaUsuario() {
        $query = "SELECT `tbl_miembros`.`id`,
    `tbl_miembros`.`imgen_usuario`,
    `tbl_miembros`.`nombre_completo`,
    `tbl_miembros`.`apellido`,
    `tbl_miembros`.`genero`,
    `tbl_miembros`.`telefono`,
    `tbl_miembros`.`cedula`,
    `tbl_miembros`.`correo`,
    `tbl_miembros`.`titulo`,
    `tbl_miembros`.`ocupacion`,
    #`tbl_miembros`.`cargo`,
    `tbl_miembros`.`activo`,
    `tbl_cargo`.`nombre_cargo` as cargo
    
    FROM `u320591076_ufeji`.`tbl_miembros` inner join `u320591076_ufeji`.`tbl_cargo` on `tbl_miembros`.`cargo`= `tbl_cargo`.`id_cargo`";

        $resultado = $this->db->query($query);

        $resultado = $resultado->result_array();

        return $resultado;
    }

    public function cargarDatosModalUsuario($id) {
        $query = "SELECT `tbl_miembros`.`id`,
    `tbl_miembros`.`nombre_completo`,
    `tbl_miembros`.`apellido`,
    `tbl_miembros`.`genero`,
    `tbl_miembros`.`telefono`,
    `tbl_miembros`.`cedula`,
    `tbl_miembros`.`correo`,
    `tbl_miembros`.`contrasena`,
    `tbl_miembros`.`titulo`,
    `tbl_miembros`.`ocupacion`,
    `tbl_miembros`.`cargo`,
    `tbl_miembros`.`activo`
     FROM `u320591076_ufeji`.`tbl_miembros` WHERE `tbl_miembros`.`id`= '$id'";

        $resultado = $this->db->query($query);

        $resultado = $resultado->result_array();

        return $resultado;
    }

    public function cargarCargosFundacion() {
        $query = "select tbl_cargo.id_cargo,tbl_cargo.nombre_cargo from u320591076_ufeji.tbl_cargo";

        $resultado = $this->db->query($query);

        $resultado = $resultado->result_array();

        return $resultado;
    }

    public function modificarUsuario($obj) {
        $usuario_id = $this->session->userdata('id');
        $query = "UPDATE `u320591076_ufeji`.`tbl_miembros`
SET
`nombre_completo` = '$obj->nombre',
`apellido` = '$obj->apellido',
`genero` = '$obj->genero',
`telefono` = '$obj->telefono',
`cedula` = '$obj->cedula',
`correo` = '$obj->email',
`titulo` = '$obj->titulo',
`ocupacion` = '$obj->ocupacion',
`cargo` ='$obj->cargo',
`activo` = '$obj->activo',
`creado_por` = '',
`fecha_creacion` = CURDATE(),
`modificado_por` = '$usuario_id',
`fecha_modificacion` = CURDATE()
WHERE `id` = '$obj->id';";

        $resultado = $this->db->query($query);
        if ($obj->query_mode == 'R') {

            $resultado = $resultado->result_array();
        } else {
            $resultado = $this->db->error();
        }



        log_message('ERROR', 'modificarUsuario_CONSULTA\n<pre> ' . print_r($query, true) . '</pre>');

        log_message('ERROR', 'modificarUsuario_RESULTADO\n<pre> ' . print_r($resultado, true) . '</pre>');





        return $resultado;
    }

    public function agregarUsuario($obj) {
        $query = "INSERT INTO `u320591076_ufeji`.`tbl_miembros`
(`id`,
`nombre_completo`,
`apellido`,
`genero`,
`telefono`,
`cedula`,
`correo`,
`contrasena`,
`titulo`,
`ocupacion`,
`cargo`,
`activo`,
`imgen_usuario`,
`creado_por`,
`fecha_creacion`,
`modificado_por`,
`fecha_modificacion`)
VALUES
('$obj->' ,
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 '$obj->',
 );";

        //$resultado = $this->db->query($query);

        //$resultado = $resultado->result_array();
        
        log_message('ERROR', $query . "\n<pre>" . print_r($resultado, TRUE) . "</pre>");
        
        return $resultado;
    }

}
