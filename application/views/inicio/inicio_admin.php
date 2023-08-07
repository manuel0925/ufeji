<?php include('inc/admin/head.php');





?>
<style>
    .MY_user-img{
        width: 2.25rem !important;
        height: 2.25rem;
        /*        margin: .625rem .625rem .625rem 0 !important;*/
        -webkit-border-radius: 120px !important;
        border-radius: 120px !important;
    }
</style>
<body>



    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar-default">

            <div class="navbar-header">
                <a href="inicio" class="navbar-brand"><img src="data/img/corporativo/logo-ufeji.png" style="margin-right:10px"></img> <b>UFEJI</b> </a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->

            <!-- begin header-nav -->
            <ul class="navbar-nav navbar-right">


                <li class="dropdown navbar-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="image image-icon bg-black text-grey-darker">
                            <img class="MY_user-img" src="<?php echo ($datos_sesion_usuario['img'] != FALSE) ? $datos_sesion_usuario['img'] : 'data/img/usuario/guest.png' ?>" >
                        </div>
                        <span class="d-none d-md-inline"><?php echo ($datos_sesion_usuario['id'] > 0) ? $datos_sesion_usuario['nombre_completo'] . ' ' . $datos_sesion_usuario['apellido'] : "error a datos cargar session"; ?></span> <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" id="cerrar_sesion" class="dropdown-item">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end #header -->

        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <a href="javascript:;" data-toggle="nav-profile">
                            <div class="cover with-shadow"></div>
                            <div class="image image-icon bg-black text-grey-darker">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="info">
                                <b class="caret pull-right"></b>
                                Sean Ngu
                                <small>Front end developer</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li>
                        <a href="usuarios/administrar_usuario" data-toggle="ajax">
                            <i class="fa fa-user"></i>
                            <span>Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="eventos/admin_crud" data-toggle="ajax">
                            <i class="fa fa-user"></i>
                            <span>Eventos</span>
                        </a>
                    </li>

                    </li>
                    <!-- begin sidebar minify button -->

                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content"></div>
        <!-- end #content -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <?php include('inc/admin/footer.php'); ?>