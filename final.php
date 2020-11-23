
<?php
//La cabecera incluye el comienzo del html, del head y del body
require_once 'includes/cabecera.php';

//Esta include lleva funcionbes que son llamadas desde aquí. Dentro está el inicio de sesión para recoger las variables guardadas
require_once 'includes/evaluar_respuestas.php';

//Crear contadores de ok y ko
$contadorOK = 0;
$contadorKO = 0;
//Contar resultados correctos y erróneos 
for ($i = 1; $i <= 10; $i++) {

    if ($_SESSION['resultado' . $i] == "OK") {

        $contadorOK++;
    } else {

        $contadorKO++;
    }
}
//Recuperar la fecha/hora inicial en que comnezó el juego acudiendo a la variable de sesión $_SESSION['hora1']

$hora2 = date("Y") . "-" . date("n") . "-" . date("j") . "." . date("H") . ":" . date("i") . ":" . date("s");

$horaInicio = new DateTime($_SESSION['hora1']);
$horaTermino = new DateTime($hora2);

$interval = $horaInicio->diff($horaTermino);
$tiempoIntermedio = $interval->format('%H%i%s');

if (substr($tiempoIntermedio, 0, 2) == "00") {
    $tiempoTotal = $interval->format('<span class="numerogrande">%i m %s s</span>!');
} else {
    $tiempoTotal = $interval->format('<span class="numerogrande">%H h %i m %s s</span>!');
}

//Funciones php
?>

<div id="divformulario">
    <h2>Al Andalus</h2>

    <h3>¡Has acertado <span class="numerogrande"><?= $contadorOK ?></span> respuestas en <?= $tiempoTotal ?></h3>
    <br>
    <h3>Preguntas, respuestas correctas y resultados obtenidos</h3>
    <ul>
        <li>1.- .- Gibraltar es el nombre del lugar donde desembarcaron los
            musulmanes para invadir la Península Ibérica, aprovechando las
            sempiternas trifulcas internas del reino visigodo. Gibraltar debe su
            nombre al caudillo bereber que dirigía el primer contingente
            mahometano. ¿Cómo se llamaba este señor? <strong>Tariq ibn
                Ziyad.</strong>
            <?php resultado($_SESSION['resultado1']) ?>
        </li>
        <li>2.- Los primeros conquistadores musulmanes que entraron en la
            Península fueron bereberes norteafricanos recién islamizados. O sea,
            que eran más papistas que el Papa. Hubo numerosas tribus que pasaron
            con Tariq. ¿Cuál de los siguientes pueblos NO era bereber? <strong>Nota:</strong>El
            término <i>Bereber</i> procede de la adaptación árabe <i>barbr</i>
            del griego <i>bárbaro</i>. <strong>Yemeníes.</strong>
            <?php resultado($_SESSION['resultado2']) ?>
        </li>
        <li>3.- Los abbasíes hicieron una buena escabechina entre la
            familia de los Omeyas, que hasta entonces habían gobernado en Damasco
            como califas. Pero hubo un joven superviviente omeya que escapó hasta
            Al Andalus. Este afortunado desembarcó en otoño del año 755 en
            Almuñecar, y con el tiempo creó el emirato de Córdoba, independiente
            del Califato abbasí de Damasco. ¿De quién hablamos? <strong>Abd
                al-Rahmán I.</strong>
            <?php resultado($_SESSION['resultado3']) ?>
        </li>
        <li>4.- Durante el tumultuoso gobierno del cultureta emir de
            Córdoba Abd al-Rahmán II (822-852) tuvo lugar un hecho muy relevante.
            ¿Cuál de éstos fue? <strong>El saqueo de Sevilla por los
                normandos</strong>
            <?php resultado($_SESSION['resultado4']) ?>
        </li>
        <li>5.- Uno de los mayores hitos de la historia del mundo
            musulmán medieval se produjo en el año 929: la proclamación del
            califato de Córdoba por el emir Abd al-Rahmán III, que pasó ahora a
            ser Califa, el Comendador de los Creyentes, la máxima autoridad
            política y religiosa del occidente musulmán. Se cree que este hecho
            tan relevante tuvo lugar para celebrar un importante acontecimiento.
            ¿Cuál?<strong> La victoria sobre los rebeldes de Bobastro
                (Málaga)</strong>
            <?php resultado($_SESSION['resultado5']) ?>
        </li>
        <li>6.- Puede que así de primeras un tipo llamado Muhammad ibn
            Abi Amir, Al-Mansur (el Victorioso), no os suene de nada. Pero si
            decimos que este señor fue el terrible Almanzor, quizás ya sí.
            Durante la segunda mitad del siglo X y comienzos del XI fue el terror
            de los cristianos peninsulares, que las pasaron moradas ante sus
            acometidas. Entre sus devastadoras campañas destacan la conquista de
            Barcelona (985) y el saqueo de Santiago (997). Pero como todo tiene
            su fin, aunque sea leyenda, ¿cómo completarías la famosa frase
            "...Almanzor perdió su tambor"? <strong> En Calatañazor</strong>
            <?php resultado($_SESSION['resultado6']) ?>
        </li>
        <li>7.- Tras un proceso de descomposición interminable, que se
            prolongó desde 1009 hasta 1031, el Califato de Córdoba se disgregó en
            múltiples reinos llamados de <i>taifas</i> (que viene de la palabra
            árabe que designa bando o facción). La conquista por Alfonso VI (ya
            saben, el del Cid) de la taifa de Toledo atrajo hacia la Península un
            peligro procedente de los desiertos del norte de África, llamado por
            los asustados reyes de las otras taifas aguijoneados por el monarca
            de Sevilla Al Mutamid. ¿Qué amenaza se concretó sobre la Península
            Ibérica a partir de 1086? <strong> Los almorávides</strong>
            <?php resultado($_SESSION['resultado7']) ?>
        </li>
        <li>8.- En 1195, los almohades dieron una buena paliza a los
            castellanos en la batalla de Alarcos. Su rey Alfonso VIII juró
            venganza. Tardó años en organizar una coalición de reinos cristianos
            hispanos, el Papado y voluntarios europeos, pero por fin lo consiguió
            y en 1212 derrotaron en la batalla de las Navas de Tolosa a los
            almohades. Sin embargo hubo algún reino cristiano peninsular
            reticente que no acudió a la llamada del castellano. ¿Cuál de estos
            no se presentó? <strong>Nota:</strong> la batalla de las Navas de
            Tolosa abrió Andalucía a la expansión de los cristianos. Fue el
            combate más importante de la denominada Reconquista. <strong>
                León</strong>
            <?php resultado($_SESSION['resultado8']) ?>
        </li>
        <li>9.- La célebre Torre del Oro de Sevilla que aparece en la
            imagen fue construida en la etapa almohade de la ciudad. ¿Qué función
            tuvo en aquella época?<strong> Baluarte defensivo</strong>
            <?php resultado($_SESSION['resultado9']) ?>
        </li>
        <li>10.- ¿A qué complejo palacial de época nazarí corresponde la
            imagen? <strong>Alhambra de Granada</strong>
            <?php resultado($_SESSION['resultado10']) ?>
        </li>


    </ul>
</div>
<br>
<?php
//La función nos lleva a un enlace u otro de descarga de un certificado 
//u otro según el número de respuestas acertadas
destino($contadorOK);
?>
</body>
</html>

