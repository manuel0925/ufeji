<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Eventos_model
 *
 * @author manuel
 */
class Eventos_model extends CI_Model {

    public function cargarDatosTablaEventos() {
        $query = "SELECT E.ID,E.TITULO,E.SUBTITULO,CE.NOMBRE AS CATEGORIA,CONCAT(M.nombre_completo,' ',M.apellido) as NOMBRE,E.FECHA_EVENTO,E.FECHA_LIMITE,E.PRECIO,E.ACTIVO FROM UFEJI_DB.tbl_eventos AS E JOIN UFEJI_DB.tbl_miembros as M on (E.ENCARGADO=M.id)
JOIN UFEJI_DB.CATEGORIA_EVENTOS AS CE ON (E.CATEGORIA=CE.ID);";

        $resultado = $this->db->query($query);

        $resultado = $resultado->result_array();

        return $resultado;
    }

}
