
<?php
require_once 'includes/cabecera.php';
?>

<?php
require_once 'includes/evaluar_respuestas.php';
//Evaluar la respuesta. la función está en evaluar_respuestas.php
evaluar(2, "4");
?>

<div id="divformulario">
    <h2>Pregunta 2 Al Andalus</h2>

    <p> Los primeros conquistadores musulmanes que entraron en la Península fueron bereberes norteafricanos
        recién islamizados. O sea, que eran más papistas que el Papa. Hubo numerosas tribus que pasaron con Tariq. 
        ¿Cuál de los siguientes pueblos NO era bereber?
        <strong>Nota:</strong>El término <i>Bereber</i> procede de la adaptación árabe <i>barbr</i> del griego <i>bárbaro</i>.</p><br>
    <div style="overflow: hidden; width: auto;">
        <div style="float: left;">
            <img src="img/Andalus_2_Bereberes.jpg" width="100%" class="imagen1">
        </div> 
        <div style="float: center;">
            <form action="" method="post">
                <div class="cajaradio">
                    <input type="radio" name="pregunta2" value="1"/><span class="mostrarradio">Masmuda</span><br>
                    <input type="radio" name="pregunta2" value="2"/><span class="mostrarradio">Wazdadya</span><br>
                    <input type="radio" name="pregunta2" value="3"/><span class="mostrarradio">Nafza</span><br>
                    <input type="radio" name="pregunta2" value="4"/><span class="mostrarradio">Yemeníes</span><br>
                </div>
                <input type="submit" value="Responder">
            </form>
        </div>
    </div>
</div>

</body>
</html>
