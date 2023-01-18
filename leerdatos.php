
<!DOCTYPE html>
<html>
<head>
		<title>Leer datos</title>
</head>
<body>

<h2>DATOS LEIDOS</h2>
<hr>

<?php
	

	$fp = fopen("salida.txt", "r");
	$sum = 0;
	$n = 0;
	while(!feof($fp)){
		
		$linea = fgets($fp);
		$partes = explode(" ",$linea);
		$edad = $partes[count($partes) - 1];
		$n++;
		$sum=$sum + intval($edad);
		echo $linea."<br>";
	}

	$promedio = $sum / $n;
	echo "El promedio de edad es: ".$promedio;

	fclose($fp)
?>

</body>
</html>

