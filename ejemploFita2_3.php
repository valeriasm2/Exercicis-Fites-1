<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- nos muetsra la opcion seleccionada en el desplegable de la pagiina anterior ejemploFita2_2.php-->

    <?php
    if (isset($_GET['opcion'])) {
        $opcion = $_GET['opcion'];
        echo "<h1>Opción seleccionada: $opcion</h1>";
    }
    ?>
</body>
</html>