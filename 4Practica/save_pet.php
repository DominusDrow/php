<?php
include ('db.php');

	if(isset($_POST['save_pet'])){

		$name = $_POST['name'];
		$age = $_POST['age'];
		$race = $_POST['race'];
		$color = $_POST['color'];
		$sex = $_POST['sex'];
		$image = $_FILES['image']['name'];
		$tmp_image = $_FILES['image']['tmp_name'];
		$description = $_POST['description'];
		
		copy($tmp_image, "/opt/lampp/htdocs/phpCurso/4Practica/src/" . $image);

		$query = "INSERT INTO  mascotas(nombre, edad, raza, color, sexo, descripcion, foto) VALUES('$name', $age, '$race', '$color', '$sex', '$description', './src/$image')";

		$result = mysqli_query($conn, $query);
		if(!$result){
			die("Query Failed");
		}
		$_SESSION['message'] = 'Mascota Añadida!!!';
		$_SESSION['message_type'] = 'success';
		header("Location: mascotasAdmin.php");
	}
?>
