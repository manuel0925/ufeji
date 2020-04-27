<?php
//echo"<pre>";
//print_r($datos_usuarios);
//echo"</pre>";
?>

<div class="modal-header">
    <h4 class="modal-title"><?php echo (is_array($datos_usuarios)) ? "Modificar Usuario" : "Agregar Usuario"; ?></h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
    <form id="frm_modficar_agregar_usuario" class="form-horizontal"enctype="multipart/form-data">
        <input type="hidden" id="id" name="id" value='' />

        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="fullname">Nombre :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="text" id="nombre" name="nombre"required="true" />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="fullname">Apellido :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="text" id="Apellido" name="Apellido"  required="true" />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="fullname">Genero :</label>
            <div class="col-md-8 col-sm-8">
                <div class="radio radio-css radio-inline">
                    <input type="radio" name="genero" value="masculino" checked />
                    <label for="inlineCssRadio1">Masculino</label>
                </div>
                <div class="radio radio-css radio-inline">
                    <input type="radio" name="genero" value="Femenino" />
                    <label for="inlineCssRadio2">Femenino</label>
                </div>
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="fullname">Telefono</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="text" id="telefono" name="telefono"  />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="fullname">cedula :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="text" id="cedula" name="cedula" required="true" />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="email">Correo * :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="text" id="email" name="email"  required="true" />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="email">Contraseña * :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="password" id="pass" name="pass" data-parsley-type="email" placeholder="Email" required="true" />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="email"> Confirmacion Contraseña * :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="password" id="pass_confirmacion" name="pass_confirmacion" data-parsley-type="email"  required="true" />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="email">Titulo * :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="text" id="titulo" name="titulo"  required="true" />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="website">Cargo :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="text" id="cargo" name="cargo" />
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="message">Estado :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" id="estado" name="estado" rows="4"  required=""/>
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="message">Ocupacion :</label>
            <div class="col-md-8 col-sm-8">
                <input class="form-control" type="text" id="ocupacion" name="ocupacion" required="" />

            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-md-4 col-sm-4 col-form-label" for="message">Ocupacion :</label>
            <div class="col-md-8 col-sm-8">
                <input style="width: 100%" type="button" class=" btn btn-primary" value="subir foto" id="btn_subir_foto" />
                <input style="display:none" type="file" class="btn btn-primary" value="" id="file_foto" name="file_foto" />

            </div>
        </div>
    </form>
</div>

<div class="modal-footer">
    <a href="javascript:;" class="btn btn-success" id="btn_guardar_cambios_agregar_usuario">Guardar Cambios <i class="fa fa-save"></i></a>
    <a href="javascript:;" class="btn btn-danger" data-dismiss="modal">Cancelar  <i class="fa fa-times"></i></a>
</div>

<script>


</script>

