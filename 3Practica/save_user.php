<?php
include ('db.php');

	if(isset($_POST['save_user'])){
		$nombre = $_POST['nombre'];
		$image = $_POST['image'];
		$query = "INSERT INTO voters(name,image) VALUES ('$nombre','$image')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			die("Query Failed");
		}
		$_SESSION['message'] = 'User Saved Successfully';
		$_SESSION['message_type'] = 'success';
		header("Location: registrar.php");
	}
?>
