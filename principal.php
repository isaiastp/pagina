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
	?>
	<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="EstiloInicio/jquery.bxslider.css">
        <link rel="stylesheet" href="EstiloInicio/estil.css">
        <script src="JavaScript/jquery.js"></script>
        <script src="JavaScript/jquery.bxslider.js"></script>
        <script src="JavaScript/script.js"></script>
        <title>LearnVR</title>
        <link rel="shortcut icon" href="logico.ico">
    </head>
    
    <body>
        <header>
            <img class="logo" src="Imagenes/vrlog.png">
            <nav>
                <ul class="menus">
                    <li><a href="Inicio.php" class="dis">Inicio</a></li>
                    <li><a href="Paquetes.html" class="dis">Paquetes</a></li>
                    <li><a href="Descargas.html" class="dis">Descargas</a></li>
                    <li><a href="Educacion.html" class="dis">Educacion</a></li>
                </ul>
            </nav>
        </header>
        
        <div class="contenedor">
            <div class="horizontal">
                <img src="Imagenes/NTres.jpg" style="width:100%">
            </div>
            <div class="horizontal">
                <img src="Imagenes/NDos.jpg" style="width:100%">
            </div>
            <div class="horizontal">
                <img src="Imagenes/NUno.jpg" style="width:100%">
            </div>
            <div class="horizontal">
                <img src="Imagenes/NCuatro.jpg" style="width:100%">
            </div>
            <div class="horizontal">
                <img src="Imagenes/NCinco.jpg" style="width:100%">
            </div>
            <div class="horizontal">
                <img src="Imagenes/NSeis.jpg" style="width:100%">
            </div>
            
        </div>
            <img class="fad" src="Imagenes/fad.jpg">
            <h1 class="TextSlider">VIVE COSAS QUE POR LO GENERAL &nbsp;&nbsp; NO VIVIRIAS</h1>
            <input class="BotonSlider" value="CONOCER MAS" type="submit" onclick = "location='Lvr.html'"/>
        <center>
            <div class="anun">
            <h2 >HAY TANTAS COSAS PARA CONOCER Y GOZAR; Y NUESTRO PASO POR LA TIERRA ES CORTO</h2>
            <br>
            <h3>DISFRUTA LA NATURALEZA PORQUE ES UN ESPECTACULO QUE SE DESARROLLA FRENTE A TI</h3>
        </div>
        </center>
    
        <div class="Dispositivos">
            <img src="Imagenes/PC.jpg" style="width: 100%">
            <h3 id="Disponible">LearnVR Disponible Ahora</h3>
        </div>
        <div class="logos">
                <a href="Descargas.html"><img id="Vive" src="Imagenes/Vive.jpg" style="width: 15%"></a>
                <a href="Descargas.html"><img id="Logo" src="Imagenes/Oculus.jpg" style="width: 15%"></a>
                <a href="Descargas.html"><img id="Logo" src="Imagenes/Play.jpg" style="width: 14.2%"></a>
            </div>
        <div class="espac">
            <img src="Imagenes/Espacio.jpg" style="width: 100%">
            <center>
                <h3 id="espacio">SIENTE LA SENSACION DE SABER COMO FUNCIONA LA TIERRA</h3>
                <h3 id="explora">Explora el mundo desde perspectivas totalmente nuevas. Descubre la verdad y vive experiencias inolvidables. El planeta no tiene realmente la forma de esfera, sino una forma más próxima a una elipse. El suelo terrestre es irregular y la masa de nuestro planeta no se distribuye de forma perfectamente homogénea. Esto hace que haya variaciones en el valor del campo gravitatorio.El movimiento de estas placas hace que la superficie de nuestro planeta esté en constante cambio, siendo responsables de la formación de montañas, de la sismicidad y del vulcanismo.</h3>
            </center>
            <input class="grat" value="CONOCER MAS" type="submit" onclick = "location='Lvr.html'"/>
        </div>
        
        <div class="present">
            <img src="Imagenes/Lens.jpg" style="width: 100%">
            <h3 id="tierra">EXPLORA Y DESCUBRE LOS MARAVILLOSOS SECRETOS DE LA ATMOSFERA</h3>
            <input class="mas" value="CONOCER MAS" type="submit" onclick = "location='Lvr.html'"/>
            <h1 id="latierra">La forma de nuestro planeta es el resultado de un cúmulo de cosas, que van desde su propia composición interna hasta la gravedad y el peso de los océanos, además de su rotación y la atracción de la Luna.</h1>
            <h3 id="aprende">Aprende Sobre</h3>
            <div class="lateral">
                <img id="S1" src="Imagenes/AprendePlacas.jpg" style="width: 33%">
                <img id="S2" src="Imagenes/AprendeLava.jpg" style="width: 33%">
                <img id="S3" src="Imagenes/AprendeRotacion.jpg" style="width: 33%">
            </div>
        </div>
        
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
	
	<?php 
	}	
?>