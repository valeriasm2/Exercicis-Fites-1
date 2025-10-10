<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ejemploFita2_2.php aparece un menu despegable con las 5 opciones que se han enviado del form de ejemploFita2.php y se envia get a la siquiente pagina ejemploFita2_3.php -->
    <form action="ejemploFita2_3.php" method="get">
        <label for="opcion">Selecciona una opción:</label>
        <select id="opcion" name="opcion">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica que el formulario se ha enviado por POST
                // Recorre los campos del formulario y crea las opciones del desplegable
                for ($i = 1; $i <= 5; $i++) {
                    $campo = "campo" . $i; // Nombres de los campos: campo1, campo2, ..., campo5

                    if (!empty($_POST[$campo])) { // Verifica que el campo no esté vacío
                        $valor = htmlspecialchars($_POST[$campo]); 
                        echo "<option value=\"$valor\">$valor</option>"; // Crea una opción en el desplegable
                    }
                }
            }
            ?>
        </select>
        <input type="submit" value="Enviar">
</body>
</html>