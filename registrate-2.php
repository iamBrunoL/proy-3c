<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<!-- Custom Theme files -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Square login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
	<?php
        $con = new PDO('mysql:host=localhost;dbname=ladulce','root','');
        $query = $con->prepare('Select max(id) as id from registro');
        $query->execute();
        $row=$query->fetch();
        $numero=$row['id'];
        $numero++;

        $id=$nombre=$correo=$clave="";

        function limpiar($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
	
<!--header start here-->
        <div class="login-form">
                    <div class="top-login">
                        <span><img src="assets/img/La_Dulce_Original-removebg-preview.png" alt="" ></span>
                        
                    </div>
                    <h1 >Registrarte</h1>
                    <div class="login-top">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
                    METHOD="POST">
                        <div class="login-ic">
                            <i></i>
                            <input type="text"  name="nombre" value="usuario" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Usuario';}"/>
                            <div class="clear"> </div>
                        </div>
                        <div class="login-ic">
                            <i></i>
                            <input type="text"  name="correo" value="correo electronico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo electronico';}"/>
                            <div class="clear"> </div>
                        </div>
                        <div class="login-ic">
                            <i class="icon"></i>
                            <input type="password"  name="clave" value="contraseña" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}"/>
                            <div class="clear"> </div>
                        </div>
                    
                        <div class="log-bwn">
                            <input type="submit"  value="Registrarte" name="enviar">
                        </div>
                        
                        <p ><a style="color:rgb(255, 255, 255)"  href="inicio_de_sesion.php">Inicia sesión</a></p>
                        
                        </form>

				
			</div>
            <?php
        if(isset($_REQUEST['enviar'])){
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $nombre= $_POST['nombre'];
            $cifrado = password_hash($clave,PASSWORD_DEFAULT,array("cost">=10));
            $insertar = $con->prepare("insert into registro(nombre,correo, clave) values ('$nombre','$correo','$cifrado') ");
            $insertar->execute();
            echo "<script>
            alert('Se ha añadido un nuevo usuario');
        </script>";
        /*print("Se ha añadido un nuevo usuario");*/
    }
    $query->closeCursor();
    $query=null;
    $con=null;

    ?>
</div>		
<!--header start here-->
</body>
</html>