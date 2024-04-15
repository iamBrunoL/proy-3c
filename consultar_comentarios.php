<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplicación</title>

        <!-- Required CSS files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/barfiller.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="preloader">
        <span class="preloader-spin"></span>
    </div>
    <div class="site">
        


            <header>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-3 logo-column">
                        <a href="index.html" class="logo">
                        <img src="assets/img/Amapola_verde_coral_rosa-removebg-preview.png" alt="logo" width="200px" height="500px">
                        </a>
                    </div>
                    <div class="col-6 col-sm-9 nav-column clearfix">
                        
                        <nav id="menu" class="d-none d-lg-block">
                                <ul>
                                    <li>
                                        <a href="consultar_usuario.php">Usuarios</a>
                                    </li>
                                    <li><a href="consultar_comentarios.php">Comentarios</a></li>
                                    <li><a href="inicio_de_sesion.php">Salir de la aplicacion</a></li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
<div class="container">
    <div class="row">
      <div class="col-md-4">
	  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
  Administración de los comentarios
  </a>
  <a href="consultar_comentarios.php" class="list-group-item list-group-item-action">Consultar comentarios</a>
  <a href="#" class="list-group-item list-group-item-action">Modificar comentarios</a>
  <a href="eliminar_comentario.php" class="list-group-item list-group-item-action">Eliminar comentarios</a>
</div>
      </div>
    </div>
  </div>

      
        <div class="page-title sp" style="background-image: url(assets/img/color\ cafe2.jpeg)">
    <div class="container text-center">
        <h2 style="color:rgb(255, 255, 255)">Consulta de comentarios</h2>
    </div>
                    
    </header>      
<!--Contenido-->

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
        method="POST">
            <label for="numeroregistro">Ingresa numero de registro del comentario</label>
            <input type="text" name="numeroregistro" id="numeroregistro">
            <input type="submit" name="buscarNombre" value="Buscar numero de registro">
            <input type="submit" name="buscarTodo" value="Mostrar todos los comentarios">
    </form>

    <?php
            $con = new PDO('mysql:host=localhost;dbname=ladulce','root','');
            if(isset($_REQUEST['buscarTodo'])){
                $query = $con->prepare('select * from mensajes order by numeroregistro asc');
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                if($query->rowCount()>0){
                    print("<h2>Listado de usuarios</h2>");
                    print("<div class='container mt-3'>");
                        print("<table class='table table-striped'>");
                            print("<thead>");
                                print("<tr>");
                                    print("<th>Numero de registro</th>");
                                    print("<th>Usuario</th>");
                                    print("<th>Apellido paterno</th>");
                                    print("<th>Apellido materno</th>");
                                    print("<th>Correo</th>");
                                    print("<th>Mensaje</th>");
                                    print("<th>Genero</th>");
                              
                                print("</tr>");
                            print("</thead>");

                            print("<thead>");
                                while($row=$query->fetch()){
                                    print("<tr>");
                                    print("<td>".$row['numeroregistro']."</td>");
                                    print("<td>".$row['nombres']."</td>");
                                    print("<td>".$row['usuario']."</td>");
                                    print("<td>".$row['apellido_paterno']."</td>");
                                    print("<td>".$row['apellido_materno']."</td>");
                                    print("<td>".$row['correo']."</td>");
                                    print("<td>".$row['mensaje']."</td>");
                                    print("<td>".$row['genero']."</td>");

                       
                                print("</tr>");
                                }
                            print("</thead>");
                        print("</table>");
                    print("</div>");
                }else{
                    print("No hay registros disponibles!!");
                }
            }
            if(isset($_REQUEST['buscarNombre'])){
                $numeroregistro=isset($_REQUEST['numeroregistro'])?$_REQUEST['numeroregistro']:null;
                $query = $con->prepare('select * from mensajes where numeroregistro =:numeroregistro');
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute(['numeroregistro'=>$numeroregistro]);
                $row = $query->fetch();
                if($query->rowCount()<=0){
                    echo"No hay registros coincidentes";
                }else if($query->rowCount()>0){
                   // echo"Registros coincidentes hayados";
                   print("Datos de usuario");
                   print("<div class='container mt-3'>");
                    print("<table class='table table-striped'>");
                        print("<thead>");
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

                       print("<th>Mensaje</th>");
                       print("<td>".$row['mensaje']."</td>");
                          print("</tr>");

                          print("<th>Genero</th>");
                          print("<td>".$row['genero']."</td>");
                             print("</tr>");

                      
                        print("</thead>");

                }
            }
    ?>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

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
