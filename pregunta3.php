
<?php
require_once 'includes/cabecera.php';
?>

<?php
require_once 'includes/evaluar_respuestas.php';
//Evaluar la respuesta. la función está en evaluar_respuestas.php
evaluar(3, "3");
?>

<div id="divformulario">
    <h2>Pregunta 3 Al Andalus</h2>

    <p>Los abbasíes hicieron una buena escabechina entre la familia de los Omeyas, que hasta entonces habían 
        gobernado en Damasco como califas. Pero hubo un joven superviviente omeya que escapó hasta Al Andalus. Este 
        afortunado desembarcó en otoño del año 755 en Almuñecar, y con el tiempo creó el emirato de Córdoba, 
        independiente del Califato abbasí de Damasco. ¿De quién hablamos?</p><br>
    <div style="overflow: hidden; width: auto;">
        <div style="float: left;">
            <img src="img/Andalus_3_Abd_al_Rahman_I.jpg" width="100%" class="imagen1">
        </div> 
        <div style="float: center;">
            <form action="" method="post">
                <div class="cajaradio">
                    <input type="radio" name="pregunta3" value="1"/><span class="mostrarradio">Muhammad I</span><br>
                    <input type="radio" name="pregunta3" value="2"/><span class="mostrarradio">Al Hakam II</span><br>
                    <input type="radio" name="pregunta3" value="3"/><span class="mostrarradio">Abd al-Rahmán I</span><br>
                    <input type="radio" name="pregunta3" value="4"/><span class="mostrarradio">Alfonso VI</span><br>
                </div>
                <input type="submit" value="Responder">
            </form>
        </div>
    </div>
</div>

</body>
</html>

