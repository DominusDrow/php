<?php
include ('db.php');

if(isset($_GET['nombre'])){
	$nombre = $_GET['nombre'];
	$query = "SELECT * FROM `mascotas` WHERE `mascotas`.`nombre` = '$nombre'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result);

		$age = $row['edad'];
		$race = $row['raza'];
		$color = $row['color'];
		$sex = $row['sexo'];
		$image = $row['foto'];
		$description = $row['descripcion'];
	
	}
}

if(isset($_POST['update'])){
	$nombre = $_GET['nombre'];

	$name = $_POST['name'];
	$age = $_POST['age'];
	$race = $_POST['race'];
	$color = $_POST['color'];
	$sex = $_POST['sex'];
	$image = $_FILES['image']['name'];
	$tmp_image = $_FILES['image']['tmp_name'];
	$description = $_POST['description'];

	if($image){
		copy($tmp_image, "/opt/lampp/htdocs/phpCurso/4Practica/src/" . $image);

		$query = "UPDATE `mascotas` SET `nombre`='$name',`edad`='$age',`raza`='$race',`color`='$color',`sexo`='$sex',`descripcion`='$description',`foto`='./src/$image' WHERE `mascotas`.`nombre` = '$nombre'";

	}
	else{
		$query = "UPDATE `mascotas` SET `nombre`='$name',`edad`='$age',`raza`='$race',`color`='$color',`sexo`='$sex',`descripcion`='$description' WHERE `mascotas`.`nombre` = '$nombre'";
	}

	$result = mysqli_query($conn, $query);
	if(!$result){
		die("Query Failed");
	}
	$_SESSION['message'] = 'Mascota modidificada';
	$_SESSION['message_type'] = 'warning';
	header("Location: mascotasAdmin.php");
}
?>

<?php include ('includes/header.php'); ?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="edit.php?nombre=<?php echo $_GET['nombre']; ?>" method="POST" enctype="multipart/form-data">

					<div class="form-group m-2">
						<img src="<?php echo $image;?>" width="300">
					</div>

					<div class="form-group m-2">
						<input type="text" name="name" value="<?php echo $nombre;?>" class="form-control" placeholder="Nombre" autofocus required>
					</div>
					<div class="form-group m-2">
						<input type="text" name="age" value="<?php echo $age;?>" class="form-control" placeholder="Edad" autofocus required>
          </div>				
          <div class="form-group m-2">
						<input type="text" name="race" value="<?php echo $race;?>" class="form-control" placeholder="Raza" autofocus required>
					</div>
          <div class="form-group m-2">
						<input type="text" name="color" value="<?php echo $color;?>" class="form-control" placeholder="Color" autofocus required>
					</div>
          <div class="form-group m-2">
						<input type="text" name="sex" value="<?php echo $sex;?>" class="form-control" placeholder="Sexo" autofocus required>
					</div>
          <div class="form-group m-2">
            <input class="form-control" type="file" name="image">
          </div>

					<div class="form-group m-2">
						<textarea name="description" rows="2" class="form-control" placeholder="Descripción"><?php echo $description;?></textarea>
					</div>
	
					<div class="row w-100 align-items-center">
						<div class="col text-center">
							<button class="btn btn-success btn-block" name="update">
								Update
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include ('includes/footer.php'); ?>
