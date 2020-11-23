
<?php
require_once 'includes/cabecera.php';
?>

<?php
require_once 'includes/evaluar_respuestas.php';
//Evaluar la respuesta. la función está en evaluar_respuestas.php
evaluar(9, "4");
?>

<div id="divformulario">
    <h2>Pregunta 9 Al Andalus</h2>

    <p>La célebre Torre del Oro de Sevilla que aparece en la imagen fue
        construida en la etapa almohade de la ciudad. ¿Qué función tuvo en
        aquella época?</p>
    <br>
    <div style="overflow: hidden; width: auto;">
        <div style="float: left;">
            <img src="img/Andalus_9_Torre_del_Oro.jpg" width="100%"
                 class="imagen1">
        </div>
        <div style="float: center;">
            <form action="" method="post">
                <div class="cajaradio">
                    <input type="radio" name="pregunta9" value="1" /><span
                        class="mostrarradio">Biblioteca</span><br> <input
                        type="radio" name="pregunta9" value="2" /><span
                        class="mostrarradio">Baños</span><br> <input type="radio"
                        name="pregunta9" value="3" /><span
                        class="mostrarradio">Mezquita</span><br>
                    <input type="radio" name="pregunta9" value="4" /><span
                        class="mostrarradio">Baluarte defensivo</span><br>
                </div>
                <input type="submit" value="Responder">
            </form>
        </div>
    </div>
</div>

</body>
</html>



