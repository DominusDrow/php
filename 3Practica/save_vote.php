<?php
include("./db.php");

if(isset($_POST['save_vote'])){
		$nombre = $_POST['voter_id'];
		$vote = $_POST['imgbackground'];

		$query = "INSERT INTO votes(voter_id,party_id) VALUES ($nombre, $vote)";		
		$result = mysqli_query($conn, $query);

		$query = "UPDATE voters SET voted = 1 WHERE id = $nombre";
		$result = mysqli_query($conn, $query);

		if(!$result) {
			die("Query Failed.");
		}
	
		$_SESSION['message'] = 'Voto Guardado';
		$_SESSION['message_type'] = 'success';
		header("Location: index.php");

}
?>
