
<?php
require_once 'includes/cabecera.php';
?>

<?php
require_once 'includes/evaluar_respuestas.php';
//Evaluar la respuesta. la función está en evaluar_respuestas.php
evaluar(6, "3");
?>

<div id="divformulario">
    <h2>Pregunta 6 Al Andalus</h2>

    <p>Puede que así de primeras un tipo llamado Muhammad ibn Abi Amir,
        Al-Mansur (el Victorioso), no os suene de nada. Pero si decimos que
        este señor fue el terrible Almanzor, quizás ya sí. Durante la segunda
        mitad del siglo X y comienzos del XI fue el terror de los cristianos
        peninsulares, que las pasaron moradas ante sus acometidas. Entre sus
        devastadoras campañas destacan la conquista de Barcelona (985) y el
        saqueo de Santiago (997). Pero como todo tiene su fin, aunque sea leyenda, ¿cómo
        completarías la famosa frase "...Almanzor perdió su tambor"?</p>
    <br>
    <div style="overflow: hidden; width: auto;">
        <div style="float: left;">
            <img src="img/Andalus_6_Almanzor.jpg" width="100%"
                 class="imagen1">
        </div>
        <div style="float: center;">
            <form action="" method="post">
                <div class="cajaradio">
                    <input type="radio" name="pregunta6" value="1" /><span
                        class="mostrarradio">En Clavijo</span><br> <input
                        type="radio" name="pregunta6" value="2" /><span
                        class="mostrarradio">En Simancas</span><br> <input
                        type="radio" name="pregunta6" value="3" /><span
                        class="mostrarradio">En Calatañazor</span><br> 
                        <input type="radio"
                        name="pregunta6" value="4" /><span class="mostrarradio">En Zama
                    </span><br>
                </div>
                <input type="submit" value="Responder">
            </form>
        </div>
    </div>
</div>

</body>
</html>



