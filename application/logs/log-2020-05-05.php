<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-05 19:59:56 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-05 20:00:14 --> 404 Page Not Found: Assets/img
ERROR - 2020-05-05 20:00:19 --> 404 Page Not Found: Pages/index.html
ERROR - 2020-05-05 20:00:25 --> Query error: Unknown column 'tbl_miembros.imgen_usuario' in 'field list' - Invalid query: SELECT `tbl_miembros`.`id`,
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
    
    FROM `UFEJI_DB`.`tbl_miembros` inner join `UFEJI_DB`.`tbl_cargo` on `tbl_miembros`.`cargo`= `tbl_cargo`.`id_cargo`
ERROR - 2020-05-05 20:00:25 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/ufeji/application/models/Usuarios_model.php 30
ERROR - 2020-05-05 20:00:50 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:01:23 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:01:24 --> Query error: Unknown column 'tbl_miembros.imgen_usuario' in 'field list' - Invalid query: SELECT `tbl_miembros`.`id`,
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
    
    FROM `UFEJI_DB`.`tbl_miembros` inner join `UFEJI_DB`.`tbl_cargo` on `tbl_miembros`.`cargo`= `tbl_cargo`.`id_cargo`
ERROR - 2020-05-05 20:01:24 --> Severity: error --> Exception: Call to a member function result_array() on bool /var/www/html/ufeji/application/models/Usuarios_model.php 30
ERROR - 2020-05-05 20:03:43 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:03:55 --> SELECT id_cargo,nombre_cargo FROM UFEJI_DB.tbl_cargo;
<pre>Array
(
    [0] => Array
        (
            [id_cargo] => 1
            [nombre_cargo] => webmaster
        )

    [1] => Array
        (
            [id_cargo] => 2
            [nombre_cargo] => Usuario
        )

)
</pre>
ERROR - 2020-05-05 20:04:55 --> INSERT INTO `UFEJI_DB`.`tbl_miembros`
(
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
`creado_por`,
`fecha_creacion`,
`modificado_por`,
`fecha_modificacion`)
VALUES
('santiago' ,
 'rojas',
 'M',
 '(809)4324-4443',
 '00312156447',
 'santiaog@gmail.com',
 '1234567890',
 'preofesor',
 'Maestro de primaria',
 '1',
 TRUE,
 '1',
  NOW(),
 '1',
 NOW()
 );
<pre>1</pre>
ERROR - 2020-05-05 20:05:02 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:05:48 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:07:28 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:10:06 --> INSERT INTO FOTO(ID,ID_ASOCIATIVO,UBUCACION_ASOCIATIVO,NOMBRE_ARCHIVO,CATEGORIA,CREADO_POR,CREADO_EN,MODIFICADO_POR,MODIFICADO_EN,ESTADO)
VALUE( '3' ,'1', 'data/img/usuario/', '1', '1' ,'1', NOW(), '1' ,NOW() ,TRUE)
                 ON DUPLICATE KEY UPDATE NOMBRE_ARCHIVO ='1', MODIFICADO_POR='1', MODIFICADO_EN=NOW();
<pre>1</pre>
ERROR - 2020-05-05 20:31:27 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:33:19 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:49:18 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:49:49 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:50:15 --> 404 Page Not Found: Pdfmakeminjsmap/index
ERROR - 2020-05-05 20:53:02 --> 404 Page Not Found: Pdfmakeminjsmap/index
