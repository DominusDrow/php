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
				<form action="save_user.php" method="POST">
					<div class="form-group m-2">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre votante" autofocus>
					</div>
					<div class="form-group m-2">
						<textarea name="image" rows="2" class="form-control" placeholder="Url imagen"></textarea>
					</div>
					<div class="row w-100 align-items-center">
						<div class="col text-center">
							<button class="btn btn-success btn-block" name="save_user">
								Save User
							</button>
						</div>
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
						<th>Votó</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = "SELECT * FROM voters";
						$result_users = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($result_users)){ ?>
							<tr>
								<td><img src="<?php echo $row['image'] ?>" width="100px" height="100px"></td>
								<td><?php echo $row['name'] ?></td>
								<td><?php if ($row['voted'] == 1) {echo "Si";} else {echo "No";} ?></td>
								<td>
									<a href="delete_user.php?id=<?php echo $row['id']?>" class="btn btn-danger">
										<i class="far fa-trash-alt"></i>
									</a>
								</td>
							</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include ('./includes/footer.php') ?>

