
<?php
require_once 'includes/cabecera.php';
?>

<?php
require_once 'includes/evaluar_respuestas.php';
//Evaluar la respuesta. la función está en evaluar_respuestas.php
evaluar(10, "2");
?>

<div id="divformulario">
    <h2>Pregunta 10 Al Andalus</h2>

    <p>¿A qué complejo palacial de época nazarí corresponde la imagen?</p>
    <br>
    <div style="overflow: hidden; width: auto;">
        <div style="float: left;">
            <img src="img/Andalus_10_Alhambra.jpg" width="100%"
                 class="imagen1">
        </div>
        <div style="float: center;">
            <form action="" method="post">
                <div class="cajaradio">
                    <input type="radio" name="pregunta10" value="1" /><span
                        class="mostrarradio">Mezquita de Córdoba</span><br> <input
                        type="radio" name="pregunta10" value="2" /><span
                        class="mostrarradio">Alhambra de Granada</span><br> <input type="radio"
                        name="pregunta10" value="3" /><span
                        class="mostrarradio">Fortaleza califal de Gormaz</span><br>
                    <input type="radio" name="pregunta10" value="4" /><span
                        class="mostrarradio">Reales Alcázares de Sevilla</span><br>
                </div>
                <input type="submit" value="Responder">
            </form>
        </div>
    </div>
</div>

</body>
</html>



