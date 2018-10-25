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
<html>
<head>
<title></title>
</head>

<body>
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
   <div> <label>Usuario: </label> <input type="text" name = "username"/></div>
    <div><label>Contraseña: </label> <input type="password" name = "password" /></div>
    <div><input type="submit" name ="iniciar" value="Iniciar Sesion"/></div>
	<div><li><a href="Registro.php" class="dis">Registrate</a></li></div>
  </div>
</form>
</body>
</html>