
<?php
require_once 'includes/cabecera.php';
?>

<?php
require_once 'includes/evaluar_respuestas.php';
//Evaluar la respuesta. la función está en evaluar_respuestas.php
evaluar(7, "1");
?>

<div id="divformulario">
    <h2>Pregunta 7 Al Andalus</h2>

    <p>
        Tras un proceso de descomposición interminable, que se prolongó desde
        1009 hasta 1031, el Califato de Córdoba se disgregó en múltiples
        reinos llamados de <i>taifas</i> (que viene de la palabra árabe que
        designa bando o facción). La conquista por Alfonso VI (ya saben, el
        del Cid) de la taifa de Toledo atrajo hacia la Península un peligro
        procedente de los desiertos del norte de África, llamado por los
        asustados reyes de las otras taifas aguijoneados por el monarca de
        Sevilla Al Mutamid. ¿Qué amenaza se concretó sobre la Península Ibérica
        a partir de 1086?
        <strong>Imagen de Justo Jimeno Bazaga</strong>
    </p>
    <br>
    <div style="overflow: hidden; width: auto;">
        <div style="float: left;">
            <img src="img/Andalus_7_Almoravides.jpg" width="100%" class="imagen1">
        </div>
        <div style="float: center;">
            <form action="" method="post">
                <div class="cajaradio">
                    <input type="radio" name="pregunta7" value="1" /><span
                        class="mostrarradio">Los almorávides</span><br> <input
                        type="radio" name="pregunta7" value="2" /><span
                        class="mostrarradio">Los vándalos</span><br> <input
                        type="radio" name="pregunta7" value="3" /><span
                        class="mostrarradio">Los almohades</span><br> <input
                        type="radio" name="pregunta7" value="4" /><span
                        class="mostrarradio">Los benimerines</span><br>
                </div>
                <input type="submit" value="Responder">
            </form>
        </div>
    </div>
</div>

</body>
</html>



