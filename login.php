<?php
	require_once("sesion.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		$con = new mysqli("localhost","root","IsaiasTP1","registro");
		
		$username = $con->real_escape_string($_POST["username"]);
		$password = $con->real_escape_string($_POST["password"]);
		
		if(validarUsuario($username,$password) == true)
		{			
			$sesion->set("username",$username);
			echo "exito";
			header("location: principal.php");
		}
		else 
		{
			echo "Verifica tu nombre de usuario y contraseña";
		}
	}
	
	function validarUsuario($username, $password)
	{
		$con = new mysqli("localhost","root","IsaiasTP1","registro");
		$consulta = "select password from users2 where username = '$username';";
		
		$result = $con->query($consulta);
		
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["password"]) == 0 ){
				return true;
				
			}						
			else{					
				return false;
			}
		}
		else{
				return false;}
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
		<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  			<div class="contenido">
			  <div class="superior">
                <h2>Iniciar sesion</h2>
            </div>
   			<div> <label class="cuadro">Usuario: </label> <input type="text" name = "username"/></div>
    		<div><label class="cuadro">Contraseña: </label> <input type="password" name = "password" /></div>
   			 <div><input class="btnAceptar"type="submit" name ="iniciar" value="Iniciar Sesion"/></div>
		<div><li><a href="Registro.php" class="dis">Registrate</a></li></div>
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