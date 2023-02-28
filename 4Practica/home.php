<?php	include ('db.php') ?>

<?php include ('./includes/header.php') ?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<?php if(isset($_SESSION['message'])){ ?>
				<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
					<?= $_SESSION['message'] ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php unset($_SESSION['message']); } ?>
			<div class="card card-body">
<?php
if(isset($_SESSION['name'])){
  $name = $_SESSION['name'];
  $query = "SELECT * FROM usuarios WHERE nombre = '$name'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $id = $row['id'];
  $nombre = $row['nombre'];
  $telefono = $row['telefono'];
  $mascotas = $row['mascota'];
?>

<div class="card">
  <img src="./src/usuario.jpg" class="card-img-top" height="250" alt="...">
  <div class="card-body">
  <h5 class="card-title text-center"><?php echo $nombre ?></h5>
    <p class="card-text text-center">Tel:<?php echo $telefono ?></p>
    <p class="card-text text-center"><?php echo $mascotas ?> adopciones</p>
  </div>
</div>

<?php } ?>

			</div>
		</div>
		<div class="col-md-8">

<?php
  $query = "SELECT * FROM adopciones WHERE id_usuario = '$id'";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_assoc($result)) { 
    $id_mascota = $row['id_mascota'];
    $query_mascota = "SELECT * FROM mascotas WHERE id = '$id_mascota'";
	  $result_mascotas = mysqli_query($conn, $query_mascota);    
    $row = mysqli_fetch_assoc($result_mascotas);
?>

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $row['foto'] ?>" class="card-img" alt="Foto de la mascota">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title"><?php echo $row['nombre'] ?></h4>
        <p class="card-text"><strong>Edad:</strong> <?php echo $row['edad'] ?></p>
        <p class="card-text"><strong>Raza:</strong> <?php echo $row['raza'] ?></p>
        <p class="card-text"><strong>Color:</strong> <?php echo $row['color'] ?></p>
        <p class="card-text"><strong>Sexo:</strong> <?php echo $row['sexo']; ?></p>
        <p class="card-text"><strong>Breve descripción:</strong> <?php echo $row['descripcion']; ?></p>

        <form method="post" action="abandonar.php">
          <input type="hidden" name="nombre_mascota" value="<?php echo $row['nombre'] ?>">
          <button type="submit" class="btn btn-danger" name="adoptar">Abandonar</button>
        </form>

      </div>
    </div>
  </div>
</div>

	<?php } ?>



		</div>
	</div>
</div>

<?php include ('./includes/footer.php') ?>

