<?php
//otra forma de hacer la validación es:
//if(isse($_POST['enviar']))
if($_GET){
	$name = $_GET['name'];
	$age = $_GET['age'];
	$fp = fopen("salida.txt","a");

	//escribir la info en archivos
	fwrite($fp, "Nombre: ".$name." Edad: ".$age."\n");
	fclose($fp)

	//mostrar los datos
	echo "Nombre: ".$name." <br>Edad:".$age;
}
else{
	echo "No name";
}
?>
