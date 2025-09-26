<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sudoku :)</title>
	<style>
		h1 {
			text-align: center;
			color: blue;
		}
		body {
			font-family: Arial, sans-serif;
			margin: 20px;
		}
		footer {
		    position: fixed;
		    bottom: 0;
		    left: 0;
		    width: 100%;
		    padding: 10px;
		    background: lemonchiffon;
		    text-align: center;
		}
		table {
			border-collapse: collapse;
			margin: 20px auto;
		}
		td {
			border: 1px solid black;
			padding: 10px;
			text-align: center;
			width: 40px;
			height: 40px;
		}
	    .negrita-abajo {
	        border-bottom: 3px solid black;
	    }
	    .negrita-derecha {
	        border-right: 3px solid black;
	    }
		/*tr:nth-child(3n) td {
		    border-bottom: 3px solid black;
		}

		tr td:nth-child(3n) {
		    border-right: 3px solid black;
		}*\
	</style>
</head>
<body>
	<?php
		echo "<h1>Juego Sudoku :)</h1>";
		$F = 9; 
		$C = 9;
	?>
	<table>
        <?php
            for ($i = 0; $i < $F; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $C; $j++) {
                    // clase vacía al inicio
                    $class = "";

                    // cada 3 filas → línea negra abajo
                    if (($i + 1) % 3 == 0) {
                        $class .= " negrita-abajo";
                    }

                    // cada 3 columnas → línea negra derecha
                    if (($j + 1) % 3 == 0) {
                        $class .= " negrita-derecha";
                    }

                    echo "<td class='$class'></td>";
                }
                echo "</tr>";
            }
        ?>
	</table>

	<footer>
		<div>© 2025 Sudoku </div>
	</footer>
</body>
</html>
