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
				<h4 class="text-center">Lista de usuarios</h4>
				<p class="text-center">Control de usuarios</p>
				<form action="pdfAdmin.php" method="POST">
					<div class="col text-center">
						<button class="btn btn-secondary btn-block" type="submit">PDF</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Mascotas</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = "SELECT * FROM usuarios";
						$result_users = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($result_users)){ 
							if($row['nombre'] != 'admin'){?>
							<tr>
								<td><img src="./src/usuario.png" width="100px" height="100px"></td>
								<td><?php echo $row['nombre'] ?></td>
								<td><?php echo $row['telefono'] ?></td>
								<td><?php echo $row['mascota'] ?></td>
							</tr>
						<?php }}?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include ('./includes/footer.php') ?>
