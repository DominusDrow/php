<?php	include ('db.php') ?>

<?php include ('./includes/header.php') ?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-8 offset-md-2">

<?php
  $query = "SELECT * FROM mascotas";
	$result_mascotas = mysqli_query($conn, $query);    

  while($row = mysqli_fetch_assoc($result_mascotas)) { 
    if($row['estado'] == 0){?>

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

        <form method="post" action="adopcion.php">
          <input type="hidden" name="nombre_mascota" value="<?php echo $row['nombre'] ?>">
          <button type="submit" class="btn btn-primary" name="adoptar">Adoptar</button>
        </form>

      </div>
    </div>
  </div>
</div>

	<?php }} ?>

		</div>      
	</div>
</div>
	

<?php include ('./includes/footer.php') ?>

