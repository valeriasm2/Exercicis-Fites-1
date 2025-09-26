<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Batalla Naval </title>
    <style>
        h1 {
            text-align: center;
            color: navy;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            margin: 40px auto;
        }
        td {
            border: 1px solid black;
            width: 40px;
            height: 40px;
            text-align: center;
        }
        .header {
            font-weight: bold;
            background: lightblue;
        }
        .row-label {
            font-weight: bold;
            background: lightblue;
        }
        .P { 
            background: darkred; 
            color: white; 
        }
        .D {
            background: orange;
        }
        .S {
            background: green; 
        }
        .F {
            background: gray; 
        }
    </style>
</head>
<body>
    <h1>Batalla Naval 🚢</h1>

    <?php
        $F = 10;
        $C = 10;
        $tablero = array_fill(0, $F, array_fill(0, $C, ''));

        // Definimos barcos con letra y cantidad
        $barcos = [
            'P' => 1, // Portaaviones (4)
            'D' => 2, // Destructor (3)
            'S' => 3, // Submarino (2)
            'F' => 4  // Fragata (1)
        ];
        $longitudes = ['P'=>4, 'D'=>3, 'S'=>2, 'F'=>1];
    ?>

    // Tablero
    <table>
        <tr>
            <td class="header"></td>
            <?php for ($j = 1; $j <= $C; $j++) : ?>
                <td class="header"><?= $j ?></td>
            ?>
        </tr>

        <?php for ($i = 0; $i < $F; $i++) : 
            $letra = chr(65 + $i); ?>
            <tr>
                <td class="row-label"><?= $letra ?></td>
                <?php for ($j = 0; $j < $C; $j++) : 
                    $clase = $tablero[$i][$j]; ?>
                    <td class="<?= $clase ?>"><?= $clase ? $clase : '' ?></td>
                ?>
            </tr>
        ?>
    </table>

</body>
</html>
