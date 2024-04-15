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
  Administración de usuarios
  </a>
  <a href="consultar_usuario.php" class="list-group-item list-group-item-action">Consultar usuarios</a>
  <a href="#" class="list-group-item list-group-item-action">Modificar usuarios</a>
  <a href="eliminar_usuarios.php" class="list-group-item list-group-item-action">Eliminar usuarios</a>
</div>
      </div>
    </div>
  </div>

      
        <div class="page-title sp" style="background-image: url(assets/img/color\ cafe2.jpeg)">
    <div class="container text-center">
        <h2 style="color:rgb(255, 255, 255)">Eliminar usuarios</h2>
    </div>
                    
    </header>      
<!--Contenido-->

<?php
    $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
    ?>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
        method="POST">
            <label for="nombre">Ingresa la nombre de usuario a borrar</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>">
            <input type="submit" name="buscarNombre" value="Buscar Nombre">
           <br><br>

   
    <?php
     $con = new PDO('mysql:host=localhost;dbname=ladulce','root','');
  if(isset($_REQUEST['buscarNombre'])){
    $clave=isset($_REQUEST['nombre'])?$_REQUEST['nombre']:null;
    $query = $con->prepare('select * from registro where nombre =:nombre');
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute(['nombre'=>$nombre]);
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
                print("<th>id</th>");
                print("<td>".$row['id']."</td>");
            print("</tr>");
            print("<tr>");
                print("<th>Nombre del usuario</th>");
                print("<td>".$row['nombre']."</td>");                            
            print("</tr>");

            print("<tr>");
                print("<th>Correo</th>");
                print("<td>".$row['correo']."</td>");
            print("</tr>");

            print("<tr>");
                print("<th>Contraseña</th>");
                print("<td>".$row['clave']."</td>");
            print("</tr>");

            print("</table>");
            print("</hr>");
            print("<input type='submit' name='borrar' value='Eliminar usuario'>");
            print("</form>");

    }
   
}
if (isset($_REQUEST['borrar'])){
    echo "Si entro a borrar";
    $clave=isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
    $query = $con->prepare('delete FROM ladulce.registro where nombre= :nombre');
    $query->execute(['nombre' => $nombre]);
    if (!$query){
        echo "Error".$query->errorInfo();
    }
    echo "<hr/><hr/>Registro de noticia eliminado.";
    //Cerrar conexión
    $query->closeCursor();
    $query = null;
    $con = null;
}
    ?>
                

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
