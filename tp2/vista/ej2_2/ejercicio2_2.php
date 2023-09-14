<?php
    $tituloPagina = "TP 2 - Ejercicio 2_2";
    include_once("../encabezado.php");
?>

<script type="text/javascript">
    $(function(){
        $("#submit").click(function(){
            var lunes = $("#lunes").val();
            var martes = $("#martes").val();
            var miercoles = $("#miercoles").val();
            var jueves = $("#jueves").val();
            var viernes = $("#viernes").val();
            var val1,val2,val3,val4,val5,esValido = false;

            if(lunes == "" || isNaN(lunes) || lunes < 0 || lunes > 6){
                $("#lunes").css({"border": "1px red solid"}); 
            }else{
                $("#lunes").css({"border": "1px solid"});
                val1 = true;
            }

            if(martes == "" || isNaN(martes) || martes < 0 || martes > 6){
                $("#martes").css({"border": "1px red solid"});
            }else{
                $("#martes").css({"border": "1px solid"});
                val2 = true;
            }

            if(miercoles == "" || isNaN(miercoles) || miercoles < 0 || miercoles > 6){
                $("#miercoles").css({"border": "1px red solid"});
            }else{
                $("#miercoles").css({"border": "1px solid"});
                val3 = true;
            }

            if(jueves == "" || isNaN(jueves) || jueves < 0 || jueves > 6){
                $("#jueves").css({"border": "1px red solid"});
            }else{
                $("#jueves").css({"border": "1px solid"});
                val4 = true;
            }

            if(viernes == "" || isNaN(viernes) || viernes < 0 || viernes > 6){
                $("#viernes").css({"border": "1px red solid"});
            }else{
                $("#viernes").css({"border": "1px solid"});
                val5 = true;
            }

            if(val1 && val2 && val3 && val4 && val5){
                $("#error").fadeOut();
                esValido = true;
            }else{
                $("#error").fadeIn();
            }

            return esValido;
        });
    });
</script>

<div id="ejercicio">
    <form align="center" id="ejercicioFormulario" name="ejercicio2" method="get" action="formAccion2_2.php">
        <h3>Ingrese las horas por dia de Programaci&oacute;n Web Din&aacute;mica</h3>
        <h3>Lunes:</h3><input id="lunes" name="lunes">
        <h3>Martes:</h3><input id="martes" name="martes">
        <h3>Miercoles:</h3><input id="miercoles" name="miercoles">
        <h3>Jueves:</h3><input id="jueves" name="jueves">
        <h3>Viernes:</h3><input id="viernes" name="viernes"><br><br>
        <input type="submit" id="submit" name="submit"value="Aceptar"/><br>
        <div id="error" style="display: none;"><h3>Debe ingresar un numero del 0 al 6 en los campos</h3></div>
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>