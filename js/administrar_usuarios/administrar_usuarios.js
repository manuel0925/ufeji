console.log($("#tabla_administrar_usuarios"));

$("#tabla_administrar_usuarios").DataTable({
    "responsive": true,
    "sAjaxSource": 'usuarios/datosTablaUsuarios',
    "columns": [
        {"data": "id"},
        {"data": null},
        {"data": "nombre_completo"},
        {"data": "apellido"},
        {"data": "telefono"},
        {"data": "cedula"},
        {"data": "correo"},
        {"data": "genero"},
        {"data": "titulo"},
        {"data": "ocupacion"},
        {"data": "cargo"},
        {"data": null, className: 'text-center'},
        {"data": null, className: "align-items-center"},
    ],
    "aoColumnDefs": [
        {
            "aTargets": [1],
            "mRender": function (data, type, full) {
                return '<a href="javascript:void(0);" class="btn btn-primary agregar_editar_foto" id="' + full.imgen_usuario + '"><i class="fa fa-edit"></i></a>' + '<input type="file" id="input_image" name="input_image" style="display:none">';
            }
        },
        {
            "aTargets": [11],
            "mRender": function (data, type, full) {
                if (full.activo == "S") {

                    return '<h4><span class="label  label-md label-success">Activo</span></h4>';
                } else {

                    return '<span class="label label-danger">Inactivo</span>';

                }
            }
        },
        {
            "aTargets": [12],
            "mRender": function (data, type, full) {
                return '<a href="javascript:void(0);" class="btn btn-md btn-primary btn_modificar_usuario btn-info" id="' + full.id + '"><i class="fa fa-edit"></i></a>';
            }
        },
    ],
    "dom": "<'row'<'col-sm-5'l><'col-sm-7 'Br>>" +
            "t" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
    "preDrawCallback": function () {
        $('.dt-buttons').addClass('pull-right');
    },
    "buttons": [
        {
//                            "extend": "text",
            "className": "btn btn-labeled btn-success",
            "text": '<span class="btn-label"><i class="fa fa-plus"></i></span>&nbsp;Agregar Usuarios',
            "action": function (nButton, oConfig, oFlash) {


                $('.modal_usuarios .modal-content').load('usuarios/getModalUsuarios', function () {
                    $('.modal_usuarios').modal("show");
                });


            },
            init: function (api, node, config) {
                $(node).removeClass('dt-button')
            }
        }

    ]

})


$("#tabla_administrar_usuarios").on("click", ".btn_modificar_usuario", function () {

    var codigo = $(this).attr('id');
    codigo = btoa(btoa(btoa(codigo)));
    $('.modal_usuarios .modal-content').load('usuarios/getModalUsuarios/' + codigo, function () {
        $('.modal_usuarios').modal("show");
    });

});

$(".modal_usuarios").on("click", "#btn_subir_foto", function () {

    $("#file_foto").click();

});



$(".modal_usuarios").on("change", "#file_foto", function () {
    
   
});




