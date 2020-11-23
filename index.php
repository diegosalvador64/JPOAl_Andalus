<?php
//La cabecera incluye el comienzo del html, del head y del body
require_once 'includes/cabecera.php';
//Iniciar la sesión
session_start();

//Guardar la fecha/hora inicial de comienzo del juego

$_SESSION['hora1'] = date("Y") . "-" . date("n") . "-" . date("j") . "." . date("H") . ":" . date("i") . ":" . date("s");

//echo "la hora inicial es ".$_SESSION['hora1']."<br>";
//Crear las variables de sesión que recojan el resultado de la pregunta (hacerlo en forma de bucle)
for ($i = 1; $i <= 6; $i++) {
    if (!isset($_SESSION['resultado' . $i])) {//Si no existe la sesión, la creamos con valor "0" o null
        $_SESSION['resultado' . $i] = " ";
    }
}
?>

<div id="divformulario">
        <div id="divformulario">
		<h2>Al-Andalus</h2>
		
		<ul>
			<strong>
				<li>Con esta actividad pretendemos que averigües lo que sabes
					de Al-Andalus (la España musulmana) </li>
				<li>Para ello te planteamos una serie de preguntas que sólo te
					darán la opción de responder una vez. Cuando llegues al final de la
					actividad, podrás conocer cuántas has acertado.</li>
				<li>Si estos JUEGOS DE PREGUNTAS ONLINE te gustan y quieres
					tomar parte en nuevos retos más complicados, tendrás opción de
					participar en la liga online que estamos preparando ¡Apúntate ya!</li>
				<li>En la liga irás superando categorías hasta convertirte en
					todo un experto</li>
				<li>Además, ¡participar tiene premio!</li>
				<li>¡Anímate y participa en la LIGA DE JUEGOS DE PREGUNTAS
					ONLINE DE RUTAS CON HISTORIA!</li>
			</strong>
		</ul>
	</div>
<br>
<a href="pregunta1.php" class="comenzar">Comenzar</a>
<br>

</body>
</html>
