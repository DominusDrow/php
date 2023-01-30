<!DOCTYPE html>
<html>
<head>
		<title>Clase Circulo</title>
</head>
<body>
<h2>Clase circulo</h2>
<hr>
<?php
require ("circulo.php");
$circulo1 = new Circulo(100,50,20);
$circulo2 = new Circulo(200,100,40);
$circulo3 = new Circulo(0,0,0);

$circulo1 -> muetra("soy el circulo");
$area1 = $circulo1 ->area();
$perimetro1 = $circulo1 ->perimetro();
echo "<br>El area del circulo 1 es $area1<br>";
echo "<br>El perimetro del circulo 1 es $perimetro1<br>";

$circulo2 -> muetra("soy el circulo mas grande");
$area2 = $circulo2 ->area();
$perimetro2 = $circulo2 ->perimetro();
echo "<br>El area del circulo 2 es $area2<br>";
echo "<br>El perimetro del circulo 2 es $perimetro2<br>";

$circulo3->suma($circulo1,$circulo2);
$circulo3 -> muetra("<h3>soy la suma de los circulos</h3>");
$area3 = $circulol3 ->area();
$perimetro3 = $circulo3 ->perimetro();
echo "<br>El area del circulo 3 es $area3<br>";
echo "<br>El perimetro del circulo 3 es $perimetro3<br>";


?>
</body>
</html>

