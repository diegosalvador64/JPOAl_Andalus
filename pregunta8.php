
<?php
require_once 'includes/cabecera.php';
?>

<?php
require_once 'includes/evaluar_respuestas.php';
//Evaluar la respuesta. la función está en evaluar_respuestas.php
evaluar(8, "3");
?>

<div id="divformulario">
    <h2>Pregunta 8 Al Andalus</h2>

    <p>
        En 1195, los almohades dieron una buena paliza a los castellanos en la batalla de Alarcos. 
        Su rey Alfonso VIII juró venganza. Tardó años en organizar una coalición de reinos cristianos hispanos, el Papado y voluntarios europeos,
        pero por fin lo consiguió y en 1212 derrotaron en la batalla de las Navas de Tolosa a los almohades. Sin embargo hubo algún reino 
        cristiano peninsular reticente que no acudió a la llamada del castellano. ¿Cuál de estos no se presentó?
        <strong>Nota:</strong> la batalla de las Navas de Tolosa abrió Andalucía a la expansión de los cristianos. Fue el
        combate más importante de la denominada Reconquista.	
    </p>
    <br>
    <div style="overflow: hidden; width: auto;">
        <div style="float: left;">
            <img src="img/Andalus_8_Navas_Tolosa.jpg" width="100%" class="imagen1">
        </div>
        <div style="float: center;">
            <form action="" method="post">
                <div class="cajaradio">
                    <input type="radio" name="pregunta8" value="1" /><span
                        class="mostrarradio">Aragón</span><br> <input
                        type="radio" name="pregunta8" value="2" /><span
                        class="mostrarradio">Castilla</span><br> <input
                        type="radio" name="pregunta8" value="3" /><span
                        class="mostrarradio">León</span><br> <input
                        type="radio" name="pregunta8" value="4" /><span
                        class="mostrarradio">Navarra</span><br>
                </div>
                <input type="submit" value="Responder">
            </form>
        </div>
    </div>
</div>

</body>
</html>



