<!DOCTYPE html>
<html lang="es">
<head>
	<title>PHP Sesion 2</title>
</head>
<body>
<!--?php
	echo "<h1>";
	echo "Hola PHP";
	echo "</h1>";
?!-->

<h1><?php echo "Hola PHP";?></h1>

<!--?php
	for ($i=1; $i < 6; $i++) { 
		echo "<h$i>Hola PHP</h$i>";
	}
?!-->
<?php
$num1=4;#var1
$num2=11;/* Var2*/
$resul=$num1+$num2;
echo "<p> La suma de $num1 y $num2 es: $resul</p>";
echo '<p> La suma de $num1 y $num2 es: $resul</p>';

echo "<p>Codigo dinamico</p>";
echo '<p>Codigo dinamigo</p>';

echo "<pre>Codigo preformateado</pre>";
?>

<?php
	for ($i=0; $i <= 12; $i++) { 
		echo "<b>Multiplicacion de 1 * $i = ". (1*$i)."<br>";
	}
?>

<?php
	for ($i=1; $i <= 5; $i++) { 
		for ($j=1; $j <=12; $j++) { 
			echo "<pre>Multiplicacion de $i * $j = ". ($i*$j)."</pre>";
		}
	echo "<br>";	
	}
?>
</body>
</body>
</html>