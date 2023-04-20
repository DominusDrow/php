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
			<?php session_unset(); } ?>
			<div class="card card-body">
				<form action="save_pet.php" method="POST" enctype="multipart/form-data">
          <h3 class="text-center">Nueva Mascota</h3>

					<div class="form-group m-2">
						<input type="text" name="name" class="form-control" placeholder="Nombre" autofocus required>
					</div>
					<div class="form-group m-2">
						<input type="text" name="age" class="form-control" placeholder="Edad" autofocus required>
          </div>				
          <div class="form-group m-2">
						<input type="text" name="race" class="form-control" placeholder="Raza" autofocus required>
					</div>
          <div class="form-group m-2">
						<input type="text" name="color" class="form-control" placeholder="Color" autofocus required>
					</div>
          <div class="form-group m-2">
						<input type="text" name="sex" class="form-control" placeholder="Sexo" autofocus required>
					</div>
          <div class="form-group m-2">
            <input class="form-control" type="file" name="image" required>
          </div>


					<div class="form-group m-2">
						<textarea name="description" rows="2" class="form-control" placeholder="Descripción"></textarea>
					</div>
					<div class="row w-100 align-items-center">
						<div class="col text-center">
							<button class="btn btn-success btn-block" name="save_pet">
								Añadir mascota
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>


		<div class="col-md-8">

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

				<a href="edit.php?nombre=<?php echo $row['nombre']?>" class="btn btn-secondary">
					<i class="fas fa-marker"></i>
				</a>

				<a href="delate_pet.php?nombre=<?php echo $row['nombre']?>" class="btn btn-danger">
					<i class="far fa-trash-alt"></i>
				</a>



      </div>
    </div>
  </div>
</div>

	<?php }} ?>

		</div>      
	</div>
</div>
	

<?php include ('./includes/footer.php') ?>

