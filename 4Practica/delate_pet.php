
<?php
include ('db.php');

if(isset($_GET['nombre'])){
	$nombre = $_GET['nombre'];
	$query = "DELETE FROM `mascotas` WHERE `mascotas`.`nombre` = '$nombre'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		die("Query Failed");
	}
	$_SESSION['message'] = 'Mascota Abandonada';
	$_SESSION['message_type'] = 'danger';
	header("Location: mascotasAdmin.php");
}
?>
