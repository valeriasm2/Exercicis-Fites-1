<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- en ejemploFita2.php aparece un formulari con 5 camp text, manda post a la siguiente pagina ejemploFita2_2.php -->
    <form action="ejemploFita2_2.php" method="post">
        <label for="campo1">Campo 1:</label>
        <input type="text" id="campo1" name="campo1"><br><br>

        <label for="campo2">Campo 2:</label>
        <input type="text" id="campo2" name="campo2"><br><br>

        <label for="campo3">Campo 3:</label>
        <input type="text" id="campo3" name="campo3"><br><br>

        <label for="campo4">Campo 4:</label>
        <input type="text" id="campo4" name="campo4"><br><br>

        <label for="campo5">Campo 5:</label>
        <input type="text" id="campo5" name="campo5"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>