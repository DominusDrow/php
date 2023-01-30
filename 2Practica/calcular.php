<?php
	session_start();
	include("./conjuntos.php");
	include("./randomSet.php");

	if(isset($_POST['save_sets']))
	{

		$_SESSION['setA'] = $_POST['setA'];
		$_SESSION['setB'] = $_POST['setB'];

		$_SESSION['message'] = "Conjuntos creados correctamente";

		header("Location: ./index.php");

	}
?>
