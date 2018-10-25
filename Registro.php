<?php     
    require_once("sesion.php");

	$sesion = new sesion();
         $con = new mysqli("localhost","root","IsaiasTP1","registro");

    	$username=$con->real_escape_string($_POST["username"]);
		$password=$con->real_escape_string($_POST["password"]);
		
       
		if(buscaRepetido($username,$password,$con)==1){
			echo 2;
		}else{
			$sql="INSERT into users2 (username,password)
				values ('$username','$password')";
            echo $result=mysqli_query($con,$sql);
            header("location: principal.php");
		}


		function buscaRepetido($username,$password,$con){
			$sql="SELECT * from users2
				where username='$username' and password='$password'";
			$result=mysqli_query($con,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}
		

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="EstiloRegistro/estilo.css">
        <title>Registro</title>
        <link rel="shortcut icon" href="logico.ico">
    </head>
    <body>
        <header>
            <img class="logo" src="Imagenes/vrlog.png">
            <nav>
                <ul class="menus">
                    <li><a href="Inicio.php" class="dis">Inicio</a></li>
                    <li><a class="Reg">Registrate</a></li>
                </ul>
            </nav>
        </header>
        <form name="frmregistro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="contenido">
            
            <div class="superior">
                <h2>Registrate Para Recibir Nuestras Promociones</h2>
            </div>
            <div class="principal">
                <input class="cuadro" type="text" id="username" name="username" placeholder="Nombre de usuario"required autofocus>
                <br>
                <input class="cuadro" type="password" id="password" placeholder="Contraseña" name="password">
                <br>
                <button class="btnAceptar" onClick="agregar()">ACEPTAR</button>
            </div>
        </div>
        </form>
        <script type="text/javascript" src="JavaScript/script.js"></script>
        <footer>
            <div class="icon">
                <a href="https://www.facebook.com/Learn-VR-159729097958728/"><img class="fac" src="Imagenes/Facebook.png"></a>
                <a href="https://twitter.com/LearnVrmx"><img class="you" src="Imagenes/Twitter.png"></a>
                <a href="https://www.instagram.com/learnvrl/"><img class="inst" src="Imagenes/Instagram.png"></a>
            </div>
            <p id="cop">&copy; Copyright LearnVR 2017 | Todos Los Derechos Reservados</p>
        </footer>
    </body>
</html>