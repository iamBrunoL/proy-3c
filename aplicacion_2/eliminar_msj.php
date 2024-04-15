<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Eliminar mensajes</title>

<!-- Required CSS files -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/barfiller.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/main.css">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />




   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="active">
                        Menú
                    </li>
                    <li class="menu-title">Mensajes</li><!-- /.menu-title -->
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Altas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="mensajes.php">Agregar mensajes</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Bajas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="#">Eliminar mensajes</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Consultas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="consultas_msj.php">Consultar mensajes</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Cambios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="modificar_msj.php">Cambios a mensajes</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Usuarios</li><!-- /.menu-title -->
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Altas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="usuarios.php">Agregar usuarios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Bajas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="eliminar_usuarios.php">Eliminar usuarios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Consultas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="consultas_usuarios.php">Consultar usuarios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Cambios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="cambios_usuario.php">Cambios a usuarios</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand"><img src="images/Amapola_verde_coral_rosa-removebg-preview.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                <div class="user-area dropdown float-right">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mensajes
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="mensajes.php">Altas de mensajes</a>
                            <a class="nav-link" href="#">Bajas de mensajes</a>
                            <a class="nav-link" href="consultas_msj.php">Consultas de mensajes</a>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Usuarios
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="usuarios.php">Altas de usuarios</a>
                            <a class="nav-link" href="eliminar_usuarios.php">Bajas de usuarios</a>
                            <a class="nav-link" href="consultas_usuarios.php">Consultas de usuarios</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Contenido pagina -->
        <h1>Eliminar mensajes</h1>
        <br><br>

        <?php
    $numeroregistro = isset($_REQUEST['numeroregistro']) ? $_REQUEST['numeroregistro'] : null;
    ?>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
        method="POST">
            <label for="numeroregistro">Ingresa el numero de registro del comentario a borrar</label>
            <input type="text" name="numeroregistro" id="numeroregistro" value="<?php echo $numeroregistro;?>">
            <br>
            <input type="submit" name="buscarnumeroregistro" value="Buscar numero registro">
           <br><br>

   
    <?php
     $con = new PDO('mysql:host=localhost;dbname=ladulce','root','');
  if(isset($_REQUEST['buscarnumeroregistro'])){
    $clave=isset($_REQUEST['numeroregistro'])?$_REQUEST['numeroregistro']:null;
    $query = $con->prepare('select * from mensajes where numeroregistro =:numeroregistro');
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute(['numeroregistro'=>$numeroregistro]);
    $row = $query->fetch();
    if($query->rowCount()<=0){
        echo"No hay registros coincidentes";
    }else if($query->rowCount()>0){
       // echo"Registros coincidentes hayados";
       print("Datos del usuario");
       print("<div class='container mt-3'>");
        print("<table class='table table-striped'>");
            print("<table>");
            print("<tr>");
                print("<th>Numero de registro</th>");
                print("<td>".$row['numeroregistro']."</td>");
            print("</tr>");
            print("<tr>");
                print("<th>Nombres</th>");
                print("<td>".$row['nombres']."</td>");                            
            print("</tr>");

            print("<tr>");
                print("<th>Usuario</th>");
                print("<td>".$row['usuario']."</td>");
            print("</tr>");

            print("<tr>");
                print("<th>Apellido paterno</th>");
                print("<td>".$row['apellido_paterno']."</td>");
            print("</tr>");
            
            print("<tr>");
            print("<th>Apellido materno</th>");
            print("<td>".$row['apellido_materno']."</td>");
        print("</tr>");
        
          print("<tr>");
                print("<th>Correo</th>");
                print("<td>".$row['correo']."</td>");
            print("</tr>");

            print("<tr>");
            print("<th>Genero</th>");
            print("<td>".$row['genero']."</td>");
        print("</tr>");

            print("</table>");
            print("</hr>");
            print("<input type='submit' name='borrar' value='Eliminar usuario'>");
            print("</form>");

    }
   
}
if (isset($_REQUEST['borrar'])){
    echo "Si entro a borrar";
    $clave=isset($_REQUEST['numeroregistro']) ? $_REQUEST['numeroregistro'] : null;
    $query = $con->prepare('delete FROM ladulce.mensajes where numeroregistro= :numeroregistro');
    $query->execute(['numeroregistro' => $numeroregistro]);
    if (!$query){
        echo "Error".$query->errorInfo();
    }
    echo "<hr/><hr/>Comentario eliminado.";
    //Cerrar conexión
    $query->closeCursor();
    $query = null;
    $con = null;
}
    ?>
        
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    
    <!--Required JS files-->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/owl.carousel.min.js"></script>
<script src="assets/js/vendor/isotope.pkgd.min.js"></script>
<script src="assets/js/vendor/jquery.barfiller.js"></script>
<script src="assets/js/vendor/loopcounter.js"></script>
<script src="assets/js/vendor/slicknav.min.js"></script>
<script src="assets/js/active.js"></script>
</body>
</html>
