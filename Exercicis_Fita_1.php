<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOLA</title>
	<style>
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
			margin-top: 20px;
		}
		td {
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>

	<h1> FITA 1 :) </h1>

	<?php
		echo "EJERCICIO 1:";
	?>

	<table>
		<tr>
			<?php 
				for ($N = 0; $N <= 10; $N++) {
					echo "<td>$N</td>";
				}
			?>
		</tr>
	</table>

	<?php
	    echo "<br><br>EJERCICIO 2:";
	?>

	<table>
	    <tr>
	        <?php 
	            for($i=65; $i<=90; $i++) {  
	                $letra = chr($i);
	                echo "<td>$letra</td>";  
	            }
	        ?>
	    </tr>
	    <tr>
	        <?php
	            for($n=0; $n<=25; $n++) {  
	                echo "<td>$n</td>";  
	            }
	        ?>
	    </tr>
	</table>

	<?php
	    echo "<br><br>EJERCICIO 3:";
	    $M = 5; // filas
	    $N = 7; // columnas
	?>
	<table>
	    <?php 
	        for ($i = 0; $i <= $M; $i++) {
	            echo "<tr>";
	            for ($j = 0; $j <= $N; $j++) {
	                echo "<td>" . ($i + $j) . "</td>";
	            }
	            echo "</tr>";
	        }
	    ?>
	</table>


	<?php
	    echo "<br><br>EJERCICIO 4:";
	    $N = 5;
	    $M = 4;
	?>
	<table>
		<tr>
			<td></td>
			<?php
				for ($j = 1; $j <= $N; $j++){
					echo "<td>$j</td>";
				}
			?>
		</tr>
		<tr>
		    <?php
			    for ($i = 0; $i < $M; $i++) {
			    	echo "<tr>";
			    	$letra = chr(65 + $i);
			    	echo "<td>$letra</td>";

			            for ($j = 1; $j <= $N; $j++) {
			                echo "<td></td>";
			            }

			            echo "</tr>";
			        }
		    ?>
		</tr>
	</table>

	<footer>
		<div>Footer</div>
	</footer>

</body>
</html>
