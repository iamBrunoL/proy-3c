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
            $nombre=$clave="";
            if(isset($_POST['nombre'])&& isset($_POST['clave'])){
                $nombre = $_POST['nombre'];
                $clave = $_POST['clave'];
                $query = $con->prepare('select * from registro where nombre = :nombre');
                $query->execute(['nombre' => $nombre]);
                $row=$query->fetch();
                if(!empty($row) && password_verify($clave,$row['clave'])){
                    header('location:aplicacion_2/consultas_msj.php');
                }else{
                    echo '<script type="text/javascript"> 
                            alert("USUARIO O CONSTRASEÑA INCORRECTO");
                            </script>';
                }
            }
        ?>
<!--header start here-->
<div class="login-form">
			<div class="top-login">
				<span><img src="assets/img/La_Dulce_Original-removebg-preview.png" alt="" ></span>
				
			</div>
			<h1>Iniciar sesión</h1>
			<div class="login-top">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
                    METHOD="POST">
				<div class="login-ic">
					<i></i>
					<input type="text"  value="username" name="nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Usuario';}"/>
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i class="icon"></i>
					<input type="password"  value="password" name="clave" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}"/>
					<div class="clear"> </div>
				</div>
			
				<div class="log-bwn">
					
				<input type="submit" name="inicio" value="Iniciar sesión" >
				</div>
				
				<p ><a style="color:rgb(255, 255, 255)"  href="registrate-2.php">Registrarte</a></p>
				
				</form>

				
			</div>

			
<!--header start here-->
</body>

</html>