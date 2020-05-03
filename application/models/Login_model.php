<?php

class Login_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function loginUsuario($obj) {

        $query = "SELECT `tbl_miembros`.`id`,
    `tbl_miembros`.`nombre_completo`,
    `tbl_miembros`.`apellido`,
    `tbl_miembros`.`contrasena`,
    `tbl_miembros`.`cargo`,
    `tbl_miembros`.`activo`
     FROM `UFEJI_DB`.`tbl_miembros` where `tbl_miembros`.`correo`='$obj->email';
    ";

        $result = $this->db->query($query);

        $filas = $result->num_rows();
        if ($filas > 0) {
             $result = $result->result_array();
             if(password_verify($obj->pass,$result[0]['contrasena'])){
                 return $result;
             }else{
                 return 0;
             }
        } else {
            return $filas;
        }
        
        
    }

}
