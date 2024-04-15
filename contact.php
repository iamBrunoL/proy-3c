
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Página de Contacto</title>

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
                        <div class="right-nav">
                            <span class="search-icon fa fa-search"></span>
                            <form action="#" class="search-form">
                                <input type="search" placeholder="search now">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <div class="header-social">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-github"></a>
                            </div>
                        </div>
                        <nav id="menu" class="d-none d-lg-block">
                                <ul>
                                    <li >
                                        <a href="index.html">Inicio</a>
                                    </li>
                                    <li><a href="about.html">Acerca de...</a></li>
                                    <li><a href="portfolio.html">Productos</a></li>
                                    <li><a href="inicio_de_sesion.php">Aplicación</a></li>
                                    <li class="has-child">
                                        <a href="#">Páginas</a>
                                        <ul class="sub-menu">
                                             <li><a href="about.html">Acerca de...</a></li>
                                             <li><a href="contact.php">Contacto</a></li>
                                             <li><a href="portfolio.html">Productos</a></li>
                                             <li><a href="testimonial.html">Testimonios</a></li>
                                              <li><a href="inicio_de_sesion.php">Aplicación</a></li>
                                            
                                             
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contacto</a></li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </header>    <div class="page-title sp" style="background-image: url(assets/img/fonde\ de\ madera.jpeg)">
    <div class="container text-center">
        <h2>Contáctanos</h2>
        <p style="color:rgb(255, 252, 250)">Sí desea resolver una duda o sugerencia, háganos saber contestando los siguientes campos:</p>
    </div>
</div>        
    <div class="contact-area sp">
    <div class="container">
        <div class="row">
            <div class="col-md-5 contact-info">
                <div class="single-info">
             


                <?php
        $con = new PDO('mysql:host=localhost;dbname=ladulce','root','');
        $query = $con->prepare('select max(numeroregistro) as numeroregistro from mensajes');
        $query->execute();
        $row = $query->fetch();
        $numero = $row['numeroregistro'];
        $numero++;
        $usuario=$nombres=$apellido_paterno=$apellido_materno=$correo=$mensaje=$genero="";

    function limpiar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuario=limpiar($_POST['usuario']);
    }
    ?>
    <div class="captura">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <fieldset>
                <legend>Captura de datos</legend>
                <label for="">Numero de registro</label>
                <input type="numero" name="numero" id="numero"
                disabled value="
                <?php
                echo $numero;
                ?>">
                <br>


                <label for="">Nombre de usuario</label>
                <input type="text" name="usuario" id="usuario"
                size="50"
                required>
                <br>

                <label for="">Nombre(s)</label>
                <input type="text" name="nombres" id="nombres"
                size="50"
                required>
                <br>
                <label for="">Apellido paterno</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno"
                size="50"
                required>
                <br>
                <label for="">Apellido materno</label>
                <input type="text" name="apellido_materno" id="apellido_materno"
                size="50"
                required>
                <br>
                <label for="">Correo electrónico</label>
                <input type="text" name="correo" id="correo"
                size="50"
                required>
                <br><br>
                
                

                <label for="">Elige tú género</label>
                <br>
                <input type="radio" name="genero" id="genero" value="femenino" checked>Femenino
                <input type="radio" name="genero" id="genero" value="masculino">Masculino
                <br>


                <label for="mensaje">Ingresa tus dudas o sugerencias</label>
                <br>    
                <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                <br>


               
               <br><br>
                
                <input type="submit" value="Enviar datos" name="Enviar">

                
            </fieldset>
            </form>
    </div>
    <?php
                if(isset($_REQUEST['Enviar'])){
                $query = $con->prepare('select usuario from mensajes where
                usuario= :usuario');

                $query->execute(['usuario'=>$usuario]);
                $row = $query->fetch(PDO::FETCH_NUM);
                if($query->rowCount()<=0){
                    $usuario=$_POST['usuario'];
                    $genero=$_POST["genero"];
                    $apellido_paterno=$_POST["apellido_paterno"];
                    $apellido_materno=$_POST["apellido_materno"];
                    $correo=$_POST["correo"];
                    $mensaje=$_POST["mensaje"];
                    $nombres=$_POST["nombres"];
                    
                    $insert = 'insert into mensajes(usuario,genero,apellido_paterno,apellido_materno,correo,mensaje,nombres)
                                            values(:usuario,:genero,:apellido_paterno,:apellido_materno,:correo,:mensaje,:nombres)';
                    $insert = $con->prepare($insert);
                    $insert->bindParam(':usuario',$usuario,PDO::PARAM_STR);
                    $insert->bindParam(':genero',$genero,PDO::PARAM_STR);
                    $insert->bindParam(':apellido_paterno',$apellido_paterno,PDO::PARAM_STR);
                    $insert->bindParam(':apellido_materno',$apellido_materno,PDO::PARAM_STR);
                    $insert->bindParam(':correo',$correo,PDO::PARAM_STR);
                    $insert->bindParam(':mensaje',$mensaje,PDO::PARAM_STR);
                    $insert->bindParam(':nombres',$nombres,PDO::PARAM_STR);
                    $insert->execute();
                    echo "Tus datos se agregaron satisfactoriamente!!!";

                }
                else if ($query -> rowCount() > 0){
                    echo "<br> Ya existe un usuario con ese nombre.";
                    
                }
                $query->closeCursor();
                    $query = null;
                    $con = null;
            }
                ?>
                   </div>
            </div>
            
        </div>
    </div>
</div>    <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.002094186688!2d-102.2505693!3d22.428947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86821a06eb5e9353%3A0xabb8f2c521d1317b!2sMorelos%2073%2C%20Centro%2C%2098770%20Luis%20Moya%2C%20Zac.!5e0!3m2!1ses-419!2smx!4v1657160191455!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>   
   
       
        
    </div>

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
