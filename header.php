<!DOCTYPE html>
<html lang="es" style="">

<head>
    <meta charset="utf-8" />
    <title>Libreria Acatlán</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!--Primer menu de navegación por Cairo -->
    <header>
        <div class="container-fluid super visible-lg-block visible-md-block">
            <nav class="navbar navbar-inverse top-links navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header collapsed navbar-toggle text-center icono-collaps">
                        <ul class="navbar-nav list-inline">
                            <li class="resp">
                                <a title="mi cuenta" href="#">
                                    <span class="glyphicon glyphicon-user iconos resp1"></span>
                                </a>
                            </li>
                            <li class="resp">
                                <a title="Lista de Deseos" href="#">
                                    <span class="glyphicon glyphicon-heart-empty iconos resp1"></span>
                                </a>
                            </li>
                            <li class="resp">
                                <a title="Blog" href="#">
                                    <span class="glyphicon glyphicon-comment iconos resp1"></span>

                                </a>
                            </li>
                            <li class="resp">
                                <a class="clicker" title="Libros UNAM">
                                    <span class="glyphicon glyphicon-file iconos resp1"></span>

                                </a>
                                <ul></ul>
                            </li>
                            <li class="loggin resp">
                                <a href="#">
                                    <span class="glyphicon glyphicon-off iconos resp1"></span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="collapse navbar-collapse nav-stacked" id="bs-example-navbar-collapse-1" aria-expanded="true">
                        <ul class="nav navbar-nav bienvenida">
                            <!--<li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MX <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">US$-USD</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">MXN$-MX</a></li>
                                </ul>
                            </li>-->
                            <a href="#" class="navbar-brand welcome-msg">¡Bienvenido a Libros Acatlán!</a>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="lista">
                                <a title="mi cuenta" href="#" class="overscroll">
                                    <span class="glyphicon glyphicon-user iconos"></span>
                                    <span>Mi cuenta</span>
                                </a>
                            </li>
                            <li class="lista">
                                <a title="Lista de Deseos" href="#" class="overscroll">
                                    <span class="glyphicon glyphicon-heart-empty iconos "></span>
                                    <span>Mi lista de Deseos</span>
                                </a>
                            </li>


                            <li class="lista">
                                <a title="Blog" href="#" class="overscroll">
                                    <span class="glyphicon glyphicon-comment iconos"></span>
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li class="lista">
                                <a title="Libros UNAM" class="overscroll">
                                    <span class="glyphicon glyphicon-file iconos"></span>
                                    <span>Libros UNAM</span>
                                </a>
                                <ul></ul>
                            </li>
                            <li class="lista">
                                <a href="#" class="overscroll">
                                    <span class="glyphicon glyphicon-off iconos"></span>
                                    <span>Inicio de sesión</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <div class="container">
            <div title="Logo" class="row">
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri();?>/img/unaam-u.jpg" alt="" class="img img-responsive">
                </div>
                <div class="col-md-2 super">
                    <img src="<?php echo get_template_directory_uri();?>/img/libunam.jpg" alt="" class="img img-responsive">
                </div>
            </div>
        </div>

        <!--//Primer menu de navegación por Cairo -->
        <br>
        <div class="container">
                    <?php get_template_part("partes/menu_2"); ?>

        </div>