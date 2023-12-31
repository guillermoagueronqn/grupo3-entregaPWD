<?php
    $tituloPagina = "TP 3 - Ejercicio 3 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control3.php");
    $objControl3 = new control3();
    $contenido_cine = $objControl3->cinema($_POST,$_FILES);
    $dir = "../../archivos/";
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <div id = "resultado_4">
            <h3 id = "title">La película introducida es: </h3><br>
            <?php
                echo "<strong>"."Titulo: "."</strong>".$contenido_cine["titulo"]. "<br>";
                echo "<strong>"."Actores: "."</strong>".$contenido_cine["actores"] . "<br>";
                echo "<strong>"."Director: "."</strong>".$contenido_cine["director"] . "<br>";
                echo "<strong>"."Guion: "."</strong>".$contenido_cine["guion"] . "<br>";
                echo "<strong>"."Produccion: "."</strong>".$contenido_cine["produccion"] . "<br>";
                echo "<strong>"."Año: "."</strong>".$contenido_cine["year"] . "<br>";
                echo "<strong>"."Nacionalidad: "."</strong>".$contenido_cine["nacionalidad"] . "<br>";
                echo "<strong>"."Género: "."</strong>".$contenido_cine["genero"] . "<br>";
                echo "<strong>"."Duración: "."</strong>".$contenido_cine["duracion"] . "<br>";
                if ($contenido_cine["restriccion"] == "a") {
                    echo "<strong>"."Restricción de edad:"."</strong>"." Todo los públicos <br>";
                } elseif ($contenido_cine["restriccion"] == "b") {
                    echo "<strong>"."Restricción de edad:"."</strong>"." Mayores de 7 años <br>";
                } else {
                    echo "<strong>"."Restricción de edad: "."</strong>"."Mayores de 18 años <br>";
                }
                echo "<strong>"."Sinopsis: "."</strong>".$contenido_cine["sinopsis"]."<br>";
                if ($contenido_cine["imagen"] != "error. No se ha subido ninguna foto") {
                    if (!copy($contenido_cine["imagen"], $dir.$_FILES["mi_imagen"]["name"])) {
                        echo "<h3 align='center'>ERROR: no se pudo cargar el archivo</h3>";
                    } else {
                        //echo "<h3 align='center'>El archivo " . $_FILES['mi_imagen']["name"] . " se ha copiado con Éxito</h3>";
                        echo "<img src='../../archivos/" . $_FILES['mi_imagen']["name"] . "' style='height:250px; width:300px'>" . "<br>";
                    }
                } else {
                    echo "<h3>" . $contenido_cine["imagen"] . "</h3>";
                }
            ?>
        </div>
        </div>
</div>

<div id="volver">
    <a href="ejercicio3.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>