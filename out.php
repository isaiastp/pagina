<?php
	require_once("sesion.php");
	
	$sesion = new sesion();
	$username = $sesion->get("username");	
	if( $username == false )
	{	
		header("Location: login.php");
	}
	else 
	{
		$username = $sesion->get("username");	
		$sesion->termina_sesion();	
		header("location: login.php");
	}
?>