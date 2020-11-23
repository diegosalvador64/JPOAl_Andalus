<?php

//Iniciar sesión. 
session_start();

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    $respuesta = $_GET['pregunta'];
    if ($error == 'KO') {
        echo "<p class=respuestaerror>$respuesta. Vuelva a intentarlo otra vez</p>";
    }
}

//Función para evaluar resultado de las preguntas tipo radio-button 
function evaluar($numpregunta, $resultado) {
    //echo "Número de pregunta ".$numpregunta."<br>";
    //echo "Resultado ".$resultado."<br>";
    //session_start();
    if (!empty($_POST['pregunta' . $numpregunta])) {

        if ($_POST['pregunta' . $numpregunta] == $resultado) {
            //echo "OK"."<br>";
            $_SESSION['resultado' . $numpregunta] = "OK";
        } else {
            //echo "KO"."<br>";
            $_SESSION['resultado' . $numpregunta] = "KO";
        }
        $siguiente = $numpregunta + 1;
        //echo "Siguiente pregunta".$siguiente;
        if ($siguiente>10) {
            header("Location:final.php");
        }else {
            header("Location:pregunta" . $siguiente . ".php");
        }
        
    }
}

//Función para evaluar resultado de las preguntas tipo checkbox (dos respuestas correctas)
function evaluarCheckBox($numpregunta, $resul1, $resul2) {
    //echo "Número de pregunta ".$numpregunta."<br>";
    //echo "Resultado1 ".$resul1."<br>";
    //echo "Resultado2 ".$resul2."<br>";
    if (!empty($_POST['pregunta' . $numpregunta])) {
        $error = "OK";
        $contador = count($_POST['pregunta' . $numpregunta]);
        $pregunta = ($_POST['pregunta' . $numpregunta]);

        if ($contador != 2) {
            $salida = "Número incorrecto de opciones";
            $error = "KO";
            header("Location:?error=$error&pregunta=$salida");
        } else {
            $contador1 = 0;

            for ($i = 0; $i < count($pregunta); $i++) {
                if (($pregunta[$i] == $resul1) || ($pregunta[$i] == $resul2)) {
                    $contador1++;
                }
            }
            if ($contador1 < 2) {
                $_SESSION['resultado' . $numpregunta] = "KO";
            } else {
                $_SESSION['resultado' . $numpregunta] = "OK";
            }
            $siguiente = $numpregunta + 1;
            header("Location:pregunta" . $siguiente . ".php");
        }
    }
}
//Funciones para la página final
//Función destino: según el número de respuestas acertadas, redirige hacia uno u otro certificado
function destino($resulOK) {
    if ($resulOK <= 3) {
        echo '<a href="certificado3.pdf" target="_blank" class="comenzar">Descarga tu certificado</a>';
    } else if ($resulOK > 3 && $resulOK <= 8) {
        echo '<a href="certificado2.pdf" target="_blank" class="comenzar">Descarga tu certificado</a>';
    } else if ($resulOK > 8) {
        echo '<a href="certificado1.pdf" target="_blank" class="comenzar">Descarga tu certificado</a>';
    }
}

function resultado($resul) {
    if ($resul == "KO") {
        echo '<span class="resultadoko">Vaya, fallaste...</span>';
    } else {
        echo '<span class="resultadook">¡Estupendo, acertaste!</span>';
    }
}
?>

