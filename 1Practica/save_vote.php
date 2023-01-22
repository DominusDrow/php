<?php
include("./db.php");

if(isset($_POST['save_vote'])){
		$nombre = $_POST['nombre'];
		$vote = $_POST['imgbackground'];

		$query = "INSERT INTO vote(name,political) VALUES ('$nombre','$vote')";
		$result = mysqli_query($conn, $query);
		if(!$result) {
			die("Query Failed.");
		}
		$_SESSION['message'] = 'Voto Guardado';
		$_SESSION['message_type'] = 'success';
		header("Location: index.php");

}
?>
